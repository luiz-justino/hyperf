<?php

namespace App\Middleware;

use Hyperf\Contract\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Hyperf\HttpMessage\Exception\UnauthorizedHttpException;

class BaseAuthMiddleware implements MiddlewareInterface
{
    public function __construct(protected ContainerInterface $container)
    {
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        if (empty($request->getHeader('Authorization')) || $request->getHeader('Authorization')
            [0] != 'workshop') {
                throw new UnauthorizedHttpException();
            }
        return $handler->handle($request);
    }
}