<?php

namespace DeGecko\Traits;

/**
 * Trait SimpleMath
 *
 * @parameter $number
 * @package SuperNumber\Traits
 */
trait SimpleMath
{
    /**
     * Addition.
     *
     * @param         $value
     * @param boolean $percent
     * @return $this
     */
    public function add($value, $percent = false)
    {
        $this->number += $this->handleValue($value, $percent);

        return $this;
    }

    /**
     * Alias of add.
     *
     * @param      $value
     * @param bool $percent
     * @return $this
     */
    public function plus($value, $percent = false)
    {
        return $this->add($value, $percent);
    }

    /**
     * Alias of add.
     *
     * @param      $value
     * @param bool $percent
     * @return $this
     */
    public function increment($value = 1, $percent = false)
    {
        return $this->add($value, $percent);
    }

    /**
     * Subtraction.
     *
     * @param         $value
     * @param boolean $percent
     * @return $this
     */
    public function subtract($value, $percent = false)
    {
        $this->number -= $this->handleValue($value, $percent);

        return $this;
    }

    /**
     * Alias of subtract.
     *
     * @param         $value
     * @param boolean $percent
     * @return $this
     */
    public function sub($value, $percent = false)
    {
        return $this->subtract($value, $percent);
    }

    /**
     * Alias of subtract.
     *
     * @param $value
     * @param $percent
     * @return $this
     */
    public function minus($value, $percent = false)
    {
        return $this->subtract($value, $percent);
    }

    /**
     * Alias of subtract.
     *
     * @param      $value
     * @param bool $percent
     * @return $this
     */
    public function decrement($value = 1, $percent = false)
    {
        return $this->subtract($value, $percent);
    }

    /**
     * Multiplication.
     *
     * @param         $value
     * @param boolean $percent
     * @return $this
     */
    public function multiply($value, $percent = false)
    {
        $this->number *= $this->handleValue($value, $percent);

        return $this;
    }

    /**
     * Alias of multiply.
     *
     * @param         $value
     * @param boolean $percent
     * @return $this
     */
    public function times($value, $percent = false)
    {
        return $this->multiply($value, $percent);
    }

    /**
     * Division.
     *
     * @param         $value
     * @param boolean $percent
     * @return $this
     */
    public function divide($value, $percent = false)
    {
        $this->number /= $this->handleValue($value, $percent);

        return $this;
    }

    /**
     * Alias of divide.
     *
     * @param         $value
     * @param boolean $percent
     * @return $this
     */
    public function over($value, $percent = false)
    {
        return $this->divide($value, $percent);
    }

    /**
     * Powers.
     *
     * @param $power
     * @return $this
     */
    public function power($power)
    {
        $this->number = pow($this->number, $power);

        return $this;
    }

    /**
     * Computes module by $value of the current $number.
     *
     * @param         $value
     * @param boolean $percent
     * @return SimpleMath
     */
    public function modulo($value, $percent = false)
    {
        $this->number %= $this->handleValue($value, $percent);

        return $this;
    }

    /**
     * Alias of modulo.
     *
     * @param         $value
     * @param boolean $percent
     * @return $this
     */
    public function mod($value, $percent = false)
    {
        return $this->modulo($value, $percent);
    }
}