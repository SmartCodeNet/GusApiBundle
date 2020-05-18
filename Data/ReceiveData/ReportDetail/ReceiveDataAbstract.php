<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail;

use SmartCodeNet\GusApiBundle\Extension\Gus\GusExtension;

abstract class ReceiveDataAbstract implements ReceiveDataInterface
{
    public function getSpecificData(GusExtension $gusExtension, string $regon): array
    {
        return $gusExtension->getSpecificReport($regon, static::getMethodName(), static::getPrefix());
    }
}
