<?php

namespace DeGecko\Traits;

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
}