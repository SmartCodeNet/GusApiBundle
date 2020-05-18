<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LegalPerson;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\ReceiveDataAbstract;
use SmartCodeNet\GusApiBundle\Extension\Gus\GusExtension;

abstract class LegalPersonReceiveDataAbstract extends ReceiveDataAbstract
{
    public function getSpecificData(GusExtension $gusExtension, string $regon): array
    {
        return $gusExtension->getSpecificReport($regon, static::getMethodName(), static::getPrefix());
    }
}
