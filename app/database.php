<?php
/**
 * Created by PhpStorm.
 * User: joaoc
 * Date: 09/02/2016
 * Time: 16:40
 */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'database' => 'course_mvc',
    'charset' => 'utf8',
    'collaction' => 'utf8_general_ci',
    'prefix' => ''
]);

$capsule->bootEloquent();