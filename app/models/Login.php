<?php

use app\core\Model;

class Login extends Model
{
    public function store($data)
    {
        Model::query("SELECT username, email FROM user WHERE email = {$data['email']} AND password = {$data['password']}}");
        return Model::single();
    }
}

