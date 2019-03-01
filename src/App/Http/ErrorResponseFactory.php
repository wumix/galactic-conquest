<?php

declare(strict_types=1);

namespace GC\App\Http;

use Inferno\Http\Response\ErrorResponseFactoryInterface;
use Inferno\Http\Response\ResponseFactoryInterface;
use Inferno\Renderer\RendererInterface;
use Inferno\Routing\Exception\RouteNotFoundException;
use Psr\Http\Message\ResponseInterface;
use \Throwable;

final class ErrorResponseFactory implements ErrorResponseFactoryInterface
{
    /**
     * @var bool
     */
    private $catchErrors;

    /**
     * @var \Inferno\Renderer\RendererInterface $templateRenderer
     */
    private $renderer;

    /**
     * @var \Inferno\Http\Response\ResponseFactoryInterface
     */
    private $responseFactory;

    /**
     * @param bool $catchErrors
     * @param \Inferno\Http\Response\ResponseFactoryInterface $responseFactory
     * @param \Inferno\Renderer\RendererInterface $renderer
     */
    public function __construct(bool $catchErrors, ResponseFactoryInterface $responseFactory, RendererInterface $renderer)
    {
        $this->catchErrors = $catchErrors;
        $this->responseFactory = $responseFactory;
        $this->renderer = $renderer;
    }

    /**
     * @param \Throwable $throwable
     *
     * @throws \Throwable
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createFromThrowable(Throwable $throwable): ResponseInterface
    {
        if ($this->catchErrors === false) {
            throw $throwable;
        }

        if ($throwable instanceof RouteNotFoundException) {
            return $this->responseFactory->createFromContent(
                $this->renderer->render('@App/error/not-found.twig'),
                404
            );
        }

        return $this->responseFactory->createFromContent(
            $this->renderer->render('@App/error/service-unavailable.twig'),
            503
        );
    }

    /**
     * @param \Throwable $throwable
     *
     * @throws \Throwable
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function __invoke(Throwable $throwable): ResponseInterface
    {
        return $this->createFromThrowable($throwable);
    }
}
