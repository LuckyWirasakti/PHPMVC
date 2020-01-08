<?php

use app\core\Model;

class Faq extends Model
{

    public function getAllFaq()
    {
        Model::query('SELECT * FROM faq');
        return Model::resultSet();;
    }

    public function single_faq($id)
    {
        Model::query("SELECT * FROM faq WHERE id=:id");
        Model::bind('id', $id);
        return Model::single();
    }

    public function store($data)
    {
        Model::query("INSERT INTO faq VALUES (NULL, :question, :answer)");

        Model::bind('question', $data['question']);
        Model::bind('answer', $data['answer']);

        return Model::rowCount();
    }

    public function update_faq($data)
    {
        Model::query("UPDATE faq SET question=:question, answer=:answer WHERE id = :id");

        Model::bind('question', $data['question']);
        Model::bind('answer', $data['answer']);
        Model::bind('id', $data['id']);

        return Model::rowCount();
    }

    public function update($data)
    {
        Model::query("UPDATE faq SET question=:question, answer=:answer WHERE id = :id");

        Model::bind('question', $data['question']);
        Model::bind('answer', $data['answer']);
        Model::bind('id', $data['id']);

        return Model::rowCount();
    }

    public function destroy($id)
    {
        Model::query("DELETE FROM faq WHERE id = :id");
        Model::bind('id', $id);

        return Model::rowCount();
    }
}