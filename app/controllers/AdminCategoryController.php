<?php
use app\core\Controller;

class AdminCategoryController extends Controller {

    public function __construct()
    {
        if(is_null(Flasher::getLog())){
            $this->redirect('adminauthentication');
        }
        Flasher::setLink('category');
    }

    public function index()
    {
        $data['title'] = 'Category';
        $data['category'] = $this->model('Category')->all();

        $this->view('template2/header', $data);
        $this->view('admin_category', $data);
        $this->view('template2/footer');
    }
    public function create()
    {
        $data['title'] = 'Category Input';
        $this->view('template2/header', $data);
        $this->view('admin_category_form', $data);
        $this->view('template2/footer');
    }
    public function store()
    {
                $this->model('Category')->store($_POST);
            $this->redirect('admincategory');
           
    }
    public function edit($id)
    {
        $data['title'] = 'Category Update';
        $data['category'] = $this->model('Category')->update_single($id);
        $data['id'] = $id;

        $this->view('template2/header', $data);
        $this->view('admin_category_form', $data);
        $this->view('template2/footer');
    }
    public function update()
    {
                $this->model('Category')->update($_POST);
            $this->redirect('admincategory');
           
    }
    public function destroy($id)
    {
        if($this->model('Category')->destroy($id)){
            $this->redirect('');
        }
        $this->redirect('admincategory');
    }
}
