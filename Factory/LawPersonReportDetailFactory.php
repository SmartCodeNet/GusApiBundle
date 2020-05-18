<?php

namespace SmartCodeNet\GusApiBundle\Factory;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LawPerson\LawPersonCompanyBranchListData;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LawPerson\LawPersonGeneralData;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LawPerson\LawPersonPkdData;

final class LawPersonReportDetailFactory
{
    public static function createLawPersonGeneralData(): LawPersonGeneralData
    {
        return new LawPersonGeneralData();
    }

    public static function createLawPersonPkdData(): LawPersonPkdData
    {
        return new LawPersonPkdData();
    }

    public static function createLawPersonCompanyBranchListData(): LawPersonCompanyBranchListData
    {
        return new LawPersonCompanyBranchListData();
    }
}