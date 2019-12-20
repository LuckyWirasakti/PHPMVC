<?php
use app\core\Controller;

class AdminHomeController extends Controller {

    public function __construct()
    {
        if(is_null(Flasher::getLog())){
            $this->redirect('adminauthentication');
        }

        Flasher::setLink('home');
    }

    public function index()
    {
        $data['title'] = 'Home Management';
        $data['banner'] = $this->model('Home')->banner();
        $data['feature'] = $this->model('Home')->feature();
        $data['brand'] = $this->model('Home')->brand();

        $this->view('template2/header', $data);
        $this->view('admin_home', $data);
        $this->view('template2/footer');
    }

    public function create_banner()
    {
        $data['title'] = 'Tambah Banner';
        $this->view('template2/header', $data);
        $this->view('admin_banner_form', $data);
        $this->view('template2/footer');
    }

    public function store_banner()
    {
        if($this->model('Home')->store_banner($_POST) == 0){
            echo "gagal";
            die();
        }
        $this->redirect('adminhome');
    }

    public function edit_banner($id)
    {
        $data['title'] = 'Edit Banner';
        $data['id'] = $id;
        $data['banner'] = $this->model('Home')->banner_single($id);
        $this->view('template2/header', $data);
        $this->view('admin_banner_form', $data);
        $this->view('template2/footer');
    }

    public function update_banner()
    {
        $this->model('Home')->update_banner($_POST);
        $this->redirect('adminhome');
    }

    public function delete_banner($id)
    {
        if($this->model('Home')->destroy_banner($id)){
            $this->redirect('');
        }
        $this->redirect('adminhome');
    }

    public function create_feature()
    {
        $data['title'] = 'Tambah Feature';
        $this->view('template2/header', $data);
        $this->view('admin_feature_form', $data);
        $this->view('template2/footer');
    }

    public function store_feature()
    {
        if ($this->model('Home')->store_feature($_POST) == 0)
        {
            echo "gagal";
            die();
        }
        $this->redirect('adminhome');
    }

    public function edit_feature($id)
    {
        $data['title'] = 'Edit Feature';
        $data['id'] = $id;
        $data['feature'] = $this->model('Home')->feature_single($id);

        $this->view('template2/header', $data);
        $this->view('admin_feature_form', $data);
        $this->view('template2/footer');
    }

    public function update_feature()
    {
        $this->model('Home')->update_feature($_POST);
        $this->redirect('adminhome');
    }

    public function delete_feature($id)
    {
        if($this->model('Home')->destroy_feature($id)){
            $this->redirect('');
        }
        $this->redirect('adminhome');
    }

    public function create_brand()
    {
        $data['title'] = 'Tambah Brand';
        $this->view('template2/header', $data);
        $this->view('admin_brand_form', $data);
        $this->view('template2/footer');
    }

    public function store_brand()
    {
        if($this->model('Home')->store_brand($_POST) == 0)
        {
            echo "gagal";
            die();
        }
        $this->redirect('adminhome');
    }

    public function edit_brand($id)
    {
        $data['title'] = 'Edit Brand';
        $data['id'] = $id;
        $data['brand'] = $this->model('Home')->brand_single($id);

        $this->view('template2/header', $data);
        $this->view('admin_brand_form', $data);
        $this->view('template2/footer');
    }

    public function update_brand()
    {
        $this->model('Home')->update_brand($_POST);
        $this->redirect('adminhome');
    }

    public function delete_brand($id)
    {
        if($this->model('Home')->destroy_brand($id)){
            $this->redirect('');
        }
        $this->redirect('adminhome');
    }

}
