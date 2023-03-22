<?php

namespace App\Controllers;

use App\Models\Admin_model;
use App\Models\Registermodal;

class Login extends BaseController
{
    public $admin_modal;

    public function __construct()
    {
        $this->admin_modal = new Admin_model();
    }

    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $request = \Config\Services::request();

        $email = $request->getVar('email');
        $password = md5($request->getVar('password'));

        $data = $this->admin_modal->findOneBy($email, 'email', 'users');
        if (isset($data)) {
            if ($data->email == $email) {
                if ($password == $data->password) {
                    $_SESSION['auth'] = $data;
//                $infoArr = $this->admin_modal->getAllData('company');
//                foreach ($infoArr as $info) {
//                    $_SESSION[$info->_key] = $info->_value;
//                }

                    $this->session->setTempdata('msg', 'Login Details Success!', 300);
                    $this->session->setTempdata('msg-class', 'alert-success', 300);
                    return redirect()->to('/');

                } else {
                    $this->session->setTempdata('msg', 'Password is incorrect! Try Again', 300);
                    $this->session->setTempdata('msg-class', 'alert-danger', 300);
                    return redirect()->back();
                }
            }
        } else {
            $this->session->setTempdata('msg', 'You Email is incorrect', 300);
            $this->session->setTempdata('msg-class', 'alert-danger', 300);
            return redirect()->back();
        }
    }
}
