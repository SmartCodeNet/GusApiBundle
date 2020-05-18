<?php

namespace SmartCodeNet\GusApiBundle\Factory;

use SmartCodeNet\GusApiBundle\Service\GusService;

interface GusFactoryInterface
{
    public function createGusExtension(): GusService;
}