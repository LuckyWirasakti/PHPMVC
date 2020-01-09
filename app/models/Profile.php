<?php

use app\core\Model;

class Profile extends Model
{
    public function getMyProfile($id)
    {
        Model::query('SELECT * FROM member WHERE id='.$id.'');
        return Model::resultSet();
    }
    public function updateProfile($data)
    {
        $query = "UPDATE member SET 
        username = :username,
        fullname = :fullname,
        email = :email,
        phone = :phone,
        alamat = :alamat
        WHERE id = :id";

        Model::query($query);
        Model::bind('username', $data['username']);
        Model::bind('fullname', $data['fullname']);
        Model::bind('email', $data['email']);
        Model::bind('phone', $data['phone']);
        Model::bind('alamat', $data['alamat']);
        Model::bind('id', $data['id']);
        Model::execute();
        return Model::rowCount();
    }
    public function updateProfileImg($data,$data2)
    {
        $query = "UPDATE member SET 
         username = :username,
        fullname = :fullname,
        email = :email,
        phone = :phone,
        alamat = :alamat,
        imageprofile = :imageprofile
        WHERE id = :id";

        Model::query($query);
        Model::bind('username', $data['username']);
        Model::bind('fullname', $data['fullname']);
        Model::bind('email', $data['email']);
        Model::bind('phone', $data['phone']);
        Model::bind('alamat', $data['alamat']);
        Model::bind('imageprofile', $data2['image']);
        Model::bind('id', $data['id']);
        Model::execute();
        return Model::rowCount();
    }
    
}

