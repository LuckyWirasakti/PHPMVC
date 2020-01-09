<?php

use app\core\Model;

class Payment extends Model
{
    

    public function getMyPayment($id)
    {
        Model::query('SELECT * FROM payment WHERE detail_order='.$id.'');
        return Model::resultSet();
    }
    public function MyPayment($id)
    {
        Model::query('SELECT 
        payment_confirm.id AS pc_id,
        payment_confirm.status,
        payment.kode_payment,
        payment.payment_method
        FROM `payment_confirm` JOIN payment ON payment_confirm.payment_id = payment.id WHERE payment.user_id='.$id.'');
        return Model::resultSet();
    }
    public function myConfirmPayment($id)
    {
        Model::query('SELECT 
        payment_confirm.id AS pc_id,
        payment_confirm.status,
        payment.kode_payment,
        payment.payment_method,
        detail_order.total_price,
        payment_confirm.image
        FROM `payment_confirm` JOIN payment ON payment_confirm.payment_id = payment.id JOIN detail_order ON payment.detail_order=detail_order.id WHERE payment_confirm.id='.$id.'');
        return Model::resultSet();
    }
    public function getMyPaymentJoin()
    {
        Model::query('SELECT * FROM payment JOIN detail_order ON payment.detail_order=detail_order.id WHERE payment.detail_order=1');
        return Model::resultSet();
    }
    public function generateKode($data)
    {
        $query = "UPDATE payment SET 
        payment_method = :payment_method,
        kode_payment = :kode_payment
        WHERE id = :id";

        $kode = $data['id'].$data['payment_method'].date();
        Model::query($query);
        Model::bind('kode_payment', Model::getKode(10,$kode));
        Model::bind('payment_method', $data['payment_method']);
        Model::bind('id', $data['id']);
        Model::execute();
<<<<<<< master
=======
        $query = "INSERT INTO payment_confirm VALUES('',:status,'','', :payment_id,:user_id)";
        Model::query($query);
        Model::bind('status', '0');
        Model::bind('payment_id', $data['id']);
        Model::bind('user_id', Flasher::getLog()['id']);
        return Model::rowCount();
    }

    public function getConfirmPayment()
    {
        Model::query("SELECT payment_confirm.id, payment.kode_payment, payment.payment_method, payment_confirm.status, payment_confirm.image, payment_confirm.updated_at FROM `payment_confirm` JOIN payment ON payment_confirm.payment_id = payment.id");
        return Model::resultSet();
    }

    public function updateConfirmPayment($data,$data2)
    {
        Model::query("UPDATE `payment_confirm` SET image=:image, user_id=:user_id  WHERE `payment_confirm`.`id` =:id");
        Model::bind("user_id", Flasher::getLog()['id']);
        Model::bind("image", $data2['image']);
        Model::bind("id", $data['id']);
        return Model::rowCount();
    }

    public function update_status($data)
    {
        Model::query("UPDATE `payment_confirm` SET `status` =:status, user_id=:user_id  WHERE `payment_confirm`.`id` =:id");
        Model::bind("user_id", Flasher::getLog()['id']);
        Model::bind("status", $data['status']);
        Model::bind("id", $data['id']);
>>>>>>> local
        return Model::rowCount();
    }
    
}

