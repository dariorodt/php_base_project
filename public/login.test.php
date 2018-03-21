<?php 
// Include application components
require '../app/app.php';

session_start();

$login = new LoginController;

$login->ShowLogin();