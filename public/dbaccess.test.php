<?php

require '../app/app.php';

echo '<h1>Pruebas de acceso a la base de datos</h1>';

$users = new Users();

$user = new User();
$user->setId(2)->setName('marcelo')->setMail('marcelorodfu@gmail.com')->setPassword('toronto');

var_dump($user->getId());

echo $users->Update($user);

echo 'listo...';