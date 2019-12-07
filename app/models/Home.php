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

    public function destroy_banner($id)
    {
        Model::query("DELETE FROM banner WHERE id = :id");
        Model::bind('id', $id);
        Model::execute();
        return Model::rowCount();
    }

    public function destroy($id)
    {
        Model::query("DELETE FROM contact WHERE id = :id");
        Model::bind('id', $id);
        Model::execute();
        return Model::rowCount();
    }
}

