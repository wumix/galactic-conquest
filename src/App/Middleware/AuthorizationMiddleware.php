<?php

declare(strict_types=1);

namespace GC\App\Middleware;

use GC\Home\Handler\HomeHandler;
use GC\User\Model\User;
use Inferno\Http\Response\ResponseFactoryInterface;
use Inferno\Routing\Middleware\DispatcherMiddleware;
use Inferno\Routing\Route\Route;
use Inferno\Routing\Router\RouterInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class AuthorizationMiddleware implements MiddlewareInterface
{
    /**
     * @var \Inferno\Http\Response\ResponseFactoryInterface
     */
    private $responseFactory;

    /**
     * @var \Inferno\Routing\Router\RouterInterface
     */
    private $router;

    /**
     * @param \Inferno\Http\Response\ResponseFactoryInterface $responseFactory
     * @param \Inferno\Routing\Router\RouterInterface $router
     */
    public function __construct(ResponseFactoryInterface $responseFactory, RouterInterface $router)
    {
        $this->responseFactory = $responseFactory;
        $this->router = $router;
    }

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Server\RequestHandlerInterface $handler
     *
     * @throws \Inferno\Routing\Exception\ResourceNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $route = $this->getMatchedRoute($request);
        if ($route === null) {
            return $handler->handle($request);
        }

        if ($this->isPublicRoute($route)) {
            return $handler->handle($request);
        }

        if ($this->isCurrentUserGiven($request)) {
            return $handler->handle($request);
        }

        return $this->createRedirect(HomeHandler::NAME);
    }

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     *
     * @return \Inferno\Routing\Route\Route|null
     */
    private function getMatchedRoute(ServerRequestInterface $request): ?Route
    {
        return $request->getAttribute(DispatcherMiddleware::ATTRIBUTE_ROUTE);
    }

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     *
     * @return bool
     */
    private function isCurrentUserGiven(ServerRequestInterface $request): bool
    {
        return $request->getAttribute(SetCurrentUserMiddleware::REQUEST_ATTRIBUTE_CURRENT_USER) instanceof User;
    }

    /**
     * @param \Inferno\Routing\Route\Route $route
     *
     * @return bool
     */
    private function isPublicRoute(Route $route): bool
    {
        return \array_key_exists('public', $route->getAttributes()) && (bool) $route->getAttributes()['public'] === true;
    }

    /**
     * @param string $name
     * @param int $code
     * @param string[] $headers
     *
     * @throws \Inferno\Routing\Exception\ResourceNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    private function createRedirect(string $name, int $code = 302, array $headers = []): ResponseInterface
    {
        return $this->responseFactory->createFromContent(
            $this->router->generate($name),
            $code,
            $headers
        );
    }
}