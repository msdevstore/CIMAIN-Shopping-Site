<?php
namespace App\Controllers;
use App\Models\Admin_model;

class Blog extends BaseController
{
    public $admin_modal;

    private $rules = [
        'title' => 'required',
        'content' => 'required',
        'tag' => 'required',
        'date' => 'required|date',
        'poster' => 'required',
        'image_file' => 'required',
    ];

    public function __construct()
    {
        $this->admin_modal = new Admin_model();
    }

    public function index()
    {
        $blogs = $this->admin_modal->getAllDataBetter('tag', 'blogs');
        $tags = $this->admin_modal->getAllData('tags');
        $data['blogs'] = $blogs;
        $data['tags'] = $tags;
        return view('back/blog/index', $data);
    }

    public function new()
    {
        $tags = $this->admin_modal->getAllData('tags');
        return view('back/blog/create', [
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
        $iPath = 'public/uploads/blogs/';
        $iName = $image->getRandomName();
        $image->move($iPath, $iName);
        $insData = [
            'title' => $request->getVar('title'),
            'content' => $request->getVar('content'),
            'tag' => $request->getVar('tag'),
            'date' => $request->getVar('date'),
            'poster' => $request->getVar('poster'),
            'img_name' => $iName,
            'img_path' => $iPath.$iName
        ];

        if($this->admin_modal->insertData($insData, 'blogs'))
        {
            $this->session->setTempdata('msg', 'Blog Uploaded Successfully', 300);
            $this->session->setTempdata('msg-class', 'alert-success', 300);
            return redirect()->back();
        }

        $this->session->setTempdata('msg', 'Blog Upload Failed', 300);
        $this->session->setTempdata('msg-class', 'alert-error', 300);
        return redirect()->back()->withInput();
    }

    public function delete($id) {
        $row = $this->admin_modal->findOne($id, 'blogs');
        $result = $this->admin_modal->deleteData($row->id, 'blogs');
        if($result) {
            unlink($row->img_path);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    public function edit($id) {
        $row = $this->admin_modal->findOne($id, 'blogs');
        $tags = $this->admin_modal->getAllData('tags');
        return view('back/blog/create', [
            'blog' => $row,
            'tags' => $tags,
            'validation' => \Config\Services::validation(),
        ]);
    }

    public function update($id = null) {
        if (! $this->validate($this->rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $row = $this->admin_modal->findOne($id, 'blogs');
        $request = \Config\Services::request();
        $image = $request->getFile('image');
        if ($image->getBasename()) {
            $iPath = 'public/uploads/blogs/';
            $iName = $image->getRandomName();
            unlink($row->img_path);
            $image->move($iPath, $iName);
            $insData = [
                'title' => $request->getVar('title'),
                'content' => $request->getVar('content'),
                'tag' => $request->getVar('tag'),
                'date' => $request->getVar('date'),
                'poster' => $request->getVar('poster'),
                'img_name' => $iName,
                'img_path' => $iPath.$iName
            ];
            if($this->admin_modal->updateData($insData, $id,'blogs'))
            {
                $this->session->setTempdata('msg', 'Blog Updated Successfully', 300);
                $this->session->setTempdata('msg-class', 'alert-success', 300);
                return redirect()->back();
            }
        } else {
            $insData = [
                'title' => $request->getVar('title'),
                'content' => $request->getVar('content'),
                'tag' => $request->getVar('tag'),
                'date' => $request->getVar('date'),
                'poster' => $request->getVar('poster')
            ];
            if($this->admin_modal->updateData($insData, $id, 'blogs')) {
                $this->session->setTempdata('msg', 'Blog Updated Successfully', 300);
                $this->session->setTempdata('msg-class', 'alert-success', 300);
                return redirect()->back();
            }
        }

        $this->session->setTempdata('msg', 'Blog Update Failed', 300);
        $this->session->setTempdata('msg-class', 'alert-error', 300);
        return redirect()->back()->withInput();
    }
}
