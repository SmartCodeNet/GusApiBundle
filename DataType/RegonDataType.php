<?php

namespace SmartCodeNet\GusApiBundle\DataType;

use SmartCodeNet\GusApiBundle\DTO\SearchReportDTO;
use SmartCodeNet\GusApiBundle\Extension\Gus\GusExtension;

class RegonDataType implements InputDataTypeInterface
{
    use DataTypeTrait;

    public function getGeneralData(GusExtension $gusExtension): SearchReportDTO
    {
        return $gusExtension->getGeneralDataRegon($this->getValue());
    }
}
