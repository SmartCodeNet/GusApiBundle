<?php

namespace SmartCodeNet\GusApiBundle\Data\SendData;

use SmartCodeNet\GusApiBundle\Constants\GusDataGetConstant;
use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class PkdData
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var bool|null
     */
    private $leading;

    public function __construct(ValueXmlHandler $valueXmlHandler)
    {
        $this->code = $valueXmlHandler->getValue(GusDataGetConstant::PKD_CODE);
        $this->name = $valueXmlHandler->getValue(GusDataGetConstant::PKD_NAME);
        $this->leading = (bool)$valueXmlHandler->getValue(GusDataGetConstant::PKD_LEADING);
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getLeading(): ?bool
    {
        return $this->leading;
    }
}
