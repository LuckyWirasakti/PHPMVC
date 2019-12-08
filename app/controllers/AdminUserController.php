<?php
use app\core\Controller;

class AdminUserController extends Controller {

    public function index()
    {
        $data['title'] = "User Management";
        $data['user'] = $this->model('User')->all();
        $this->view('template2/header', $data);
        $this->view('admin_user', $data);
        $this->view('template2/footer');
    }
}
