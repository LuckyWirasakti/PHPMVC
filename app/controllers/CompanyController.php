<?php
use app\core\Controller;

class CompanyController extends Controller {

    public function index()
    {
        $data['title'] = 'Company';
        $data['company'] = $this->model('Company')->all();      

       $this->view('template/header', $data);
        $this->view('company', $data);
        $this->view('template/footer');
    }

}
