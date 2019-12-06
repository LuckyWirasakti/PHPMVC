<?php
use app\core\Controller;

class HomeController extends Controller {

    public function index()
    {
        $data['title'] = 'Home';
        $data['banner'] = $this->model('Home')->banner();
        $data['features'] = $this->model('Home')->feature();
        $data['brand'] = $this->model('Home')->brand();

        $this->view('template/header', $data);
        $this->view('home', $data);
        $this->view('template/footer');
    }

    public function store()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
