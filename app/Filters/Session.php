<?php

namespace App\Filters;

use App\Libraries\Translation\Translator;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Session implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = \Config\Services::session();
        $userId = $session->get('user_id');
        $userLanguage = $session->get('user_language');

        if (! empty($userLanguage)) {
            Translator::setLanguage($userLanguage);
        }

        if (empty($userId)) {
            $session->setFlashdata('url', $_SERVER['REQUEST_URI']);
            return redirect()->to(site_url('logon'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
