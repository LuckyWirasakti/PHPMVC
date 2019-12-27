<?php

use app\core\Model;

class Comment extends Model
{
    public function all()
    {
        Model::query('SELECT * FROM comment');
        return Model::resultSet();
    }
    public function comment_single($id)
    {
        Model::query("SELECT * FROM comment WHERE id=:id");
        Model::bind('id', $id);
        return Model::single();
    }

    public function update_comment($data)
    {
        Model::query("UPDATE comment SET name=:name, email=:email, comment=:comment, reply_comment=:reply_comment, reply_by=:reply_by WHERE id = :id");

        Model::bind('name', $data['name']);
        Model::bind('email', $data['email']);
        Model::bind('comment', $data['comment']);
        Model::bind('reply_comment', $data['reply_comment']);
        Model::bind('reply_by', $data['reply_by']);
        Model::bind('id', $data['id']);

        return Model::rowCount();
    }


    public function destroy($id)
    {
        Model::query("DELETE FROM comment WHERE id = :id");
        Model::bind('id', $id);
        return Model::rowCount();
    }
}

