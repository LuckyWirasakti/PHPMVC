<?php
use app\core\Controller;

class AdminUserController extends Controller {

    public function __construct()
    {
        if(is_null(Flasher::getLog())){
            $this->redirect('adminauthentication');
        }

        Flasher::setLink('user');
    }

    public function index()
    {
        $data['title'] = "User Management";
        $data['user'] = $this->model('User')->all();

        $this->view('template2/header', $data);
        $this->view('admin_user', $data);
        $this->view('template2/footer');
    }

    public function create()
    {
        $data['title'] = 'User Registration';
        $this->view('template2/header', $data);
        $this->view('admin_user_form', $data);
        $this->view('template2/footer');
    }

    public function store()
    {
        if($_POST['cpassword'] <> $_POST['password'] ) {
            echo "<h1>NOT CREATED</h1></br>";
            echo '<a href="'.BASE_URL.'/adminuser">Back</a>';
            die();
        } else {
            $this->model('User')->store($_POST);
        }

        $this->redirect('adminuser');
    }

    public function edit($id)
    {
        $data['title'] = 'User Update';
        $data['user'] = $this->model('User')->show($id);
        $data['id'] = $id;

        $this->view('template2/header', $data);
        $this->view('admin_user_form', $data);
        $this->view('template2/footer');
    }

    public function update()
    {
        if($_POST['cpassword'] <> $_POST['password'] ) {
            echo "<h1>NOT CREATED</h1></br>";
            echo '<a href="'.BASE_URL.'/adminuser">Back</a>';
            die();
        } else {
            $this->model('User')->update($_POST);
        }

        $this->redirect('adminuser');
    }

    public function destroy($id)
    {
        $this->model('User')->destroy($id);
        $this->redirect('adminuser');
    }

}
