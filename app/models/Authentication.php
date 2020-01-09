<?php

use app\core\Model;

class Authentication extends Model
{
    public function attempt($data)
    {
        Model::query("SELECT id, username, email, password FROM `user` WHERE email = '{$data['email']}'");

        if(Model::rowCount() > 0) {

            if(password_verify($data['password'], Model::single()['password'])) {

                return Model::single();
            }
        }

        return 0;
    }
}

