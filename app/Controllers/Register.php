<?php
namespace App\Controllers;
use App\Models\Admin_model;

class Register extends BaseController
{
  public $admin_model;

  public function __construct()
  {
    $this->admin_model = new Admin_model();
  }

  public function index()
  {
    return view('register', [
        'validation' => \Config\Services::validation(),
    ]);
  }

  public function signup()
  {
      $rules = [
          'username' => 'required',
          'password' => 'required|min_length[6]',
          'passconf' => 'required|matches[password]',
          'email'    => 'required|valid_email',
      ];

      if (! $this->validate($rules)) {
          return redirect()->back()->withInput()->with('validation', $this->validator);
      }

    $request = \Config\Services::request();

    $password = md5($request->getVar('password'));
    $insData = [
      'name' => $request->getVar('username'),
      'email' => $request->getVar('email'),
      'password' => $password,
      'role' => 0,
      'avatar' => 'assets/images/avatar.png'
    ];

    if ($this->admin_model->insertData($insData, 'users')) {
      $this->session->setTempdata('msg', 'Registration Successfully', 300);
      $this->session->setTempdata('msg-class', 'alert-success', 300);
      return redirect()->to('/login');

    } else {

      $this->session->setTempdata('msg', 'Registration Failed', 300);
      $this->session->setTempdata('msg-class', 'alert-danger', 300);
      return redirect()->to('/');
    }
  }
}
