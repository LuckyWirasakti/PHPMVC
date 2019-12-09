<?php
use app\core\Controller;

class HomeController extends Controller {

    public function index($product = 1)
    {
        $data['title'] = 'Home';
        $data['banner'] = $this->model('Home')->banner();
        $data['features'] = $this->model('Home')->feature();
        $data['brand'] = $this->model('Home')->brand();
        $data['product'] = $this->model('Home')->product($product);
        $data['pagination'] = (int)$this->model('Home')->pagination();
        $data['active'] = $product;

        $this->view('template/header', $data);
        $this->view('home', $data);
        $this->view('template/footer');
    }

}
