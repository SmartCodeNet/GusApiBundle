<?php

namespace SmartCodeNet\GusApiBundle\DataType;

use SmartCodeNet\GusApiBundle\DTO\SearchReportDTO;
use SmartCodeNet\GusApiBundle\Extension\Gus\GusExtension;

class NipDataType implements InputDataTypeInterface
{
    use DataTypeTrait;

    public function getGeneralData(GusExtension $gusExtension): SearchReportDTO
    {
        return $gusExtension->getGeneralDataNip($this->getFormattedValue());
    }
}
