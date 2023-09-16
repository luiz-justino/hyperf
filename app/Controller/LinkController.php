<?php

declare(strict_types=1);

namespace App\Controller;

use App\Request\LinkRequest;
use Fig\Http\Message\StatusCodeInterface;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

class LinkController
{
    public function index(RequestInterface $request, ResponseInterface $response)
    {
        return $response->raw('Hello Hyperf!');
    }

    public function create(LinkRequest+ $request, ResponseInterface $response)
    {
        return $response->json($request->all())->withStatus(StatusCodeInterface::STATUS_CREATED);
    }
}
