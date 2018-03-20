<?php

namespace DeGecko\Traits;

trait Output
{
    /**
     * Returns the number.
     * Use get() to get the value uncasted.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->number;
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
     * Applies number_format() to $number and returns it.
     *
     * @param int    $decimals
     * @param string $decPoint
     * @param string $thousandsSep
     * @return string
     */
    public function format($decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        return number_format($this->number, $decimals, $decPoint, $thousandsSep);
    }

    /**
     * Allows you to use sprintf on the current number.
     *
     * @param       $pattern
     * @param array ...$arguments
     * @return string
     */
    public function printf($pattern, ...$arguments)
    {
        return sprintf($pattern, $this->number, ...$arguments);
    }
}