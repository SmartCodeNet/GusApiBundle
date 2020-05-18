<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType;

use SmartCodeNet\GusApiBundle\Data\DataStructureInterface;
use SmartCodeNet\GusApiBundle\Data\FullAndPkdDataStructure;
use SmartCodeNet\GusApiBundle\Data\FullDataStructure;
use SmartCodeNet\GusApiBundle\Data\SimpleAndPkdDataStructure;
use SmartCodeNet\GusApiBundle\Factory\LawPersonReportDetailFactory;
use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class LawPerson extends BusinessEntityAbstract
{
    public function receiveDataByDataStructure(DataStructureInterface $dataStructure): ValueXmlHandler
    {
        $report = $this->setReceiveData(LawPersonReportDetailFactory::createLawPersonGeneralData())
            ->getSpecificData();

        if ($dataStructure instanceof SimpleAndPkdDataStructure ||
            $dataStructure instanceof FullAndPkdDataStructure) {
            $reportPkd = $this->setReceiveData(LawPersonReportDetailFactory::createLawPersonPkdData())
                ->getSpecificData();
            $report['pkdList'] = array_merge($report['pkdList'] = [], $reportPkd);
        }

        if ($dataStructure instanceof FullDataStructure ||
            $dataStructure instanceof FullAndPkdDataStructure
        ) {
            $reportBranch = $this->setReceiveData(LawPersonReportDetailFactory::createLawPersonCompanyBranchListData())
                ->getSpecificData();
            $report['branchList'] = array_merge($report['branchList'] = [], $reportBranch);
        }

        return ValueXmlHandler::createFromArray($report);
    }
}
