<?php

namespace SmartCodeNet\GusApiBundle\DataType;

trait DataTypeTrait
{
    /**
     * @var mixed
     */
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return static
     */
    public static function fromValue()
    {
        $value = \func_get_arg(0);
        return new static($value);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return mixed
     */
    public function getFormattedValue()
    {
        return str_replace([' ', '-'], '', $this->value);
    }

    /**
     * @return mixed
     */
    public function __toString()
    {
        return (string)$this->getValue();
    }
}
