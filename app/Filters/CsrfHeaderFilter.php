<?php

declare(strict_types=1);

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class CsrfHeaderFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (! method_exists($request, 'isAJAX')) {
            return $response;
        }

        if ($request->isAJAX()) {
            $response->setHeader('X-CSRF-RENEWED-HASH', csrf_hash());
        }

        return $response;
    }
}
