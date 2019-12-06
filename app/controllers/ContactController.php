<?php
use app\core\Controller;

class ContactController extends Controller {

    public function index()
    {
        $data['title'] = 'Contact';
        $this->view('template/header', $data);
        $this->view('contact');
        $this->view('template/footer');
    }

    public function store()
    {
        $this->model('Contact')->store($_POST);
        $this->redirect('contact');
    }
}
