<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\TypeManager;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\ReceiveDataInterface;

interface TypeManagerInterface
{
    public static function decide(array $generalData): ReceiveDataInterface;
}
