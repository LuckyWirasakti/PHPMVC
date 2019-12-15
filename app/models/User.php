<?php

use app\core\Model;

class User extends Model
{
    public function all()
    {
        Model::query("SELECT id, username, email  FROM user");
        return Model::resultSet();
    }

    public function show($id)
    {
        Model::query("SELECT username, email FROM user WHERE id = :id");
        Model::bind('id', $id);
        return Model::single();
    }

    public function store($data)
    {
        Model::query("INSERT INTO user VALUES (NULL, :username, :email, :password)");
        Model::bind('username', $data['username']);
        Model::bind('email', $data['email']);
        Model::bind('password', password_hash($data['password'], PASSWORD_DEFAULT));

        return Model::rowCount();
    }

    public function update($data)
    {
        Model::query("UPDATE user 
                             SET username = :username, 
                                 email = :email,
                                 password = :password
                             WHERE id = :id");
        Model::bind('username', $data['username']);
        Model::bind('email', $data['email']);
        Model::bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
        Model::bind('id', $data['id']);

        return Model::rowCount();
    }

    public function destroy($id)
    {
        Model::query("DELETE FROM user WHERE id = :id");
        Model::bind('id', $id);

        return Model::rowCount();
    }
}

