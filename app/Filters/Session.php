<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Session implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = \Config\Services::session();
        if (empty($session->get('user_id'))) {
            $usersModel = new \App\Models\UsersModel();
            $user = $usersModel->userValidate();
            if (empty($user)) {
                \Config\Services::session()->setFlashdata('url', $_SERVER['REQUEST_URI']);
                return redirect()->to(site_url('logon'));
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
