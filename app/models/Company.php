<?php

use app\core\Model;

class Company extends Model
{
    public function all()
    {
        Model::query('SELECT * FROM company');
        return Model::resultSet();
    }
    public function update_single($id)
    {
        Model::query("SELECT * FROM company WHERE id=:id");
        Model::bind('id', $id);
        return Model::single();
    }
    public function store($data)
    {
        Model::query("INSERT INTO company VALUES ('', :title, :description, :image)");

        Model::bind('title', $data['title']);
        Model::bind('description', $data['description']);
        Model::bind('image', $data['image']);

        return Model::rowCount();
    }
    public function update_admin2($data,$data2)
    {
        Model::query("UPDATE company SET title=:title, description=:description, image=:image WHERE id = :id");

        Model::bind('title', $data['title']);
        Model::bind('description', $data['description']);
        Model::bind('image', $data2['image']);
        Model::bind('id', $data['id']);

        return Model::rowCount();
    }
    public function update_admin($data)
    {
        Model::query("UPDATE company SET title=:title, description=:description WHERE id = :id");
        Model::bind('title', $data['title']);
        Model::bind('description', $data['description']);
        Model::bind('id', $data['id']);

        return Model::rowCount();
    }
    public function destroy($id)
    {
        Model::query("DELETE FROM company WHERE id = :id");
        Model::bind('id', $id);
        return Model::rowCount();
    }
}

