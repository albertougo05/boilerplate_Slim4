<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class JsonAction
{
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $response->getBody()->write(json_encode(['success' => true]));

            return $response->withHeader('Content-Type', 'application/json');
    }
}

// To change to http status code, just use the $response->withStatus(x) method.
// Example:

# $result = ['error' => ['message' => 'Validation failed']];

# $response->getBody()->write(json_encode($result));

# return $response->withHeader('Content-Type', 'application/json')->withStatus(422);
