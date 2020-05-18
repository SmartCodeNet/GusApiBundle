<?php

namespace SmartCodeNet\GusApiBundle\ValueObject;

interface ValueObjectInterface
{
    public static function fromNative();

    public function toNative();

    public function __toString();
}
