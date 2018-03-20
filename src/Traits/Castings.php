<?php

namespace DeGecko\Traits;

trait Castings
{
    /**
     * Casts the current number as integer.
     *
     * @return $this
     */
    public function toInt()
    {
        $this->number = (int) $this->number;

        return $this;
    }

    /**
     * Casts the current number as float.
     *
     * @return $this
     */
    public function toFloat()
    {
        $this->number = (float) $this->number;

        return $this;
    }
}