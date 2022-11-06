<?php
require_once 'Database.php';
require_once 'Config.php';

$GLOBALS['config'] = [
    'mysql' => [
        'host' => 'mysql',
        'database' => 'test',
        'username' => 'root',
        'password' => 'root',

    ]
];

$users = DataBase::getInstance()->query("SELECT * FROM users");
var_dump($users->results());
//$users = DataBase::getInstance()->get('users', ['username', '=', "John"]);
//DataBase::getInstance()->delete('users', ['username', '=', "John"]);
//$id = 6;
//DataBase::getInstance()->update('users', $id, [
//    'username' => 'John',
//    'password' => '123456',
//]);


//if ($users->error()) {
//    echo 'we have error';
//} else {
//    foreach ($users->results() as $user) {
//        echo $user->username . '<br>';
//    }
//}
