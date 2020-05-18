<?php

namespace SmartCodeNet\GusApiBundle\Constants;

final class GusFullReportParameterConstant
{
    public const LEGAL_PERSON_TYPE = 'F';
    public const LEGAL_PERSON_COMPANY_BRANCH_TYPE = 'LF';
    public const LAW_PERSON_TYPE = 'P';
    public const LAW_PERSON_COMPANY_BRANCH_TYPE = 'LP';

    public const SILOS_ID_1 = '1';
    public const SILOS_ID_2 = '2';
    public const SILOS_ID_3 = '3';
    public const SILOS_ID_4 = '4';
    public const SILOS_ID_6 = '6';

    public const TYPES_ALLOWED = [
        self::LEGAL_PERSON_TYPE => self::LEGAL_PERSON_TYPE,
        self::LEGAL_PERSON_COMPANY_BRANCH_TYPE => self::LEGAL_PERSON_COMPANY_BRANCH_TYPE,
        self::LAW_PERSON_TYPE => self::LAW_PERSON_TYPE,
        self::LAW_PERSON_COMPANY_BRANCH_TYPE => self::LAW_PERSON_COMPANY_BRANCH_TYPE
    ];

    public const SILOS_IDS_ALLOWED = [
        self::SILOS_ID_1 => self::SILOS_ID_1,
        self::SILOS_ID_2 => self::SILOS_ID_2,
        self::SILOS_ID_3 => self::SILOS_ID_3,
        self::SILOS_ID_4 => self::SILOS_ID_4,
        self::SILOS_ID_6 => self::SILOS_ID_6
    ];
}
