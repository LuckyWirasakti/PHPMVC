<?php
use app\core\Controller;

class ProfileController extends Controller {

    public function index()
    {
        $data['title'] = 'Profile';
        $data['countcart'] = $this->model('Cart')->countMyCart();
        $data['myProfile'] = $this->model('Profile')->getMyProfile();
        $this->view('template/header', $data);
        $this->view('profile',$data);
        $this->view('template/footer');
    }
    public function updateprofile(){
        // var_dump($_FILES['profileimage']['tmp_name']);
        // die;
        if(!empty($_FILES['profileimage']['tmp_name'])){
        $output_dir = './uploads/user-profile';//Path for file upload
        // $fileCount = count($_FILES['profileimage']['name']);
        $fileTmpName  = $_FILES['profileimage']['tmp_name'];
        $RandomNum = time();
        $ImageName = str_replace(' ','-',strtolower($_FILES['profileimage']['name']));
        $ImageType = $_FILES['profileimage']['type']; //"image/png", image/jpeg etc.
        $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt = str_replace('.','',$ImageExt);
        $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
        // $ret[$NewImageName]= $output_dir.$NewImageName;
        move_uploaded_file($fileTmpName,$output_dir."/".$NewImageName );

        $data = array(
        'image' =>$NewImageName
        );
        $this->model('Profile')->updateProfileImg($_POST,$data);
        $this->redirect('profile');
        }else{
            $this->model('Profile')->updateProfile($_POST);
        $this->redirect('profile');
        }
    }
    
}
