<?php

namespace SmartCodeNet\GusApiBundle\Factory;

use SmartCodeNet\GusApiBundle\Constants\GusConstant;
use SmartCodeNet\GusApiBundle\Extension\Gus\GusExtension;
use SmartCodeNet\GusApiBundle\Extension\Soap\SoapAdapter;
use SmartCodeNet\GusApiBundle\Service\GusService;

final class GusFactory implements GusFactoryInterface
{
    /** @var string  */
    private $userKey;
    /** @var bool  */
    private $developMode;

    public function __construct(
        string $userKey,
        bool $developMode = false
    ) {
        $this->userKey = $userKey;
        $this->developMode = $developMode;
    }

    public function createGusExtension(): GusService
    {
        $extension = GusExtension::instance(
            $this->userKey,
            ($this->developMode) ? null :
                new SoapAdapter(
                    GusConstant::BASE_WSDL_URL,
                    GusConstant::BASE_WSDL_ADDRESS
                )
        );

        return (new GusService($extension));
    }
}
