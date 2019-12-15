<?php
use app\core\Controller;

class HomeController extends Controller {

    public function index($product = 1)
    {
        $data['title'] = 'Home';
        $data['banner'] = $this->model('Home')->banner();
        $data['features'] = $this->model('Home')->feature();
        $data['brand'] = $this->model('Home')->brand();
        $data['product'] = $this->model('Home')->product(NULL, $product);
        $data['pagination'] = (int)$this->model('Home')->pagination(NULL);
        $data['active'] = $product;

        $this->view('template/header', $data);
        $this->view('home', $data);
        $this->view('template/footer');
    }

    public function show($search= NULL, $product = 1)
    {
        $data['title'] = "Product: ".is_null($search) ? "All Product": ($search = isset($_POST['search']) ? $_POST['search'] : $search);
        $data['product'] = $this->model('Home')->product($search = isset($_POST['search']) ? $_POST['search'] : $search, $product);
        $data['pagination'] = (int)$this->model('Home')->pagination($search);
        $data['active'] = $product;
        $data['search'] = $search;

        $this->view('template/header', $data);
        $this->view('search', $data);
        $this->view('template/footer');
    }

}
