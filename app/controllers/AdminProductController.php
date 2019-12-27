<?php
use app\core\Controller;

class AdminProductController extends Controller {

    public function __construct()
    {
        if(is_null(Flasher::getLog())){
            $this->redirect('adminauthentication');
        }
        Flasher::setLink('product');
    }

    public function index()
    {
        $data['title'] = "Product Management";
        $data['product'] = $this->model('Product')->all();

        $this->view('template2/header', $data);
        $this->view('admin_product', $data);
        $this->view('template2/footer');
    }

    public function create()
    {
        $data['title'] = 'Product Input';
        $this->view('template2/header', $data);
        $this->view('admin_product_form', $data);
        $this->view('template2/footer');
    }

    public function store()
    {
        if(!empty($_FILES['productimage']['tmp_name'])){
            $output_dir = './uploads/product';//Path for file upload
            $fileTmpName  = $_FILES['productimage']['tmp_name'];
            $RandomNum = time();
            $ImageName = str_replace(' ','-',strtolower($_FILES['productimage']['name']));
            $ImageType = $_FILES['productimage']['type']; //"image/png", image/jpeg etc.
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            // $ret[$NewImageName]= $output_dir.$NewImageName;
            move_uploaded_file($fileTmpName,$output_dir."/".$NewImageName );
    
            $data = array(
            'image' =>$NewImageName
            );
            $this->model('Product')->store2($_POST,$data);
            $this->redirect('adminproduct');
            }else{
                $this->model('Product')->store($_POST);
            $this->redirect('adminproduct');
            }
        // $this->model('Product')->store($_POST);
        // $this->redirect('adminproduct');
    }

    public function edit($id)
    {
        $data['title'] = 'Product Update';
        $data['product'] = $this->model('Product')->update_single($id);
        $data['id'] = $id;

        $this->view('template2/header', $data);
        $this->view('admin_product_form', $data);
        $this->view('template2/footer');
    }

    public function update()
    {
        if(!empty($_FILES['productimage']['tmp_name'])){
            $output_dir = './uploads/product';//Path for file upload
            $fileTmpName  = $_FILES['productimage']['tmp_name'];
            $RandomNum = time();
            $ImageName = str_replace(' ','-',strtolower($_FILES['productimage']['name']));
            $ImageType = $_FILES['productimage']['type']; //"image/png", image/jpeg etc.
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            // $ret[$NewImageName]= $output_dir.$NewImageName;
            move_uploaded_file($fileTmpName,$output_dir."/".$NewImageName );
    
            $data = array(
            'image' =>$NewImageName
            );
            $this->model('Product')->update_admin2($_POST,$data);
            $this->redirect('adminproduct');
            }else{
                $this->model('Product')->update_admin($_POST);
            $this->redirect('adminproduct');
            }
        // $this->model('Product')->update_admin($_POST);
        // $this->redirect('adminproduct');
    }

    public function destroy($id)
    {
        $this->model('Product')->destroy($id);
        $this->redirect('adminproduct');
    }
}
