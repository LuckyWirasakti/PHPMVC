<?php
use app\core\Controller;

class AdminContactController extends Controller {

    public function index()
    {
        $data['title'] = 'Contact Me';
        $data['contact'] = $this->model('Contact')->all();

        $this->view('template2/header', $data);
        $this->view('admin_contact', $data);
        $this->view('template2/footer');
    }

    public function delete($id)
    {
        if($this->model('Contact')->destroy($id)){
            $this->redirect('');
        }
        $this->redirect('admincontact');
    }
}
