<?php

namespace SuperNumber;

use SuperNumber\Traits\Formulas;
use SuperNumber\Traits\Mutators;
use SuperNumber\Traits\SimpleMath;

/**
 * Class SuperNumber
 *
 * @package SuperNumber
 */
class SuperNumber
{
    use SimpleMath, Formulas, Mutators;

    /**
     * The current value of the instance.
     *
     * @var $number
     */
    protected $number;

    /**
     * Initiates the class if the given $number is a valid numeric value.
     * Otherwise, it throws and explicit error in regards to it.
     *
     * @param $number
     */
    public function __construct($number)
    {
        $this->validate($number);
    }

    /**
     * Returns the number.
     * Use get() to get the value without being casted to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->number;
    }

    /**
     * Handles calls to methods matching PHP basic math functions.
     *
     * @param       $name
     * @param array $arguments
     * @return $this
     */
    public function __call($name, $arguments = [])
    {
        $phpMathFunctions = [
            'abs', 'acos', 'acosh', 'asin', 'asinh', 'atan', 'atanh', 'ceil', 'cos', 'cosh', 'deg2rad', 'exp', 'expm1',
            'floor', 'fmod', 'log10', 'log1p', 'log', 'min', 'max', 'rad2deg', 'round', 'sin', 'sinh', 'sqrt', 'tan',
            'tanh', 'base_convert', 'bindec', 'decbin', 'dechex', 'decoct', 'hexdec', 'octdec', 'pow',
        ];

        // Handle the math functions.
        if (in_array($name, $phpMathFunctions)) {
            array_unshift($arguments, $this->number);
            $this->number = call_user_func($name, ...$arguments);
        }

        return $this;
    }

    /**
     * Validates the given $number to be numberic.
     * Casts the number to float or int after it determines the type.
     * Stores the number so it can be mutated.
     *
     * @param $number
     */
    private function validate($number)
    {
        if (! is_numeric($number)) {
            throw new \InvalidArgumentException("Invalid numeric value provided ($number).");
        }

        $this->number = $number;
    }

    /**
     * Transforms the value based on the unit
     *
     * @param      $value
     * @param bool $percent
     * @return float|int
     */
    private function handleValue($value, $percent = false)
    {
        if ($percent) {
            return $value / 100 * $this->number;
        }

        return $value;
    }

    /**
     * Returns the current value of $number.
     *
     * @return mixed
     */
    public function get()
    {
        return $this->number;
    }

    /**
     * Set a new value.
     *
     * @param $number
     * @return mixed
     */
    public function set($number)
    {
        $this->number = $number;

        return $this;
    }
}