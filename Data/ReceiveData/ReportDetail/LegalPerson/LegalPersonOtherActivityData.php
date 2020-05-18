<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LegalPerson;

use SmartCodeNet\GusApiBundle\Constants\GusConstant;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\ReceiveDataAbstract;

class LegalPersonOtherActivityData extends ReceiveDataAbstract
{
    public static function getMethodName(): string
    {
        return GusConstant::LEGAL_PERSON_OTHER_ACTIVITY_DATA;
    }

    public static function getPrefix(): string
    {
        return GusConstant::LEGAL_PREFIX;
    }
}
