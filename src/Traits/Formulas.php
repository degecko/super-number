<?php

namespace DeGecko\Traits;

trait Formulas
{
    /**
     * Computes the percentage value of
     * the current number from the given $value.
     *
     * It also handles the division by zero common issue.
     *
     * E.g.:
     * $number = 57
     * $value = 200
     * => Returns 28.5, because 57 is 28.5% of 200.
     *
     * @param $value
     * @return $this
     */
    public function percentageOf($value)
    {
        if ($value == 0) {
            // Assigning the value instead of 0, because it might
            // be a float, and we don't want to alter the type.
            $this->number = $value;
        } else {
            $this->number = $this->number / $value * 100;
        }

        return $this;
    }

    /**
     * Alias of percentageOf.
     *
     * @param $value
     * @return $this
     */
    public function percentOf($value)
    {
        return $this->percentageOf($value);
    }

    /**
     * Returns $value % of $number.
     *
     * E.g.:
     * $number = 50
     * $percent = 18
     * => Returns 9, because 18% of 50 is 9.
     *
     * @param $percent
     * @return $this
     */
    public function percentageFrom($percent)
    {
        $this->number = $percent / 100 * $this->number;

        return $this;
    }

    /**
     * Alias of percentageFrom.
     *
     * @param $percent
     * @return $this
     */
    public function percentFrom($percent)
    {
        return $this->percentageFrom($percent);
    }
}