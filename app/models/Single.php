<?php

use app\core\Model;

class Single extends Model
{

    public function getAllProduct()
    {
        Model::query('SELECT * FROM product');
        return Model::resultSet();
    }

    public function getAllComment()
    {
        Model::query('SELECT * FROM comment');
        return Model::resultSet();
    }

    public function getAllReview()
    {
        Model::query('SELECT * FROM review');
        return Model::resultSet();
    }
    public function detail($id){
        Model::query('SELECT * FROM product WHERE id=:id');
        Model::bind('id', $id);
        return Model::resultSet();
    }
    public function store_comment($data)
    {
        Model::query("INSERT INTO comment VALUES ('', :name, :email, :id_product, :comment,'','')");

        Model::bind('name', $data['name']);
        Model::bind('email', $data['email']);
        Model::bind('id_product', $data['id_product']);
        Model::bind('comment', $data['comment']);
        return Model::rowCount();
    }

    public function store_review($data)
    {
        Model::query("INSERT INTO review VALUES ('',:id_product,:id_member, :name, :email, :phone, :reviews)");

        Model::bind('id_member', $data['id_member']);
        Model::bind('id_product', $data['id_product']);
        Model::bind('name', $data['name']);
        Model::bind('email', $data['email']);
        Model::bind('phone', $data['phone']);
        Model::bind('reviews', $data['reviews']);
        return Model::rowCount();
    }
}

