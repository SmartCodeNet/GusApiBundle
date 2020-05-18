<?php

namespace SmartCodeNet\GusApiBundle\Data\SendData;

use SmartCodeNet\GusApiBundle\Constants\GusDataGetConstant;
use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class ExtendOfficeData extends SimpleOfficeData
{
    /**
     * @var string|null
     */
    private $countrySymbol;

    /**
     * @var string|null
     */
    private $provinceSymbol;

    /**
     * @var string|null
     */
    private $countySymbol;

    /**
     * @var string|null
     */
    private $communitySymbol;

    /**
     * @var string|null
     */
    private $zipCodeSymbol;

    /**
     * @var string|null
     */
    private $citySymbol;

    /**
     * @var string|null
     */
    private $streetSymbol;

    public function __construct(ValueXmlHandler $valueXmlHandler)
    {
        parent::__construct($valueXmlHandler);
        $this->countrySymbol = $valueXmlHandler->getValue(GusDataGetConstant::ADDRESS_COUNTRY_SYMBOL);
        $this->provinceSymbol = $valueXmlHandler->getValue(GusDataGetConstant::ADDRESS_PROVINCE_SYMBOL);
        $this->countySymbol = $valueXmlHandler->getValue(GusDataGetConstant::ADDRESS_COUNTY_SYMBOL);
        $this->communitySymbol = $valueXmlHandler->getValue(GusDataGetConstant::ADDRESS_COMMUNITY_SYMBOL);
        $this->zipCodeSymbol = $valueXmlHandler->getValue(GusDataGetConstant::ADDRESS_ZIPCODE_SYMBOL);
        $this->citySymbol = $valueXmlHandler->getValue(GusDataGetConstant::ADDRESS_PLACE_SYMBOL);
        $this->streetSymbol = $valueXmlHandler->getValue(GusDataGetConstant::ADDRESS_STREET_SYMBOL);
    }

    public function getCountrySymbol(): ?string
    {
        return $this->countrySymbol;
    }

    public function getProvinceSymbol(): ?string
    {
        return $this->provinceSymbol;
    }

    public function getCountySymbol(): ?string
    {
        return $this->countySymbol;
    }

    public function getCommunitySymbol(): ?string
    {
        return $this->communitySymbol;
    }

    public function getZipCodeSymbol(): ?string
    {
        return $this->zipCodeSymbol;
    }

    public function getCitySymbol(): ?string
    {
        return $this->citySymbol;
    }

    public function getStreetSymbol(): ?string
    {
        return $this->streetSymbol;
    }
}
