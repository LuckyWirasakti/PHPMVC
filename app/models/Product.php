<?php

use app\core\Model;

class Product extends Model
{
    public function all()
    {
        Model::query("SELECT * FROM product");
        return Model::resultSet();
    }

    public function update_single($id)
    {
        Model::query("SELECT * FROM product WHERE id=:id");
        Model::bind('id', $id);
        return Model::single();
    }


    public function store($data)
    {
        Model::query("INSERT INTO product VALUES (NULL, :name, :price, :description, :status_product,:category_id,:user_id,NULL)");

        Model::bind('name', $data['name']);
        Model::bind('price', $data['price']);
        Model::bind('description', $data['description']);
        Model::bind('status_product', $data['status_product']);
        Model::bind('category_id', $data['category_id']);
        Model::bind('user_id', $data['user_id']);

        return Model::rowCount();
    }
    public function store2($data,$data2)
    {
        Model::query("INSERT INTO product VALUES (NULL, :name, :price, :description, :status_product,:category_id,:user_id,:image)");

        Model::bind('name', $data['name']);
        Model::bind('price', $data['price']);
        Model::bind('description', $data['description']);
        Model::bind('status_product', $data['status_product']);
        Model::bind('category_id', $data['category_id']);
        Model::bind('user_id', $data['user_id']);
        Model::bind('image', $data2['image']);

        return Model::rowCount();
    }

    public function update_admin2($data,$data2)
    {
        Model::query("UPDATE product SET name=:name, price=:price, description=:description, status_product=:status_product,category_id=:category_id,user_id=:user_id,image=:image WHERE id = :id");

        Model::bind('name', $data['name']);
        Model::bind('price', $data['price']);
        Model::bind('description', $data['description']);
        Model::bind('status_product', $data['status_product']);
        Model::bind('category_id', $data['category_id']);
        Model::bind('user_id', $data['user_id']);
        Model::bind('image', $data2['image']);
        Model::bind('id', $data['id']);

        return Model::rowCount();
    }
    public function update_admin($data)
    {
        Model::query("UPDATE product SET name=:name, price=:price, description=:description, status_product=:status_product,category_id=:category_id,user_id=:user_id WHERE id = :id");

        Model::bind('name', $data['name']);
        Model::bind('price', $data['price']);
        Model::bind('description', $data['description']);
        Model::bind('status_product', $data['status_product']);
        Model::bind('category_id', $data['category_id']);
        Model::bind('user_id', $data['user_id']);
        Model::bind('id', $data['id']);

        return Model::rowCount();
    }
    public function destroy($id)
    {
        Model::query("DELETE FROM product WHERE id = :id");
        Model::bind('id', $id);

        return Model::rowCount();
    }

  
}

