<?php
use app\core\Controller;

class AdminContactController extends Controller {

    public function __construct()
    {
        if(is_null(Flasher::getLog())){
            $this->redirect('adminauthentication');
        }
        Flasher::setLink('contact');
    }

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
