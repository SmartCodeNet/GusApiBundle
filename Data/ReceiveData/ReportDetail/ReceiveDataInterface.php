<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail;

use SmartCodeNet\GusApiBundle\Extension\Gus\GusExtension;

interface ReceiveDataInterface
{
    public static function getMethodName(): string;

    public static function getPrefix(): string;

    public function getSpecificData(GusExtension $gusExtension, string $regon): array;
}
