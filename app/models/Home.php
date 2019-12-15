<?php

use app\core\Model;

class Home extends Model
{
    public function banner()
    {
        Model::query("SELECT * FROM banner");
        return Model::resultSet();
    }

    public function brand()
    {
        Model::query("SELECT * FROM brand");
        return Model::resultSet();
    }

    public function feature()
    {
        Model::query('SELECT * FROM feature');
        return Model::resultSet();
    }

    public function pagination($where = NULL)
    {
        Model::query(is_null($where) ? "SELECT id FROM product":"SELECT * FROM product WHERE name LIKE '%{$where}%'");
        return ceil((Model::rowCount()/8));
    }
    
    public function product($where = NULL,$page = 0)
    {
        $start = ($page>1) ? ($page * 8) - 8 : 0;
        Model::query(is_null($where) ? "SELECT * FROM product LIMIT 8 OFFSET {$start}" : "SELECT * FROM product WHERE name LIKE '%{$where}%' LIMIT 8 OFFSET {$start}");
        return Model::resultSet();
    }

    public function feature_single($id)
    {
        Model::query("SELECT * FROM feature WHERE id = {$id}");
        return Model::single();
    }

    public function store_banner($data)
    {
        if(move_uploaded_file($_FILES['image']['tmp_name'],getcwd().'/frontend/img/banner/'.$_FILES['image']['name'])){
            Model::query("INSERT INTO banner VALUES ('', :name, :description, :image, :user_id)");

            Model::bind('name', $data['name']);
            Model::bind('description', $data['description']);
            Model::bind('image', $_FILES['image']['name']);
            Model::bind('user_id', '1');

            return Model::rowCount();
        }
        return 0;
    }

    public function store_brand($data)
    {
        if(move_uploaded_file($_FILES['image']['tmp_name'],getcwd().'/frontend/img/brand/'.$_FILES['image']['name'])){
            Model::query("INSERT INTO brand VALUES ('', :name, :image, :url, :user_id)");

            Model::bind('name', $data['name']);
            Model::bind('image', $_FILES['image']['name']);
            Model::bind('url', $data['url']);
            Model::bind('user_id', 1);

            return Model::rowCount();
        }
        return 0;
    }

    public function store_feature($data)
    {
        if(move_uploaded_file($_FILES['image']['tmp_name'],getcwd().'/frontend/img/features/'.$_FILES['image']['name'])){
            Model::query("INSERT INTO feature VALUES ('', :name, :description, :icon, :user_id)");

            Model::bind('name', $data['name']);
            Model::bind('description', $data['description']);
            Model::bind('icon', $_FILES['image']['name']);
            Model::bind('user_id', 1);

            return Model::rowCount();
        }
        return 0;
    }

    public function update_feature($data)
    {
        Model::query("SELECT icon FROM feature WHERE id = {$data['id']}");
        $file = Model::single();

        if(unlink(getcwd().'/frontend/img/features/'.$file['icon']))
        {
            if(move_uploaded_file($_FILES['image']['tmp_name'],getcwd().'/frontend/img/features/'.$_FILES['image']['name'])){
                Model::query("UPDATE feature SET name = :name, description = :description, icon = :icon, user_id = :user_id WHERE id = :id");

                Model::bind('id', $data['id']);
                Model::bind('name', $data['name']);
                Model::bind('description', $data['description']);
                Model::bind('icon', $_FILES['image']['name']);
                Model::bind('user_id', 1);

                return Model::rowCount();
            }
        }
        return 0;
    }

    public function destroy_banner($id)
    {
        Model::query("SELECT image FROM banner WHERE id = {$id}");
        $file = Model::single();

        if(unlink(getcwd().'/frontend/img/banner/'.$file['image']))
        {
            Model::query("DELETE FROM banner WHERE id = :id");
            Model::bind('id', $id);
            return Model::rowCount();
        }
        return 0;
    }

    public function destroy_brand($id)
    {
        Model::query("SELECT image FROM brand WHERE id = {$id}");
        $file = Model::single();

        if(unlink(getcwd().'/frontend/img/brand/'.$file['image']))
        {
            Model::query("DELETE FROM brand WHERE id = :id");
            Model::bind('id', $id);
            return Model::rowCount();
        }
        return 0;
    }

    public function destroy_feature($id)
    {
        Model::query("SELECT icon FROM feature WHERE id = {$id}");
        $file = Model::single();

        if(unlink(getcwd().'/frontend/img/features/'.$file['icon']))
        {
            Model::query("DELETE FROM feature WHERE id = :id");
            Model::bind('id', $id);
            return Model::rowCount();
        }
        return 0;
    }
}

