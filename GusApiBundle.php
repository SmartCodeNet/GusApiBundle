<?php

namespace SmartCodeNet\GusApiBundle;

use SmartCodeNet\GusApiBundle\DependencyInjection\GusApiBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class GusApiBundle extends Bundle
{
    /**
     * @inheritdoc
     */
    public function getContainerExtension()
    {
        return new GusApiBundleExtension();
    }
}
