<?php
namespace App\Controllers;
use App\Models\Admin_model;

class Slide extends BaseController
{

    public $admin_modal;
    private $rules = [
        'title' => 'required',
        'tag' => 'required',
        'date' => 'required|date',
        'image_file' => 'required'
    ];

    public function __construct()
    {
        $this->admin_modal = new Admin_model();
    }

    public function index()
    {
        $slides = $this->admin_modal->getAllDataBetter('tag', 'slides');
        $tags = $this->admin_modal->getAllData('tags');
        $data['slides'] = $slides;
        $data['tags'] = $tags;
        return view('back/slide/index', $data);
    }

    public function new()
    {
        $tags = $this->admin_modal->getAllData('tags');
        return view('back/slide/create', [
            'validation' => \Config\Services::validation(),
            'tags' => $tags
        ]);
    }

    public function create()
    {
        if (! $this->validate($this->rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $request = \Config\Services::request();
        $image = $request->getFile('image');
        $iPath = 'public/uploads/slides/';
        $iName = $image->getRandomName();
        $image->move($iPath, $iName);
        $insData = [
            'title' => $request->getVar('title'),
            'tag' => $request->getVar('tag'),
            'date' => $request->getVar('date'),
            'img_name' => $iName,
            'img_path' => $iPath.$iName
        ];

        if($this->admin_modal->insertData($insData, 'slides'))
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
        $row = $this->admin_modal->findOne($id, 'slides');
        $result = $this->admin_modal->deleteData($row->id, 'slides');
        if($result) {
            unlink($row->img_path);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    public function edit($id) {
        $row = $this->admin_modal->findOne($id, 'slides');
        $tags = $this->admin_modal->getAllData('tags');
        return view('back/slide/create', [
            'slide' => $row,
            'validation' => \Config\Services::validation(),
            'tags' => $tags
        ]);
    }

    public function update($id = null) {
        if (! $this->validate($this->rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $row = $this->admin_modal->findOne($id, 'slides');
        $request = \Config\Services::request();
        $image = $request->getFile('image');
        if ($image->getBasename()) {
            $iPath = 'public/uploads/slides/';
            $iName = $image->getRandomName();
            unlink($row->img_path);
            $image->move($iPath, $iName);
            $insData = [
                'title' => $request->getVar('title'),
                'tag' => $request->getVar('tag'),
                'date' => $request->getVar('date'),
                'img_name' => $iName,
                'img_path' => $iPath.$iName
            ];
            if($this->admin_modal->updateData($insData, $id,'slides'))
            {
                $this->session->setTempdata('msg', 'Slide Updated Successfully', 300);
                $this->session->setTempdata('msg-class', 'alert-success', 300);
                return redirect()->back();
            }
        } else {
            $insData = [
                'title' => $request->getVar('title'),
                'tag' => $request->getVar('tag'),
                'date' => $request->getVar('date')
            ];
            if($this->admin_modal->updateData($insData, $id, 'slides')) {
                $this->session->setTempdata('msg', 'Slide Updated Successfully', 300);
                $this->session->setTempdata('msg-class', 'alert-success', 300);
                return redirect()->back();
            }
        }

        $this->session->setTempdata('msg', 'Slide Update Failed', 300);
        $this->session->setTempdata('msg-class', 'alert-error', 300);
        return redirect()->back()->withInput();
    }
}
