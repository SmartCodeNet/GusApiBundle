<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\ReceiveDataInterface;
use SmartCodeNet\GusApiBundle\DTO\SearchReportDTO;
use SmartCodeNet\GusApiBundle\Extension\Gus\GusExtension;

abstract class BusinessEntityAbstract implements BusinessEntityInterface
{
    /** @var GusExtension  */
    protected $gusExtension;
    /** @var ReceiveDataInterface  */
    private $receiveData;
    /** @var SearchReportDTO */
    private $searchReport;

    public function __construct(
        GusExtension $gusExtension
    ) {
        $this->gusExtension = $gusExtension;
    }

    public function getGusExtension(): GusExtension
    {
        return $this->gusExtension;
    }

    public function setReceiveData(ReceiveDataInterface $receiveData): BusinessEntityInterface
    {
        $this->receiveData = $receiveData;
        return $this;
    }

    public function getSpecificData(): array
    {
        return $this->receiveData->getSpecificData($this->gusExtension, $this->searchReport->getRegon());
    }

    public function setSearchReport(SearchReportDTO $searchReportDTO): BusinessEntityInterface
    {
        $this->searchReport = $searchReportDTO;
        return $this;
    }

    public function getSearchReport(): SearchReportDTO
    {
        return $this->searchReport;
    }
}
