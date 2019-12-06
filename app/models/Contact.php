<?php

use app\core\Model;

class Contact extends Model
{
    public function all()
    {
        Model::query('SELECT * FROM contact');
        return Model::resultSet();
    }

    public function store($data)
    {
        Model::query("INSERT INTO contact VALUES ('', :name, :email, :subject, :message)");

        Model::bind('name', $data['name']);
        Model::bind('email', $data['email']);
        Model::bind('subject', $data['subject']);
        Model::bind('message', $data['message']);

        Model::execute();
        return Model::rowCount();
    }

    public function destroy($id)
    {
        Model::query("DELETE FROM contact WHERE id = :id");
        Model::bind('id', $id);
        Model::execute();
        return Model::rowCount();
    }
}

