<?php

/**
 * User: João Carvalho
 * Date: 10/01/2016
 * Time: 16:43
 */
class Home extends Controller
{
    public function index($name = '')
    {
        $this->view('home/index', ['name' => $name]);
    }

    public function create($username = '', $email = '')
    {
        User::create([
            'username' => $username,
            'email' => $email
        ]);
    }
}