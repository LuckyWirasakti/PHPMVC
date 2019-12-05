<?php

use app\core\Model;

class Home extends Model
{

    public function getAllBanner()
    {
        Model::query('SELECT * FROM banner');
        return Model::resultSet();;
    }

    public function getAllFeatures()
    {
        $this->query('SELECT * FROM features');
        return $this->resultSet();
    }

    public function getAllCategory()
    {
        $this->query('SELECT * FROM category');
        return $this->resultSet();
    }

    public function getAllBrand()
    {
        $this->query('SELECT * FROM brand');
        return $this->resultSet();
    }

}

