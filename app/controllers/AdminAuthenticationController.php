<?php
use app\core\Controller;

class AdminAuthenticationController extends Controller {

    public function index()
    {
        if(!is_null(Flasher::getLog())){
            $this->redirect('admindashboard');
        }
        $this->view('admin_login');
    }

    public function login()
    {
        if($data = $this->model('Authentication')->attempt($_POST)) {
            Flasher::setLog($data);
            $this->redirect('admindashboard');
        } else {
            $this->redirect('adminauthentication');
        }

    }

    public function logout()
    {
        Flasher::unsetLog();
        $this->redirect('adminauthentication');
    }
}
