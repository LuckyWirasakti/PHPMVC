<?php
use app\core\Controller;

class AdminCompanyController extends Controller {

    public function __construct()
    {
        if(is_null(Flasher::getLog())){
            $this->redirect('adminauthentication');
        }
        Flasher::setLink('contact');
    }

    public function index()
    {
        $data['title'] = 'Company Profile';
        $data['company'] = $this->model('Company')->all();

        $this->view('template2/header', $data);
        $this->view('admin_company', $data);
        $this->view('template2/footer');
    }
    public function edit($id)
    {
        $data['title'] = 'Company Profile Update';
        $data['company'] = $this->model('Company')->update_single($id);
        $data['id'] = $id;

        $this->view('template2/header', $data);
        $this->view('admin_company_form', $data);
        $this->view('template2/footer');
    }
    public function update()
    {
        if(!empty($_FILES['image']['tmp_name'])){
            $output_dir = './uploads/company';//Path for file upload
            $fileTmpName  = $_FILES['image']['tmp_name'];
            $RandomNum = time();
            $ImageName = str_replace(' ','-',strtolower($_FILES['image']['name']));
            $ImageType = $_FILES['image']['type']; //"image/png", image/jpeg etc.
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            // $ret[$NewImageName]= $output_dir.$NewImageName;
            move_uploaded_file($fileTmpName,$output_dir."/".$NewImageName );
    
            $data = array(
            'image' =>$NewImageName
            );
            $this->model('Company')->update_admin2($_POST,$data);
            $this->redirect('admincompany');
            }else{
                $this->model('Company')->update_admin($_POST);
            $this->redirect('admincompany');
            }
        // $this->model('Product')->update_admin($_POST);
        // $this->redirect('adminproduct');
    }
    public function delete($id)
    {
        if($this->model('Company')->destroy($id)){
            $this->redirect('');
        }
        $this->redirect('admincompany');
    }
}
