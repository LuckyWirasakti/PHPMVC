<?php

use app\core\Model;

class Category extends Model
{
    public function all()
    {
        Model::query('SELECT * FROM category');
        return Model::resultSet();
    }
    public function update_single($id)
    {
        Model::query("SELECT * FROM category WHERE id=:id");
        Model::bind('id', $id);
        return Model::single();
    }
    public function store($data)
    {
        Model::query("INSERT INTO category VALUES ('', :category)");

        Model::bind('category', $data['category']);
        return Model::rowCount();
    }
    public function update($data)
    {
        Model::query("UPDATE category SET category=:category WHERE id = :id");

        Model::bind('category', $data['category']);
        Model::bind('id', $data['id']);

        return Model::rowCount();
    }
    public function destroy($id)
    {
        Model::query("DELETE FROM category WHERE id = :id");
        Model::bind('id', $id);
        return Model::rowCount();
    }

    public function pagination()
    {
        Model::query("SELECT product.id FROM product join category on product.category_id=category.id");
        return ceil((Model::rowCount()/6));
    }

    public function pagination2($category)
    {
    Model::query("SELECT product.id FROM product join category on product.category_id=category.id WHERE product.category_id={$category}");
        return ceil((Model::rowCount()/6));
    }
    
    public function category1($page = 0)
    {
        $start = ($page>1) ? ($page * 6) - 6 : 0;
        Model::query("SELECT * FROM product JOIN category ON product.category_id=category.id LIMIT 6 OFFSET {$start}");
        return Model::resultSet();
    }
    
    public function category2($category,$page = 0)
    {
        $start = ($page>1) ? ($page * 6) - 6 : 0;
        Model::query("SELECT * FROM product JOIN category ON product.category_id=category.id WHERE product.category_id={$category} LIMIT 6 OFFSET {$start}");
        return Model::resultSet();
    }
}

