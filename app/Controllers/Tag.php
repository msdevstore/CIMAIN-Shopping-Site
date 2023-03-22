<?php
namespace App\Controllers;
use App\Models\Admin_model;

class Tag extends BaseController
{
    public $admin_modal;

    public function __construct()
    {
        $this->admin_modal = new Admin_model();
    }

    public function index()
    {
        $tags = $this->admin_modal->getAllData('tags');
        $data['tags'] = $tags;
        return view('back/tag/index', $data);
    }

    public function logo_upload()
    {
        $request = \Config\Services::request();
        $id = $request->getVar('id');
        $image = $request->getFile('image');
        $row = $this->admin_modal->findOne($id, 'tags');
        $iPath = 'public/uploads/tags/';
        $iName = $image->getRandomName();
        unlink($row->tag_img);
        $image->move($iPath, $iName);
        $insData = [
            'tag_img' => $iPath.$iName
        ];
        if($this->admin_modal->updateData($insData, $id,'tags'))
        {
            return 'success';
        } else {
            return 'failed';
        }
    }

}