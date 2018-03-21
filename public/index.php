<?php

/**************************************************************************************

	<Application description>
	
	Author: 
	Dario Rodriguez <dariorodt@gmail.com> 
	Skype: dariorodt
	Puerto La Cruz, Venezuela.
	
	Copyright: Youre company. 2017 - 2018. All rights reserved.

***************************************************************************************/

// Include application components
require '../app/app.php';

// Init sessions
session_start();

/*	A valid request are formed this way:
	http://hostname.com/controller/function?param1=val1&param2=val2
	So "cotroller" and "function" are the respective names of the 
	Controller and its respective Function.
	The parameters have to match the function parameters.
	*/
$app_route = explode('/', $_SERVER['REQUEST_URI']);

if ($app_route[1]) $controller = $app_route[1];
if ($app_route[2]) $function = $app_route[2]; else $function = null;


// Routing
if ($controller)
{
	if ($controller == 'home')
	{
		$controller = new HomeController();
		
		if ($function == 'welcome') 		$controller->welcome();
		elseif ($function == 'services')	$controller->services();
		elseif ($function == 'portfolio')	$controller->portfolio();
		elseif ($function == 'about')		$controller->about();
		elseif ($function == 'contact')		$controller->contact();
		else $controller->show();
	}
	elseif ($controller == 'login')
	{
		$controller = new LoginController();
		
		if ($function == 'login') 		$controller->login($_POST['username'], $_POST['password']);
		elseif ($function == 'logout')	$controller->logout();
		elseif ($function == 'signup')  $controller->signup();
		elseif ($function == 'create')  $controller->create($_POST['username'], $_POST['email'], $_POST['password']);
		elseif ($function == 'error')	$controller->error($_GET['error']);
		else $controller->show();
	}
	elseif ($controller == 'users') {
		$controller = new UsersController();
		
		if ($function == 'add') 		$controller->add();
		elseif ($function == 'create') 	$controller->create();
		elseif ($function == 'edit') 	$controller->edit($_POST['user_id']);
		elseif ($function == 'update') 	$controller->update();
		elseif ($function == 'delete')	$controller->delete($_POST['user_id']);
		else $controller->show();
	}
	else
	{
		header('location: /error_404.php');
	}
}
else
{
	$controller = new HomeController();
	$controller->show();
}