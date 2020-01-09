<?php

use app\core\Controller;

class AdminPaymentConfirmationController extends Controller
{

    public function __construct()
    {
        if(is_null(Flasher::getLog())) {
            $this->redirect('adminauthentication');
        }
        Flasher::setLink('adminpaymentconfirmation');
    }

    public function index()
    {
        $data['title'] = 'Payment Confirmation';
        $data['payment_confirm'] = $this->model('Payment')->getConfirmPayment();

        $this->view('template2/header', $data);
        $this->view('admin_confirm_payment', $data);
        $this->view('template2/footer');
    }

    public function update()
    {
        if($this->model('Payment')->update_status($_POST)){
            $this->redirect('adminpaymentconfirmation');
        }
        $this->redirect('adminpaymentconfirmation');
    }
}