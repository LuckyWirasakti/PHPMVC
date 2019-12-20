<?php

use app\core\Model;

class Dashboard extends Model
{
    public function count()
    {
        $data=[];
        $register = [
            "SELECT COUNT(id) AS contact FROM contact",
            "SELECT COUNT(id) AS user FROM user",
            "SELECT COUNT(id) AS transaction FROM transaction",
            "SELECT COUNT(id) AS member FROM member"
        ];

        foreach ($register as $value) {
            Model::query($value);
            array_push($data,Model::single());
        }

        return $data;
    }
}

