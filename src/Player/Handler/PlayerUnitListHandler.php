<?php

declare(strict_types=1);

namespace GC\Player\Handler;

use GC\App\Aware\HandlerAwareTrait;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class PlayerUnitListHandler implements RequestHandlerInterface
{
    use HandlerAwareTrait;

    public const NAME = 'player.unit.list';

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return $this->render('@Player/playerUnitList.twig');
    }
}