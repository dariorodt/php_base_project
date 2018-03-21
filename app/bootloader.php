<?php 

/*
 * Loads all app clases, helpers, models, controllers and configuration files.
 * 
 * Try to mantain all this files organized in Space Names to facilitate indentification.
 */

// Include configurtion files (required)
require 'config/defines.php';

// Includes controllers files
include 'controllers/HomeController.php';
include 'controllers/LoginController.php';
include 'controllers/UsersController.php';

// Includes class files


// Includes helper files


// Includes model files
require 'models/User.php';
require 'models/UserProfile.php';
require 'models/UsersRepository.php';

// Include database API
require '../database/dbconnection.php';
require '../database/api/functions.php';