<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LegalPerson;

use SmartCodeNet\GusApiBundle\Constants\GusConstant;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\ReceiveDataAbstract;

class LegalPersonPkdData extends ReceiveDataAbstract
{
    public static function getMethodName(): string
    {
        return GusConstant::LEGAL_PERSON_PKD_DATA;
    }

    public static function getPrefix(): string
    {
        return GusConstant::LEGAL_PREFIX;
    }
}
