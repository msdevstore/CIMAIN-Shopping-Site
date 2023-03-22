<?php
namespace App\Controllers;
use App\Models\Admin_model;

class AD extends BaseController
{

    public $admin_modal;
    private $rules = [
        'title' => 'required',
        'tag' => 'required',
        'image_file' => 'required'
    ];

    public function __construct()
    {
        $this->admin_modal = new Admin_model();
    }

    public function index()
    {
        $ads = $this->admin_modal->getAllDataBetter('tag', 'ads');
        $tags = $this->admin_modal->getAllData('tags');
        $data['ads'] = $ads;
        $data['tags'] = $tags;
        return view('back/ad/index', $data);
    }

    public function new()
    {
        $tags = $this->admin_modal->getAllData('tags');
        return view('back/ad/create', [
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
        $iPath = 'public/uploads/ads/';
        $iName = $image->getRandomName();
        $image->move($iPath, $iName);
        $insData = [
            'title' => $request->getVar('title'),
            'tag' => $request->getVar('tag'),
            'content' => $request->getVar('content'),
            'path' => $iPath.$iName
        ];

        if($this->admin_modal->insertData($insData, 'ads'))
        {
            $this->session->setTempdata('msg', 'AD Uploaded Successfully', 300);
            $this->session->setTempdata('msg-class', 'alert-success', 300);
            return redirect()->back();
        }

        $this->session->setTempdata('msg', 'AD Upload Failed', 300);
        $this->session->setTempdata('msg-class', 'alert-error', 300);
        return redirect()->back()->withInput();
    }

    public function delete($id) {
        $row = $this->admin_modal->findOne($id, 'ads');
        $result = $this->admin_modal->deleteData($row->id, 'ads');
        if($result) {
            unlink($row->path);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    public function edit($id) {
        $row = $this->admin_modal->findOne($id, 'ads');
        $tags = $this->admin_modal->getAllData('tags');
        return view('back/ad/create', [
            'ad' => $row,
            'tags' => $tags,
            'validation' => \Config\Services::validation(),
        ]);
    }

    public function update($id = null) {
        if (! $this->validate($this->rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $row = $this->admin_modal->findOne($id, 'ads');
        $request = \Config\Services::request();
        $image = $request->getFile('image');
        if ($image->getBasename()) {
            $iPath = 'public/uploads/ads/';
            $iName = $image->getRandomName();
            unlink($row->path);
            $image->move($iPath, $iName);
            $insData = [
                'title' => $request->getVar('title'),
                'tag' => $request->getVar('tag'),
                'content' => $request->getVar('content'),
                'path' => $iPath.$iName
            ];
            if($this->admin_modal->updateData($insData, $id,'ads'))
            {
                $this->session->setTempdata('msg', 'AD Updated Successfully', 300);
                $this->session->setTempdata('msg-class', 'alert-success', 300);
                return redirect()->back();
            }
        } else {
            $insData = [
                'title' => $request->getVar('title'),
                'tag' => $request->getVar('tag'),
                'content' => $request->getVar('content')
            ];
            if($this->admin_modal->updateData($insData, $id, 'ads')) {
                $this->session->setTempdata('msg', 'AD Updated Successfully', 300);
                $this->session->setTempdata('msg-class', 'alert-success', 300);
                return redirect()->back();
            }
        }

        $this->session->setTempdata('msg', 'AD Update Failed', 300);
        $this->session->setTempdata('msg-class', 'alert-error', 300);
        return redirect()->back()->withInput();
    }
}
