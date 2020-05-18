<?php

namespace SmartCodeNet\GusApiBundle\ValueObject;

use SmartCodeNet\GusApiBundle\Exception\InvalidValueException;

final class NipNumber implements ValueObjectInterface
{
    use SimpleValueObjectTrait;

    public const INVALID_NIP_NUMBER = 'invalid_nip_number';

    public function __construct($value)
    {
        $value = str_replace([' ', '-'], '', $value);

        if (!is_numeric($value)) {
            throw new InvalidValueException("Invalid NIP number", self::INVALID_NIP_NUMBER);
        }

        $this->value = $value;
    }
}
