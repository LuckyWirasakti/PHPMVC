<?php
use app\core\Controller;

class PaymentController extends Controller {

    public function index($id)
    {
        $data['title'] = 'Payment';
        $data['myPayment'] = $this->model('Payment')->getMyPayment($id);
        if(Flasher::getMemberLog()['id']){
            $data['countcart'] = $this->model('Cart')->countMyCart(Flasher::getMemberLog()['id']);
        }
        $this->view('template/header', $data);
        $this->view('payment',$data);
        $this->view('template/footer');
    }
    public function confirm($id)
    {
        $data['title'] = 'Payment Confirm';
        $data['myConfirmPayment'] = $this->model('Payment')->myConfirmPayment($id);
        if(Flasher::getMemberLog()['id']){
            $data['countcart'] = $this->model('Cart')->countMyCart(Flasher::getMemberLog()['id']);
        }
        $this->view('template/header', $data);
        $this->view('paymentconfirm',$data);
        $this->view('template/footer');
    }
    public function confirmpayment(){
        if(!empty($_FILES['paymentimage']['tmp_name'])){
        $output_dir = './uploads/payement';//Path for file upload
        $fileTmpName  = $_FILES['paymentimage']['tmp_name'];
        $RandomNum = time();
        $ImageName = str_replace(' ','-',strtolower($_FILES['paymentimage']['name']));
        $ImageType = $_FILES['paymentimage']['type']; //"image/png", image/jpeg etc.
        $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt = str_replace('.','',$ImageExt);
        $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
        // $ret[$NewImageName]= $output_dir.$NewImageName;
        move_uploaded_file($fileTmpName,$output_dir."/".$NewImageName );

        $data = array(
        'image' =>$NewImageName
        );
        $this->model('Payment')->updateConfirmPayment($_POST,$data);
        $this->redirect('payment/confirm/'.$_POST['id']);
    }
    }
    public function list($id)
    { if(is_null(Flasher::getMemberLog())){
        $this->redirect('member/login');
    }
    $data['title'] = "Payment List";
    $data['myPayment'] = $this->model('Payment')->MyPayment($id);
    if(Flasher::getMemberLog()['id']){
        $data['countcart'] = $this->model('Cart')->countMyCart(Flasher::getMemberLog()['id']);
        // var_dump($data['countcart']);
        // die();
    }
        $this->view('template/header', $data);
        $this->view('paymentlist',$data);
        $this->view('template/footer');
    }
    public function paynow($id)
    {
        $data['title'] = 'Payment Now';
        if(Flasher::getMemberLog()['id']){
            $data['countcart'] = $this->model('Cart')->countMyCart(Flasher::getMemberLog()['id']);
        }
        $data['myPaymentJoin'] = $this->model('Payment')->getMyPaymentJoin($id);

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
            $this->redirect('payment/paynow/'.$_POST['id']);
        } else {
            $this->redirect('checkout');
        }
    }
}
