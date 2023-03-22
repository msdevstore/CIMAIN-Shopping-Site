<?php

namespace App\Controllers;
use App\Models\Admin_model;

class Home extends BaseController
{
    public $admin_model;

    public function __construct()
    {
        $this->admin_modal = new Admin_model();
    }

    public function index($tag = 1)
    {
        $slides = $this->admin_modal->getDataBy(array('tag'), array($tag), 'slides');
        $blogs = $this->admin_modal->getBetterWhere('tag', array('tag'), array($tag), 'blogs');
        $ads = $this->admin_modal->getDataBy(array('tag'), array($tag), 'ads');
        $tags = $this->admin_modal->getAllData('tags');
        $one = $this->admin_modal->findOneBy($tag, 'id', 'tags');
        if(!isset($_SESSION['name'])) {
            $infoArr = $this->admin_modal->getAllData('company');
            foreach ($infoArr as $info) {
                $_SESSION[$info->_key] = $info->_value;
            }
        }

        $data['slides'] = $slides;
        $data['blogs'] = $blogs;
        $data['ads'] = $ads;
        $data['tags'] = $tags;
        $data['one'] = $one;
        return view('front/dashboard', $data);
    }

    public function travel()
    {
        $slides = $this->admin_modal->getDataBy(array('tag'), array('Travelling'), 'slides');
        $blogs = $this->admin_modal->getDataBy(array('tag', 'type'), array('Travelling', 1), 'blogs');
        $ads = $this->admin_modal->getDataBy(array('tag'), array('Travelling'), 'ads');
        $one = $this->admin_modal->findOneByArr(['Travelling', 10], ['tag', 'type'] , 'blogs');
        $data['slides'] = $slides;
        $data['blogs'] = $blogs;
        $data['ads'] = $ads;
        $data['one'] = $one;
        return view('front/travel.php', $data);
    }

    public function photographer()
    {
        $slides = $this->admin_modal->getDataBy(array('tag'), array('Photographer'), 'slides');
        $blogs = $this->admin_modal->getDataBy(array('tag', 'type'), array('Photographer', 1), 'blogs');
        $ads = $this->admin_modal->getDataBy(array('tag'), array('Photographer'), 'ads');
        $one = $this->admin_modal->findOneByArr(['Photographer', 10], ['tag', 'type'] , 'blogs');
        $data['slides'] = $slides;
        $data['blogs'] = $blogs;
        $data['ads'] = $ads;
        $data['one'] = $one;
        return view('front/photographer.php', $data);
    }

    public function legal()
    {
        $slides = $this->admin_modal->getDataBy(array('tag'), array('Legal'), 'slides');
        $blogs1 = $this->admin_modal->getDataBy(array('tag', 'type'), array('Legal', 1), 'blogs');
        $blogs2 = $this->admin_modal->getDataBy(array('tag', 'type'), array('Legal', 2), 'blogs');
        $ads = $this->admin_modal->getDataBy(array('tag'), array('Legal'), 'ads');
        $one = $this->admin_modal->findOneByArr(['Legal', 10], ['tag', 'type'] , 'blogs');
        $data['slides'] = $slides;
        $data['blogs1'] = $blogs1;
        $data['blogs2'] = $blogs2;
        $data['ads'] = $ads;
        $data['one'] = $one;
        return view('front/legal.php', $data);
    }

    public function personal()
    {
        $slides = $this->admin_modal->getDataBy(array('tag'), array('Personal'), 'slides');
        $blogs = $this->admin_modal->getDataBy(array('tag', 'type'), array('Personal', 1), 'blogs');
        $ads = $this->admin_modal->getDataBy(array('tag'), array('Personal'), 'ads');
        $one = $this->admin_modal->findOneByArr(['Personal', 10], ['tag', 'type'] , 'blogs');
        $data['slides'] = $slides;
        $data['blogs'] = $blogs;
        $data['ads'] = $ads;
        $data['one'] = $one;
        return view('front/personal.php', $data);
    }

    public function about()
    {
        return view('front/about.php');
    }

    public function spost()
    {
        return view('front/spost.php');
    }

    public function gpost()
    {
        return view('front/gpost.php');
    }

    public function apost()
    {
        return view('front/apost.php');
    }

    public function vpost()
    {
        return view('front/vpost.php');
    }

    public function fwpost()
    {
        return view('front/fwpost.php');
    }

    public function allpost()
    {
        return view('front/all-post.php');
    }

    public function blogClassic2Columns()
    {
        return view('front/blog-classic-2-columns.php');
    }

    public function blogClassic3Columns()
    {
        return view('front/blog-classic-3-columns.php');
    }

    public function blogPortfolio2Columns()
    {
        return view('front/blog-portfolio-2-columns.php');
    }

    public function blogPortfolio3Columns()
    {
        return view('front/blog-portfolio-3-columns.php');
    }

    public function blogPortfolio4Columns()
    {
        return view('front/blog-portfolio-4-columns.php');
    }

    public function blogdetail1()
    {
        return view('front/blogdetail1.php');
    }

    public function blogdetail2()
    {
        return view('front/blogdetail2.php');
    }

    public function blogdetail3()
    {
        return view('front/blogdetail3.php');
    }

    public function error()
    {
        return view('front/error.php');
    }

    public function commingSoon()
    {
        return view('front/comming-soon.php');
    }

    public function contact()
    {
        return view('front/contact.php');
    }

    public function contact2()
    {
        return view('front/contact2.php');
    }

    public function admin()
    {
        $users = $this->admin_modal->getDataBy(array('role'), array(0), 'users');
        $admins = $this->admin_modal->getDataBy(array('role'), array(1), 'users');
        $blogs = $this->admin_modal->getAllData('blogs');
        $ads = $this->admin_modal->getAllData('ads');
        $data['users'] = count($users);
        $data['admins'] = count($admins);
        $data['blogs'] = count($blogs);
        $data['ads'] = count($ads);
        return view('back/dashboard', $data);
    }
}
