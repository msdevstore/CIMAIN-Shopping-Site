<?php
namespace App\Controllers;
use App\Models\Admin_model;

class User extends BaseController
{

    public $admin_modal;
    private $rules = [
        'name' => 'required',
        'email'    => 'required|valid_email',
    ];

    public function __construct()
    {
        $this->admin_modal = new Admin_model();
    }

    public function index()
    {
        $users = $this->admin_modal->getAllData('users');
        $data['users'] = $users;
        return view('back/user/index', $data);
    }

    public function new()
    {
        return view('back/user/edit', [
            'validation' => \Config\Services::validation(),
        ]);
    }

    public function create()
    {
        if (! $this->validate($this->rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $request = \Config\Services::request();
        $password = md5('123456');
        $insData = [
            'name' => $request->getVar('name'),
            'birthday' => $request->getVar('birthday'),
            'role' => $request->getVar('role'),
            'email' => $request->getVar('email'),
            'password' => $password,
            'avatar' => 'assets/images/avatar.png'
        ];

        if($this->admin_modal->insertData($insData, 'users'))
        {
            $this->session->setTempdata('msg', 'Slide Uploaded Successfully', 300);
            $this->session->setTempdata('msg-class', 'alert-success', 300);
            return redirect()->back();
        }

        $this->session->setTempdata('msg', 'Slide Upload Failed', 300);
        $this->session->setTempdata('msg-class', 'alert-error', 300);
        return redirect()->back()->withInput();
    }

    public function delete($id) {
        $row = $this->admin_modal->findOne($id, 'users');
        $result = $this->admin_modal->deleteData($row->id, 'users');
        if($result) {
            unlink($row->img_path);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    public function edit($id) {
        $row = $this->admin_modal->findOne($id, 'users');
        return view('back/user/edit', [
            'user' => $row,
            'validation' => \Config\Services::validation(),
        ]);
    }

    public function update($id = null) {
        if (! $this->validate($this->rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $request = \Config\Services::request();
        $insData = [
            'name' => $request->getVar('name'),
            'birthday' => $request->getVar('birthday'),
            'role' => $request->getVar('role'),
            'email' => $request->getVar('email')
        ];

        if($this->admin_modal->updateData($insData, $id, 'users'))
        {
            if($_SESSION['auth']->id == $id)
            {
                $_SESSION['auth']->name = $insData['name'];
                $_SESSION['auth']->birthday = $insData['birthday'];
                $_SESSION['auth']->role = $insData['role'];
                $_SESSION['auth']->email = $insData['email'];
            }

            $this->session->setTempdata('msg', 'Slide Uploaded Successfully', 300);
            $this->session->setTempdata('msg-class', 'alert-success', 300);
            return redirect()->back();
        }

        $this->session->setTempdata('msg', 'Slide Upload Failed', 300);
        $this->session->setTempdata('msg-class', 'alert-error', 300);
        return redirect()->back()->withInput();
    }

    public function image_upload($id)
    {
        $request = \Config\Services::request();
        $image = $request->getFile('image');
        $iPath = 'public/uploads/avatar/';
        $iName = $image->getRandomName();
        $image->move($iPath, $iName);
        $insData = [
            'avatar' => $iPath.$iName
        ];
        if($this->admin_modal->updateData($insData, $id,'users'))
        {
            if($_SESSION['auth']->id == $id) {
               $_SESSION['auth']->avatar = $insData['avatar'];
            }
            $this->session->setTempdata('msg', 'Avatar Uploaded Successfully', 300);
            $this->session->setTempdata('msg-class', 'alert-success', 300);
            return redirect()->back();
        }

        $this->session->setTempdata('msg', 'Avatar Upload Failed', 300);
        $this->session->setTempdata('msg-class', 'alert-error', 300);
        return redirect()->back()->withInput();
    }
}
