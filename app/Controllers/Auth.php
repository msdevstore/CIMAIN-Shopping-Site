<?php
namespace App\Controllers;

class Auth extends BaseController
{
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }
}
