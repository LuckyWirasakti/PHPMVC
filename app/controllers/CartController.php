<?php
use app\core\Controller;

class CartController extends Controller {

    public function index()
    {
        $data['title'] = 'Shopping Cart';
        if(Flasher::getMemberLog()['id']){
            $data['usercart'] = $this->model('Cart')->getMyCart(Flasher::getMemberLog()['id']);
        }
        if(Flasher::getMemberLog()['id']){
            $data['countcart'] = $this->model('Cart')->countMyCart(Flasher::getMemberLog()['id']);
        }
        if(Flasher::getMemberLog()['id']){
            $data['totalcart'] = $this->model('Cart')->totalMyCart(Flasher::getMemberLog()['id']);
        }
        // $data['usercart'] = $this->model('Cart')->getMyCart();
        // $data['countcart'] = $this->model('Cart')->countMyCart();
        // $data['totalcart'] = $this->model('Cart')->totalMyCart();
        $this->view('template/header', $data);
        $this->view('cart',$data);
        $this->view('template/footer');
    }

    public function addcart()
    {
        if($this->model('Cart')->addCart($_POST)) {
            $this->redirect('cart'); 
        } else {
            $this->redirect('home');
        }
    }
    public function updatecart()
    {
        $this->model('Cart')->updateCart($_POST);
        $this->redirect('cart');
    }
}
