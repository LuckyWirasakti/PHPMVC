<?php
use app\core\Controller;

class MemberController extends Controller {

    public function index()
    {
        if(is_null(Flasher::getMemberLog())){
            $this->redirect('member/login');
        }
        $data['title'] = "Dashboard Member";
        $data['transaction'] = $this->model('Member')->transaction();
        if(Flasher::getMemberLog()['id']){
            $data['countcart'] = $this->model('Cart')->countMyCart(Flasher::getMemberLog()['id']);
            // var_dump($data['countcart']);
            // die();
        }
        $this->view('template/header', $data);
        $this->view('member', $data);
        $this->view('template/footer');
    }

    public function login()
    {
        $data['title'] = "Member Login";

        $this->view('template/header', $data);
        $this->view('login');
        $this->view('template/footer');
    }

    public function attempt()
    {
        if($data = $this->model('Member')->attempt($_POST)) {
            Flasher::setMemberLog($data);
        }

        $this->redirect('member');
    }

    public function create()
    {
        $data['title'] = "Member Register";

        $this->view('template/header', $data);
        $this->view('register');
        $this->view('template/footer');
    }

    public function store()
    {
        if($_POST['cpassword'] <> $_POST['password'] ) {
            echo "<h1>NOT CREATED</h1></br>";
            echo '<a href="'.BASE_URL.'/member">Back</a>';
            die();
        } else {
            $this->model('Member')->store($_POST);
        }

        $this->redirect('member');
    }

    public function edit()
    {
        $data['title'] = "Member Forgot";

        $this->view('template/header', $data);
        $this->view('forgot');
        $this->view('template/footer');
    }

    public function update()
    {
        if($_POST['cpassword'] <> $_POST['password'] ) {
            echo "<h1>NOT CHANGED</h1></br>";
            echo "<span>Password isn't same</span></br>";
            echo '<a href="'.BASE_URL.'/member/edit">Back</a>';
            die();
        } else {
            if($this->model('Member')->update($_POST) == 0) {
                echo "<h1>NOT CHANGED</h1></br>";
                echo "<span>Our Credential Not True</span></br>";
                echo '<a href="'.BASE_URL.'/member/edit">Back</a>';
                die();
            }
        }

        $this->redirect('member');
    }

    public function logout()
    {
        Flasher::unsetMemberLog();
        $this->redirect('home');
    }

}
