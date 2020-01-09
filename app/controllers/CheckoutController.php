<?php
use app\core\Controller;

class CheckoutController extends Controller {

    public function index()
    {
        $data['title'] = 'Checkout Cart';
        // $data['myCart'] = $this->model('Cart')->getMyCart();
        if(Flasher::getMemberLog()['id']){
            $data['myCart'] = $this->model('Cart')->getMyCart(Flasher::getMemberLog()['id']);
        }
        // $data['totalmyCart'] = $this->model('Cart')->totalMyCart();
        if(Flasher::getMemberLog()['id']){
            $data['totalmyCart'] = $this->model('Cart')->totalMyCart(Flasher::getMemberLog()['id']);
        }
        if(Flasher::getMemberLog()['id']){
            $data['countcart'] = $this->model('Cart')->countMyCart(Flasher::getMemberLog()['id']);
        }
        if(Flasher::getMemberLog()['id']){
        $data['myCheckout'] = $this->model('Checkout')->getmyCheckout(Flasher::getMemberLog()['id']);
        }
        if(Flasher::getMemberLog()['id']){
            $data['countcart'] = $this->model('Cart')->countMyCart(Flasher::getMemberLog()['id']);
            // var_dump($data['countcart']);
            // die();
        }
        $this->view('template/header', $data);
        $this->view('checkout',$data);
        $this->view('template/footer');
    }
    public function addcheckout()
    {
        if($this->model('Checkout')->addCheckout($_POST)) {
            $this->redirect('checkout');
        } else {
            $this->redirect('cart');
        }
    }
    public function updatecheckout()
    {
        if($this->model('Checkout')->updateCheckout($_POST)) {
            $this->redirect('payment/'.$_POST['id']);
        } else {
            $this->redirect('checkout');
        }
    }
}
