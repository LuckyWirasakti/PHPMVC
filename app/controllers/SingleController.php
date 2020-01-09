<?php
use app\core\Controller;

class SingleController extends Controller {

    
    public function detail($id){
        
        $data['title'] = 'Product Details';
        $data['product'] = $this->model('Single')->detail($id);
        $data['comment'] = $this->model('Single')->getComment($id);
        $data['review'] = $this->model('Single')->getAllReview();
        if(Flasher::getMemberLog()['id']){
            $data['countcart'] = $this->model('Cart')->countMyCart(Flasher::getMemberLog()['id']);
            // var_dump($data['countcart']);
            // die();
        }
        $this->view('template/header', $data);
        $this->view('single', $data);
        $this->view('template/footer');
    }
    public function store_comment($id)
    {
        $this->model('Single')->store_comment($_POST);
        $this->redirect('single/detail/'.$id);
    }

    public function store_review()
    {
        $this->model('Single')->store_review($_POST);
        $this->redirect('single');
    }
}