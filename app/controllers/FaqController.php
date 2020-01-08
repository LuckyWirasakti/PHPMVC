<?php
use app\core\Controller;

class FaqController extends Controller {

    public function index()
    {
        $data['title'] = 'FAQ';
        $data['faq'] = $this->model('Faq')->getAllFaq();
        if(Flasher::getMemberLog()['id']){
            $data['countcart'] = $this->model('Cart')->countMyCart(Flasher::getMemberLog()['id']);
            // var_dump($data['countcart']);
            // die();
        }
        // var_dump($data);
        // die();

        $this->view('template/header', $data);
        $this->view('faq', $data);
        $this->view('template/footer');
    }
}