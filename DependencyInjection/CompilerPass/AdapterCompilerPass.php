<?php

namespace Raptek\RegonBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class AdapterCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $container->getDefinition('raptek.regon')
            ->setArguments(
                array(
                    $container->getParameter('raptek.regon.api_key'),
                    new Reference($container->getParameter('raptek.regon.adapter'))
                )
            );
    }
}