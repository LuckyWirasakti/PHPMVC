<?php
use app\core\Controller;

class AdminCommentController extends Controller {

    public function __construct()
    {
        if(is_null(Flasher::getLog())){
            $this->redirect('adminauthentication');
        }
        Flasher::setLink('comment');
    }

    public function index()
    {
        $data['title'] = 'List Comment';
        $data['comment'] = $this->model('Comment')->all();

        $this->view('template2/header', $data);
        $this->view('admin_comment', $data);
        $this->view('template2/footer');
    }
    public function edit($id)
    {
        $data['title'] = 'Reply Comment';
        $data['comment'] = $this->model('Comment')->comment_single($id);
        $data['id'] = $id;

        $this->view('template2/header', $data);
        $this->view('admin_comment_form', $data);
        $this->view('template2/footer');
    }

    public function update()
    {
        $this->model('Comment')->update_comment($_POST);
        $this->redirect('admincomment');
    }

    public function delete($id)
    {
        if($this->model('Comment')->destroy($id)){
            $this->redirect('');
        }
        $this->redirect('admincomment');
    }
}
