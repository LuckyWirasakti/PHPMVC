<?php

use app\core\Model;

class Member extends Model
{
    public function all()
    {
        Model::query("SELECT * FROM transaction");
        return Model::resultSet();
    }

    public function attempt($data)
    {
        Model::query("SELECT * FROM member WHERE username = :username");
        Model::bind('username', $data['username']);

        if(Model::rowCount() > 0) {

            if(password_verify($data['password'], Model::single()['password'])) {

                return Model::single();
            }
        }

        return 0;
    }

    public function store($data)
    {
        Model::query("INSERT INTO member VALUES (NULL, :username, :email, :gender, :food, :mom, :password, current_timestamp())");

        Model::bind('username', $data['username']);
        Model::bind('email', $data['email']);
        Model::bind('gender', $data['gender']);
        Model::bind('food', $data['food']);
        Model::bind('mom', $data['mom']);
        Model::bind('password', password_hash($data['password'], PASSWORD_DEFAULT));

        return Model::rowCount();
    }

    public function update($data)
    {
        Model::query("SELECT id FROM member WHERE mom = :mom AND food = :food AND email = :email");

        Model::bind('email', $data['email']);
        Model::bind('food', $data['food']);
        Model::bind('mom', $data['mom']);
        $id = Model::single()['id'];

        if(Model::rowCount()){

            Model::query("UPDATE member SET password = :password WHERE id = :id");
            Model::bind('id', $id);
            Model::bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
            return Model::rowCount();
        }

        return 0;
    }
}
