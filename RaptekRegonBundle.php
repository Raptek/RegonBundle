<?php

namespace Raptek\RegonBundle;

use Raptek\RegonBundle\DependencyInjection\CompilerPass\AdapterCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class RaptekRegonBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new AdapterCompilerPass());
    }
}
