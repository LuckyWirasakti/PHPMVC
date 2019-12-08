<?php

use app\core\Model;

class User extends Model
{
    public function all()
    {
        Model::query("SELECT id, username, email  FROM user");
        return Model::resultSet();
    }
}

