<?php
use app\core\Controller;

class HomeController extends Controller {

    public function index()
    {
        $data['title'] = 'Home';
        $data['banner'] = $this->model('Home')->getAllBanner();
        $data['features'] = $this->model('Home')->getAllFeatures();
        $data['category'] = $this->model('Home')->getAllCategory();
        $data['brand'] = $this->model('Home')->getAllBrand();

        $this->view('template/header', $data);
        $this->view('home', $data);
        $this->view('template/footer');
    }
}
