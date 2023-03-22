<?php
namespace App\Controllers;
use App\Models\Admin_model;

class Company extends BaseController
{
    public $admin_modal;

    public function __construct()
    {
        $this->admin_modal = new Admin_model();
    }

    public function index()
    {
        $row = $this->admin_modal->findOneBy('logo', '_key', 'company');
        $data['logo'] = $row->_value;
        $row = $this->admin_modal->findOneBy('name', '_key', 'company');
        $data['name'] = $row->_value;
        $row = $this->admin_modal->findOneBy('description', '_key', 'company');
        $data['description'] = $row->_value;
        return view('back/company/index', $data);
    }

    public function update()
    {
        $rules = [
            'name' => 'required',
            'description'    => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $request = \Config\Services::request();
        $name = $request->getVar('name');
        $description = $request->getVar('description');
        $row = $this->admin_modal->findOneBy('name', '_key', 'company');
        $insData = [
            '_value' => $name
        ];
        $this->admin_modal->updateData($insData, $row->id, 'company');
        $_SESSION['name'] = $name;

        $row = $this->admin_modal->findOneBy('description', '_key', 'company');
        $insData = [
            '_value' => $description
        ];
        $this->admin_modal->updateData($insData, $row->id, 'company');
        $_SESSION['description'] = $description;

        $this->session->setTempdata('msg', 'Slide Uploaded Successfully', 300);
        $this->session->setTempdata('msg-class', 'alert-success', 300);
        return redirect()->back()->withInput();
    }

    public function logo_upload()
    {
        $request = \Config\Services::request();
        $image = $request->getFile('image');
        $iPath = 'public/uploads/company/';
        $iName = 'logo.'.$image->getExtension();
        $image->move($iPath, $iName);
        $row = $this->admin_modal->findOneBy('logo', '_key', 'company');
        $insData = [
            '_value' => $iPath.$iName
        ];
        if($this->admin_modal->updateData($insData, $row->id,'company'))
        {
            $this->session->setTempdata('msg', 'Company Logo Uploaded Successfully', 300);
            $this->session->setTempdata('msg-class', 'alert-success', 300);
            return redirect()->back();
        }

        $this->session->setTempdata('msg', 'Company Logo Upload Failed', 300);
        $this->session->setTempdata('msg-class', 'alert-error', 300);
        return redirect()->back()->withInput();
    }
}