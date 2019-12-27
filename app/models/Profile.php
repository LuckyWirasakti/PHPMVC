<?php

use app\core\Model;

class Profile extends Model
{
    public function getMyProfile()
    {
        Model::query('SELECT * FROM user WHERE id=1');
        return Model::resultSet();
    }
    public function updateProfile($data)
    {
        $query = "UPDATE user SET 
        username = :username,
        fullname = :fullname,
        email = :email,
        hp = :hp,
        addressku = :addressku
        WHERE id = :id";

        Model::query($query);
        Model::bind('username', $data['username']);
        Model::bind('fullname', $data['fullname']);
        Model::bind('email', $data['email']);
        Model::bind('hp', $data['hp']);
        Model::bind('addressku', $data['addressku']);
        Model::bind('id', $data['id']);
        Model::execute();
        return Model::rowCount();
    }
    public function updateProfileImg($data,$data2)
    {
        $query = "UPDATE user SET 
        username = :username,
        fullname = :fullname,
        email = :email,
        hp = :hp,
        addressku = :addressku,
        imageprofile = :imageprofile
        WHERE id = :id";

        Model::query($query);
        Model::bind('username', $data['username']);
        Model::bind('fullname', $data['fullname']);
        Model::bind('email', $data['email']);
        Model::bind('hp', $data['hp']);
        Model::bind('addressku', $data['addressku']);
        Model::bind('imageprofile', $data2['image']);
        Model::bind('id', $data['id']);
        Model::execute();
        return Model::rowCount();
    }
    
}

