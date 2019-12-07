<?php
use app\core\Controller;

class AdminHomeController extends Controller {

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

    public function delete_banner($id)
    {
        if($this->model('Home')->destroy_banner($id)){
            $this->redirect('');
        }
        $this->redirect('adminhome');
    }
}
