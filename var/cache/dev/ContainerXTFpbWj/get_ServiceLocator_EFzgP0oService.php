<?php

namespace ContainerXTFpbWj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EFzgP0oService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eFzgP0o' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eFzgP0o'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'competenciaDeportiva' => ['privates', '.errored..service_locator.eFzgP0o.App\\Entity\\CompetenciaDeportiva', NULL, 'Cannot autowire service ".service_locator.eFzgP0o": it references class "App\\Entity\\CompetenciaDeportiva" but no such service exists.'],
        ], [
            'competenciaDeportiva' => 'App\\Entity\\CompetenciaDeportiva',
        ]);
    }
}