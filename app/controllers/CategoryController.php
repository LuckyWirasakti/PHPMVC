<?php
use app\core\Controller;

class CategoryController extends Controller {

    public function index($category=1)
    {
        $data['title'] = 'category';
        $data['category'] = $this->model('Category')->category1($category);
        $data['pagination'] = (int)$this->model('Category')->pagination();
        $data['allcategory'] = $this->model('Category')->all();
        $data['active'] = $category;

        $this->view('template/header', $data);
        $this->view('category',$data);
        $this->view('template/footer');

    }   
    public function filter($category, $pagination=1)
    {
        $data['title'] = 'category';
        $data['idcat'] = $category;
        $data['category'] = $this->model('Category')->category2($category, $pagination);
        $data['pagination'] = (int)$this->model('Category')->pagination2($category);
        $data['allcategory'] = $this->model('Category')->all();
        $data['active'] = $pagination;

        $this->view('template/header', $data);
        $this->view('category_filter',$data);
        $this->view('template/footer');

    }   
}
