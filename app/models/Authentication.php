<?php

use app\core\Model;

class Authentication extends Model
{
    public function attempt($data)
    {
        Model::query("SELECT username, email FROM `user` WHERE email = '{$data['email']}' AND password = '{$data['password']}'");

        if(Model::rowCount() > 0) {
            return Model::single();
        }

        return 0;
    }
}

