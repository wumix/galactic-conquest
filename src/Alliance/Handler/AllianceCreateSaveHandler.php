<?php

declare(strict_types=1);

namespace GC\Alliance\Handler;

use GC\App\Aware\HandlerAwareTrait;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class AllianceCreateSaveHandler implements RequestHandlerInterface
{
    use HandlerAwareTrait;

    public const NAME = 'alliance.create.save';

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     *
     * @throws \Inferno\Routing\Exception\ResourceNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return $this->redirect(AllianceEditHandler::NAME);
    }
}