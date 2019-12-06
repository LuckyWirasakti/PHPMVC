<?php
namespace app\core;

class Controller {

    protected function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    protected function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    protected function redirect($link)
    {
        header("Location: ".BASEURL."/{$link}");
    }
}
