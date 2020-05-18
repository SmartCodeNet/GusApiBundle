<?php

namespace SmartCodeNet\GusApiBundle\Extension\Soap;

use SmartCodeNet\GusApiBundle\Constants\GusConstant;
use SmartCodeNet\GusApiBundle\Exception\NoDataException;
use SoapHeader;
use SimpleXMLElement;

/**
 * Class SoapAdapter
 * @package App\Extension
 */
class SoapAdapter implements AdapterInterface
{
    /** @var SoapClient */
    protected $client;
    /** @var string  */
    protected $baseUrl;
    /** @var string  */
    protected $address;

    public function __construct(string $baseUrl, string $address)
    {
        $this->baseUrl = $baseUrl;
        $this->address = $address;

        $options = [
            'soap_version' => SOAP_1_2,
            'trace' => 1,
            'style' => SOAP_DOCUMENT,
            "exceptions" => false
        ];

        try {
            $this->client = new SoapClient($this->baseUrl, $address, $options);
        } catch (\SoapFault $e) {
            return;
        }
    }

    public function getClient(): SoapClient
    {
        return $this->client;
    }


    public function login($userKey)
    {
        $this->prepareSoapHeader('http://CIS/BIR/PUBL/2014/07/IUslugaBIRzewnPubl/Zaloguj', $this->address);
        $result = $this->client->Zaloguj([
            GusConstant::PARAM_USER_KEY => $userKey
        ]);

        return $result->ZalogujResult;
    }


    public function logout($sid): bool
    {
        $this->prepareSoapHeader('http://CIS/BIR/PUBL/2014/07/IUslugaBIRzewnPubl/Wyloguj', $this->address);
        $result = $this->client->Wyloguj([
            GusConstant::PARAM_SESSION_ID => $sid
        ]);

        return $result->WylogujResult;
    }

    /**
     * @param $sid
     * @param array $parameters
     * @return SimpleXMLElement
     * @throws NoDataException
     */
    public function search($sid, array $parameters): SimpleXMLElement
    {
        $this->prepareSoapHeader(
            'http://CIS/BIR/PUBL/2014/07/IUslugaBIRzewnPubl/DaneSzukajPodmioty',
            $this->address,
            $sid
        );

        $queryArray = [
            GusConstant::PARAM_SEARCH => $parameters
        ];

        $result = $this->client->DaneSzukajPodmioty($queryArray);

        try {
            $result = $this->decodeResponse($result->DaneSzukajPodmiotyResult);
        } catch (\Exception $e) {
            throw new NoDataException("No data found for");
        }

        return $result->dane;
    }

    public function getFullData($sid, string $regon, string $reportType): ?array
    {
        $this->prepareSoapHeader(
            'http://CIS/BIR/PUBL/2014/07/IUslugaBIRzewnPubl/DanePobierzPelnyRaport',
            $this->address,
            $sid
        );
        $result = $this->client->DanePobierzPelnyRaport([
            GusConstant::PARAM_REGON => $regon,
            GusConstant::PARAM_REPORT_NAME => $reportType
        ]);

        try {
            $result = $this->decodeResponse($result->DanePobierzPelnyRaportResult);
        } catch (\Exception $e) {
            return null;
        }

        if (count($result->dane) > 1) {
            $array = [];
            foreach ($result->dane as $data) {
                $array[] = (array)$data;
            }
            return $array;
        }

        return (array)$result->dane;
    }

    /**
     * @param string $sid
     * @param string $param
     * @return mixed
     */
    public function getValue($sid, $param)
    {
        $this->prepareSoapHeader('http://CIS/BIR/2014/07/IUslugaBIR/GetValue', $this->address, $sid);
        $result = $this->client->GetValue([
            GusConstant::PARAM_PARAM_NAME => $param
        ]);

        return $result->GetValueResult;
    }


    protected function prepareSoapHeader(
        string $action,
        string $to,
        string $sid = null
    ): void {
        $this->clearHeader();
        $header[] = $this->setHeader('http://www.w3.org/2005/08/addressing', 'Action', $action);
        $header[] = $this->setHeader('http://www.w3.org/2005/08/addressing', 'To', $to);
        $this->client->__setSoapHeaders($header);

        if ($sid !== null) {
            $this->client->setHttpHeader([
                'header' => 'sid: '.$sid
            ]);
        }
    }


    protected function clearHeader(): void
    {
        $this->client->__setSoapHeaders(null);
    }


    protected function setHeader(
        string $namespace,
        string $name,
        string $data = null,
        bool $mustUnderstand = false
    ): SoapHeader {
        return new SoapHeader($namespace, $name, $data, $mustUnderstand);
    }


    protected function decodeResponse(
        string $response
    ): SimpleXMLElement {
        return new SimpleXMLElement($response);
    }
}
