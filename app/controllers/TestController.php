<?php
use app\core\Controller;

class TestController extends Controller {

    public function index()
    {
        $data = [
            'email' => 'sakti@mm.co',
            'password' => 'rahasia'
        ];
        echo $data;
        echo "Hallo";
    }
}
