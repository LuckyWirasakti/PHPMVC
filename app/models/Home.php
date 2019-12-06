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
}

