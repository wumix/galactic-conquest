<?php

declare(strict_types=1);

namespace GC\Universe;

use Doctrine\ORM\EntityManager;
use GC\Universe\Handler\UniverseSelectHandler;
use GC\Universe\Model\Universe;
use GC\Universe\Model\UniverseRepository;
use Inferno\Routing\Route\RouteCollection;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

final class UniverseServiceProvider implements ServiceProviderInterface
{
    /**
     * @param \Pimple\Container $pimple
     *
     * @return void
     */
    public function register(Container $pimple): void
    {
        $this->provideUniverseRoutes($pimple);
        $this->provideUniverseRepository($pimple);
    }

    /**
     * @param \Pimple\Container $container
     *
     * @return void
     */
    private function provideUniverseRoutes(Container $container): void
    {
        $container->extend(RouteCollection::class, function(RouteCollection $collection, Container $container)
        {
            $collection->get('/{locale}/universe/select', UniverseSelectHandler::class)->addAttribute('public', true);

            return $collection;
        });
    }

    /**
     * @param \Pimple\Container $container
     *
     * @return void
     */
    private function provideUniverseRepository(Container $container): void
    {
        $container->offsetSet(UniverseRepository::class, function(Container $container) {
            return $container->offsetGet(EntityManager::class)->getRepository(Universe::class);
        });
    }
}