<?php

namespace DeGecko;

use DeGecko\Traits\Castings;
use DeGecko\Traits\Checks;
use DeGecko\Traits\Formulas;
use DeGecko\Traits\Mutators;
use DeGecko\Traits\Output;
use DeGecko\Traits\SimpleMath;

/**
 * SuperNumber is a number objectifier.
 * Its purpose is to simply working with numbers.
 *
 * @method abs
 * @method acos
 * @method acosh
 * @method asin
 * @method asinh
 * @method atan
 * @method atanh
 * @method ceil
 * @method cos
 * @method cosh
 * @method deg2rad
 * @method exp
 * @method expm1
 * @method floor
 * @method fmod
 * @method log10
 * @method log1p
 * @method log
 * @method min
 * @method max
 * @method rad2deg
 * @method round
 * @method sin
 * @method sinh
 * @method sqrt
 * @method tan
 * @method tanh
 * @method base_convert
 * @method bindec
 * @method decbin
 * @method dechex
 * @method decoct
 * @method hexdec
 * @method octdec
 * @method pow
 * @package SuperNumber
 */
class SuperNumber
{
    use SimpleMath, Formulas, Mutators, Output, Castings, Checks;

    /**
     * The current value of the instance.
     *
     * @var $number
     */
    protected $number;

    /**
     * Initiates the class if the given $number is a valid numeric value.
     * Otherwise, it throws and explicit error.
     *
     * @param $number
     */
    public function __construct($number)
    {
        $this->number = $number;
        $this->validate();
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
     * Checks the given $number to be numeric.
     * Stores the number so it can be mutated.
     */
    private function validate()
    {
        if (! is_numeric($this->number)) {
            throw new \InvalidArgumentException("Invalid numeric value provided ($this->number).");
        }
    }

    /**
     * Transforms the value.
     * If $percent is true, it will return that percentage of the value.
     *
     * @param      $value
     * @param bool $percentage
     * @return float|int
     */
    private function handleValue($value, $percentage = false)
    {
        if ($percentage) {
            return $value / 100 * $this->number;
        }

        return $value;
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