<?php

namespace SmartCodeNet\GusApiBundle\DataType;

use SmartCodeNet\GusApiBundle\DTO\SearchReportDTO;
use SmartCodeNet\GusApiBundle\Exception\BusinessEntityNotFoundException;
use SmartCodeNet\GusApiBundle\Extension\Gus\GusExtension;

class NipDataType implements InputDataTypeInterface
{
    use DataTypeTrait;

    /**
     * @param GusExtension $gusExtension
     * @return SearchReportDTO
     * @throws BusinessEntityNotFoundException
     */
    public function getGeneralData(GusExtension $gusExtension): SearchReportDTO
    {
        return $gusExtension->getGeneralDataNip($this->getFormattedValue());
    }
}
