<?php

use app\core\Model;

class Payment extends Model
{
    

    public function getMyPayment()
    {
        Model::query('SELECT * FROM payment WHERE detail_order=1');
        return Model::resultSet();
    }
    public function getMyPaymentJoin()
    {
        Model::query('SELECT * FROM payment JOIN detail_order ON payment.detail_order=detail_order.id WHERE detail_order=1');
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
        // Model::execute();
        return Model::rowCount();
    }
    
}

