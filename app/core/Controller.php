<?php

/**
 * User: João Carvalho
 * Date: 10/01/2016
 * Time: 16:39
 */
class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}