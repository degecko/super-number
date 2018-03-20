<?php

namespace DeGecko\Traits;

trait Checks
{
    /**
     * Returns true if the integer version of the number is odd.
     * 
     * @return int
     */
    public function isOdd()
    {
        return (int) $this->get() % 2 === 0;
    }

    /**
     * Returns true if the integer version of the number is even.
     * 
     * @return bool
     */
    public function isEven()
    {
        return ! $this->isOdd();
    }

    /**
     * Returns true of the current number is equal to $value.
     *
     * @param $value
     * @return bool
     */
    public function equals($value)
    {
        return $this->get() == $value;
    }

    /**
     * Alias of equals.
     *
     * @param $value
     * @return bool
     */
    public function equal($value)
    {
        return $this->equals($value);
    }

    /**
     * Alias of equals.
     *
     * @param $value
     * @return bool
     */
    public function eq($value)
    {
        return $this->equals($value);
    }

    /**
     * Returns true if the current number is less than $value.
     *
     * @param $value
     * @return bool
     */
    public function lessThan($value)
    {
        return $this->get() < $value;
    }

    /**
     * Alias of lessThan.
     *
     * @param $value
     * @return bool
     */
    public function lt($value)
    {
        return $this->lessThan($value);
    }

    /**
     * Returns true if the current number is less than or equal to $value.
     *
     * @param $value
     * @return bool
     */
    public function lessThanOrEqual($value)
    {
        return $this->get() <= $value;
    }

    /**
     * Alias of lessThanOrEqual.
     *
     * @param $value
     * @return bool
     */
    public function lte($value)
    {
        return $this->lessThanOrEqual($value);
    }

    /**
     * Returns true if the current number is greater than $value.
     *
     * @param $value
     * @return bool
     */
    public function greaterThan($value)
    {
        return $this->get() > $value;
    }

    /**
     * Alias of greaterThan.
     *
     * @param $value
     * @return bool
     */
    public function gt($value)
    {
        return $this->greaterThan($value);
    }

    /**
     * Returns true if the current number is greater than or equal to $value.
     *
     * @param $value
     * @return bool
     */
    public function greaterThanOrEqual($value)
    {
        return $this->get() >= $value;
    }

    /**
     * Alias of greaterThanOrEqual.
     *
     * @param $value
     * @return bool
     */
    public function gte($value)
    {
        return $this->greaterThanOrEqual($value);
    }
}