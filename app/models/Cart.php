<?php

use app\core\Model;

class Cart extends Model
{
    public function addCart($data)
    {
        // var_dump($data);
        // die;
        Model::query('SELECT * FROM cart WHERE id_product=:id_product and user_cart=:user_cart');
        Model::bind('id_product', $data['id']);
        Model::bind('user_cart', $data['user_cart']);
        $hasil = Model::resultSet();
        if(!$hasil){
            $query = "INSERT INTO cart VALUES('', :id_product, :qty, :user_cart, :id_users,:status_cart)";

            Model::query($query);
            Model::bind('id_product', $data['id']);
            Model::bind('qty', $data['qty']);
            Model::bind('user_cart', $data['user_cart']);
            Model::bind('id_users', $data['id_users']);
            Model::bind('status_cart', $data['status_cart']);
            Model::execute();
            return Model::rowCount();
        }else{
        foreach($hasil as $key=>$value){
            if($value['id_product']==$data['id'] && $value['user_cart']==$data['user_cart']){
                $qty = 1 + $value['qty'];
                $query = "UPDATE cart SET qty = :qty WHERE id = :id";
                Model::query($query);
                Model::bind('qty', $qty);
                Model::bind('id', $value['id']);
                Model::execute();
                return Model::rowCount();
            }else{
                $query = "INSERT INTO cart VALUES('', :id_product, :qty, :user_cart, :id_users,:status_cart)";

                Model::query($query);
                Model::bind('id_product', $data['id']);
                Model::bind('qty', $data['qty']);
                Model::bind('user_cart', $data['user_cart']);
                Model::bind('id_users', $data['id_users']);
                Model::bind('status_cart', $data['status_cart']);
                Model::execute();
                return Model::rowCount();
            }
        }
    }
}

    public function getMyCart()
    {
        Model::query('SELECT cart.id,product.name,cart.qty,product.price,product.image FROM cart JOIN product ON cart.id_product=product.id WHERE cart.id_users=1 and cart.status_cart=1');
        return Model::resultSet();
    }
    public function countMyCart()
    {
        Model::query('SELECT count(*) as count FROM cart WHERE cart.id_users=1 and cart.status_cart=1');
        return Model::resultSet();
    }
    public function totalMyCart(){
        Model::query('SELECT SUM(cart.qty*product.price) as total FROM cart JOIN product ON cart.id_product=product.id WHERE cart.id_users=1 and cart.status_cart=1');
        return  Model::resultSet();
    }
    public function updateCart($data)
    {
        $id_cart = $data['id_cart'];
        $qty = $data['qty'];

        foreach($id_cart as $key=>$n){
                if($qty[$key]<=0){
                    $query = "DELETE FROM cart WHERE id = :id";
                    Model::query($query);
                    Model::bind('id', $id_cart[$key]);
                    Model::rowCount();  
                }else{
                    $query = "UPDATE cart SET qty = :qty WHERE id = :id";
                    Model::query($query);
                    Model::bind('qty', $qty[$key]);
                    Model::bind('id', $id_cart[$key]);
                    Model::rowCount();
                }   
        }
return true;
       
    }
}