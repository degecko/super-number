<?php

namespace SuperNumber\Traits;

trait Mutators
{
    /**
     * Allows to pass a mutator to modify $number.
     *
     * E.g.:
     * $func = function ($number) {
     *     return $number + 3;
     * }
     * => Adds 3 to the number.
     *
     * @param callable $func
     * @return $this
     */
    public function mutate(callable $func)
    {
        $this->number = $func($this->number);

        return $this;
    }

    /**
     * Applies number_format() to $number.
     *
     * @param int    $decimals
     * @param string $decPoint
     * @param string $thousandsSep
     * @return Mutators
     */
    public function format($decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $this->number = number_format($this->number, $decimals, $decPoint, $thousandsSep);

        return $this;
    }
}