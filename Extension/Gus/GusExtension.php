<?php

namespace SmartCodeNet\GusApiBundle\Extension\Gus;

use SmartCodeNet\GusApiBundle\Constants\GusConstant;
use SmartCodeNet\GusApiBundle\DTO\SearchReportDTO;
use SmartCodeNet\GusApiBundle\Exception\InvalidUserKeyException;
use SmartCodeNet\GusApiBundle\Exception\NoDataException;
use SmartCodeNet\GusApiBundle\Extension\Soap\AdapterInterface;
use SmartCodeNet\GusApiBundle\Extension\Soap\SoapAdapter;
use SmartCodeNet\GusApiBundle\Helper\GusExtensionHelper;
use SmartCodeNet\GusApiBundle\Helper\GusResponseHelper;
use DateTime;

class GusExtension
{
    /** @var string */
    protected $userKey;

    /** @var string */
    protected $sessionId;

    /** @var AdapterInterface */
    protected $adapter;

    public function __construct(string $userKey, AdapterInterface $adapter)
    {
        $this->userKey = $userKey;
        $this->adapter = $adapter;
    }

    public static function instance(string $userKey, AdapterInterface $adapter = null): GusExtension
    {
        if ($adapter === null) {
            $adapter = new SoapAdapter(
                GusConstant::BASE_WSDL_URL_TEST,
                GusConstant::BASE_WSDL_ADDRESS_TEST
            );
        }
        return new GusExtension($userKey, $adapter);
    }


    public function login(): ?string
    {
        $this->sessionId = $this->adapter->login($this->userKey);

        if (empty($this->sessionId)) {
            throw new InvalidUserKeyException(sprintf("User key '%s' is invalid", $this->userKey));
        }

        return $this->sessionId;
    }

    public function logout(): bool
    {
        return $this->adapter->logout($this->sessionId);
    }

    public function isLogged(): bool
    {
        return (bool)$this->sessionStatus();
    }

    public function dataStatus(): DateTime
    {
        return new DateTime($this->adapter->getValue($this->sessionId, GusConstant::PARAM_STATUS_DATE_STATE));
    }

    public function getMessageCode(): ?string
    {
        return $this->adapter->getValue($this->sessionId, GusConstant::PARAM_MESSAGE_CODE);
    }

    public function getMessage(): ?string
    {
        return $this->adapter->getValue($this->sessionId, GusConstant::PARAM_MESSAGE);
    }

    public function sessionStatus(): ?string
    {
        return $this->adapter->getValue($this->sessionId, GusConstant::PARAM_SESSION_STATUS);
    }

    public function serviceMessage(): ?string
    {
        return $this->adapter->getValue(null, GusConstant::PARAM_SERVICE_MESSAGE);
    }

    public function serviceStatus(): string
    {
        $intStatus = (int) $this->adapter->getValue(null, GusConstant::PARAM_SERVICE_STATUS);

        switch ($intStatus) {
            case GusConstant::SERVICE_AVAILABLE_RESPONSE:
                return GusConstant::SERVICE_AVAILABLE;
            break;
            case GusConstant::SERVICE_TECHNICAL_BREAK_RESPONSE:
                return GusConstant::SERVICE_TECHNICAL_BREAK;
                break;
            default:
                return GusConstant::SERVICE_UNAVAILABLE;
                break;
        }
    }

    public function getGeneralDataNip(string $nip): SearchReportDTO
    {
        return current($this->search([
            GusConstant::SEARCH_TYPE_NIP => $nip
        ]));
    }

    public function getGeneralDataRegon(string $regon): SearchReportDTO
    {
        return current($this->search([
            GusConstant::SEARCH_TYPE_REGON => $regon
        ]));
    }

    public function getGeneralDataKrs(string $krs): SearchReportDTO
    {
        return current($this->search([
            GusConstant::SEARCH_TYPE_KRS => $krs
        ]));
    }

    public function getSpecificReport(string $regon, string $reportType, string $prefix = null): array
    {
        $data = $this->adapter->getFullData($this->sessionId, $regon, $reportType);

        if (GusResponseHelper::errorExists($data)) {
            return [];
        }

        if ($prefix !== null) {
            $data = GusExtensionHelper::removePrefix($data, $prefix);
        }

        return $data;
    }

    private function search(array $searchData): array
    {
        $result = [];
        try {
            $response = $this->adapter->search($this->sessionId, $searchData);
        } catch (NoDataException $e) {
            return [];
        }
        foreach ($response as $report) {
            $result[] = new SearchReportDTO($report);
        }

        return $result;
    }
}
