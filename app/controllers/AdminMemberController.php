<?php
use app\core\Controller;

class AdminMemberController extends Controller {

    public function __construct()
    {
        if(is_null(Flasher::getLog())){
            $this->redirect('adminauthentication');
        }
        Flasher::setLink('member');
    }

    public function index()
    {
        $data['title'] = "Member Management";
        $data['member'] = $this->model('Member')->all();

        $this->view('template2/header', $data);
        $this->view('admin_member', $data);
        $this->view('template2/footer');
    }

    public function create()
    {
        $data['title'] = 'Member Registration';
        $this->view('template2/header', $data);
        $this->view('admin_member_form', $data);
        $this->view('template2/footer');
    }

    public function store()
    {
        $this->model('Member')->store($_POST);
        $this->redirect('adminmember');
    }

    public function edit($id)
    {
        $data['title'] = 'Member Update';
        $data['member'] = $this->model('Member')->member_single($id);
        $data['id'] = $id;

        $this->view('template2/header', $data);
        $this->view('admin_member_form', $data);
        $this->view('template2/footer');
    }

    public function update()
    {
        $this->model('Member')->update_admin($_POST);
        $this->redirect('adminmember');
    }

    public function destroy($id)
    {
        $this->model('Member')->destroy($id);
        $this->redirect('adminmember');
    }
}
