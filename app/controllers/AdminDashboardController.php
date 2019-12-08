<?php
use app\core\Controller;

class AdminDashboardController extends Controller {

    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->view('template2/header', $data);
        $this->view('admin_dashboard');
        $this->view('template2/footer');
    }
}
