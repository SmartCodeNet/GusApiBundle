<?php

namespace SmartCodeNet\GusApiBundle\Data\SendData;

use SmartCodeNet\GusApiBundle\Constants\GusDataGetConstant;
use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class CompanyBranchData
{
    /** @var ExtendOfficeData|null  */
    private $officeData;

    /** @var string|null  */
    private $name;

    public function __construct(ValueXmlHandler $valueXmlHandler)
    {
        $this->officeData = new ExtendOfficeData($valueXmlHandler);
        $this->name = $valueXmlHandler->getValue(GusDataGetConstant::NAME);
    }

    public function getOfficeData(): ?ExtendOfficeData
    {
        return $this->officeData;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
