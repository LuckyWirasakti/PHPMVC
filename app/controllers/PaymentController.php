<?php
use app\core\Controller;

class PaymentController extends Controller {

    public function index()
    {
        $data['title'] = 'Payment';
        $data['countcart'] = $this->model('Cart')->countMyCart();
        $data['myPayment'] = $this->model('Payment')->getMyPayment();
        $this->view('template/header', $data);
        $this->view('payment',$data);
        $this->view('template/footer');
    }
    public function paynow()
    {
        $data['title'] = 'Payment Now';
        $data['countcart'] = $this->model('Cart')->countMyCart();
        $data['myPaymentJoin'] = $this->model('Payment')->getMyPaymentJoin();
        $this->view('template/header', $data);
        $this->view('paymentnow',$data);
        $this->view('template/footer');
    }
    public function addpayment()
    {
        $this->redirect('payment');
        if($this->model('Payment')->addPayment($_POST)) {
            $this->redirect('payment');
        } else {
            $this->redirect('home');
        }
    }
    public function generate()
    {
        if($this->model('Payment')->generateKode($_POST)) {
            $this->redirect('payment/paynow');
        } else {
            $this->redirect('checkout');
        }
    }
}
