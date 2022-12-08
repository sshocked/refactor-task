<?php

use App\ValidateInterface;

/**
 *
 */
class StrValidator implements ValidateInterface
{
    /**
     * @var string
     */
    private string $str;
    /**
     * @var int
     */
    private int $min;
    /**
     * @var int
     */
    private int $max;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * @param string $str
     * @return $this
     */
    public function setStr(string $str): StrValidator
    {
        $this->str = $str;

        return $this;
    }

    /**
     * @param int $min
     * @return StrValidator
     */
    public function setMin(int $min): StrValidator
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @param int $max
     * @return StrValidator
     */
    public function setMax(int $max): StrValidator
    {
        $this->max = $max;

        return $this;
    }


    /**
     * @return bool
     */
    public function validate(): bool
    {
        return strlen($this->str) >= $this->min && strlen($this->str) <= $this->max;
    }
}