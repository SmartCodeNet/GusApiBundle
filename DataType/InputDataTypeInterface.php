<?php

namespace SmartCodeNet\GusApiBundle\DataType;

use SmartCodeNet\GusApiBundle\DTO\SearchReportDTO;
use SmartCodeNet\GusApiBundle\Extension\Gus\GusExtension;

interface InputDataTypeInterface
{
    public function getGeneralData(GusExtension $gusExtension): SearchReportDTO;
}
