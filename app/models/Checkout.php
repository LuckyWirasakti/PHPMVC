<?php

use app\core\Model;

class Checkout extends Model
{
    public function getmyCheckout()
    {
        Model::query('SELECT * FROM detail_order WHERE id_users=1 and user_cart=1');
        return Model::resultSet();
    }
    public function addCheckout($data)
    {
        Model::query('SELECT * FROM detail_order WHERE id_users=:id_users and user_cart=:user_cart');
        Model::bind('id_users', $data['id_users']);
        Model::bind('user_cart', $data['user_cart']);
        $hasil = Model::resultSet();
        if(!$hasil){
            $query = "INSERT INTO detail_order VALUES('', :user_cart, :id_users,'','','','','','','','','','')";

            Model::query($query);
            Model::bind('user_cart', $data['user_cart']);
            Model::bind('id_users', $data['id_users']);
            Model::execute();

            return Model::rowCount();
        }else{
            return Model::rowCount();
        }
    }
    public function updateCheckout($data)
    {
        $query = "UPDATE detail_order SET 
        fullname = :fullname,
        numberphone = :numberphone,
        email = :email,
        country = :country,
        myaddress = :myaddress,
        province = :province,
        city = :city,
        district = :district,
        postcode = :postcode,
        total_price= :total_price
        WHERE id = :id";

        Model::query($query);
        Model::bind('fullname', $data['fullname']);
        Model::bind('numberphone', $data['numberphone']);
        Model::bind('email', $data['email']);
        Model::bind('country', $data['country']);
        Model::bind('myaddress', $data['myaddress']);
        Model::bind('province', $data['province']);
        Model::bind('city', $data['city']);
        Model::bind('district', $data['district']);
        Model::bind('postcode', $data['postcode']);
        Model::bind('total_price', $data['total_price']);
        Model::bind('id', $data['id']);
        Model::execute();
        $query3 = "UPDATE cart as c
        JOIN detail_order as do ON
            do.user_cart = c.user_cart AND do.id_users=c.id_users
        SET c.status_cart=0
        WHERE do.id = :id";
        Model::query($query3);
        Model::bind('id', $data['id']);
        Model::execute();
        $query2="INSERT INTO payment VALUES('','','',:detail_order)";
        Model::query($query2);
        Model::bind('detail_order', $data['id']);
        Model::execute();
        return Model::rowCount();
    }
}

