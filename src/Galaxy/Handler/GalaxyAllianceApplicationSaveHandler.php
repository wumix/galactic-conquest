<?php

declare(strict_types=1);

namespace GC\Galaxy\Handler;

use GC\App\Aware\HandlerAwareTrait;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class GalaxyAllianceApplicationSaveHandler implements RequestHandlerInterface
{
    use HandlerAwareTrait;

    public const NAME = 'galaxy.alliance.application.save';

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return $this->render('@Galaxy/galaxyAllianceApplicationSave.twig');
    }
}