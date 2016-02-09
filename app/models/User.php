<?php

/**
 * User: João Carvalho
 * Date: 11/01/2016
 * Time: 02:13
 */
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $name;

    protected $fillable = [
        'username',
        'email'
    ];
}