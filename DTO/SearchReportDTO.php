<?php
namespace SmartCodeNet\GusApiBundle\DTO;

use SmartCodeNet\GusApiBundle\Helper\DTOHelper;

class SearchReportDTO
{
    /**
     * @var string|null
     */
    private $regon;

    /**
     * @var string|null
     */
    private $regon14;

    /**
     * @var string|null
     */
    private $nip;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var string|null
     */
    private $province;

    /**
     * @var string|null
     */
    private $district;

    /**
     * @var string|null
     */
    private $community;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $zipCode;

    /**
     * @var string|null
     */
    private $street;

    /**
     * @var string|null
     */
    private $houseNumber;

    /**
     * @var string|null
     */
    private $apartmentNumber;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var int|null
     */
    private $silo;

    public function __construct(\SimpleXMLElement $data)
    {
        $this->regon = DTOHelper::overrideField($this->regon, (string)$data->Regon);
        $this->nip = DTOHelper::overrideField($this->nip, (string)$data->Nip);
        $this->name = DTOHelper::overrideField($this->name, (string)$data->Nazwa);
        $this->firstName = DTOHelper::overrideField($this->firstName, (string)$data->Imie);
        $this->lastName = DTOHelper::overrideField($this->lastName, (string)$data->Nazwisko);
        $this->province = DTOHelper::overrideField($this->province, (string)$data->Wojewodztwo);
        $this->district = DTOHelper::overrideField($this->district, (string)$data->Powiat);
        $this->community = DTOHelper::overrideField($this->community, (string)$data->Gmina);
        $this->city = DTOHelper::overrideField($this->city, (string)$data->Miejscowosc);
        $this->zipCode = DTOHelper::overrideField($this->zipCode, (string)$data->KodPocztowy);
        $this->street = DTOHelper::overrideField($this->street, (string)$data->Ulica);
        $this->houseNumber = DTOHelper::overrideField($this->houseNumber, (string)$data->NrNieruchomosci);
        $this->apartmentNumber = DTOHelper::overrideField($this->apartmentNumber, (string)$data->NrLokalu);
        $this->type = DTOHelper::overrideField($this->type, $this->makeType((string)$data->Typ));
        $this->regon14 = DTOHelper::overrideField($this->regon14, $this->makeRegon14((string)$data->regon));
        $this->silo = DTOHelper::overrideField($this->silo, (string)$data->SilosID);
    }

    public function getRegon(): ?string
    {
        return $this->regon;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function getCommunity(): ?string
    {
        return $this->community;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getRegon14(): ?string
    {
        return $this->regon14;
    }

    public function getSilo(): ?int
    {
        return $this->silo;
    }

    private function makeRegon14(string $regon): string
    {
        return str_pad($regon, 14, "0");
    }

    private function makeType(?string $type): ?string
    {
        return strtolower(trim($type));
    }

    public function getNip(): ?string
    {
        return $this->nip;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function getApartmentNumber(): ?string
    {
        return $this->apartmentNumber;
    }
}
