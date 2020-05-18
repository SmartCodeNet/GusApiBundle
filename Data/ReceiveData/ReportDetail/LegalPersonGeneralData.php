<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail;

use SmartCodeNet\GusApiBundle\Constants\GusConstant;

class LegalPersonGeneralData extends ReceiveDataAbstract
{
    public static function getMethodName(): string
    {
        return GusConstant::LEGAL_PERSON_GENERAL_DATA;
    }

    public static function getPrefix(): string
    {
        return GusConstant::LEGAL_PREFIX;
    }
}
