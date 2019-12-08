<?php
use app\core\Controller;

class AdminAuthenticationController extends Controller {

    public function index()
    {
        $this->view('admin_login');
    }

    public function login()
    {
        if($this->model('Authentication')->attemp($_POST) == 0)
        {
            $this->redirect('adminauthentication');
        } else {
            $this->redirect('admindashboard');
        }

    }

    public function logout()
    {
        $this->redirect('adminauthentication');
    }
}
