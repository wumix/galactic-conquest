<?php

declare(strict_types=1);

namespace GC\Home;

use Inferno\Routing\Route\RouteCollectionInterface;
use Inferno\Routing\Route\RouteProviderInterface;
use Psr\Container\ContainerInterface;

final class HomeRouteProvider implements RouteProviderInterface
{
    /**
     * @param \Inferno\Routing\Route\RouteCollectionInterface $collection
     *
     * @return void
     */
    public function provide(RouteCollectionInterface $collection): void
    {
        $collection->get('/{locale}', function(ContainerInterface $container) {
            return $container->get(HomeFactory::class)->createHomeHandler();
        }, 'home');
    }
}
