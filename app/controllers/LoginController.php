<?php 

/* 
 * Class LoginController
 * 
 * This class controls the user session init.
 * Performs the login anf logout tasks verifiyng the existence of the user
 * and initializating the session parameters and the user privileges
 * 
 */
class LoginController
{
	private $database;
	private $table = 'users';
	
	public function __construct()
	{
		$this->database = Database::connect();
	}
	
	/**
	 * Show Function
	 * Shows the login view
	 */
	public function show()
	{
		$view_name = "Login";
		$view = VIEWS_DIR."/login.view.php";
		include LAYOUT_DIR."login.layout.php";
	}
	
	/**
	 * Error function
	 * Shows the login view when an error occurred in de login() function
	 */
	public function error($error)
	{
		if ($error == 1) 
		{
			$view_name = "Login";
			$view = VIEWS_DIR."/login.view.php";
			$error_message = "User does not exist.";
			include LAYOUT_DIR."login.layout.php";
		}
		
		elseif ($error == 2) 
		{
			$view_name = "Login";
			$view = VIEWS_DIR."/login.view.php";
			$error_message = "Password does not match.";
			include LAYOUT_DIR."login.layout.php";
		}
		
		else 
		{
			$view_name = "Login";
			$view = VIEWS_DIR.'/loing.view.php';
			$error_message = "Undefined error.";
			include LAYOUT_DIR.'loing.layout.php';
		}
	}
	
	/**
	 * Login function
	 * Set the user session parameters
	 */
	public function login($uname, $pass)
	{
		$username = $uname;
		$password = md5($pass);

		// Get the user
		$users = new UsersRepository();
		$user = $users->get_by_name($username);
		
		// If user exists, compare password
		if ($user)
		{
			// If both passwords matches, set session parameters
			if ($user->get_password() == $password) 
			{
				// Set login and go home
				$_SESSION['loggedin'] = true;
				$_SESSION['username'] = $user->get_name();
				$_SESSION['access_level'] = $user->get_access_level();
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
				header("location: /home");
			}
			else
			{
				// Password doesn't match...
				header("location: /login/error/?error=2");		
			}
		}
		
		else
		{
			// User doesn't exist...
			header("location: /login/error/?error=1");
		}
	}
	
	/**
	 * Logout function
	 * Unset all session parameters to log out current user
	 */
	public function logout()
	{
		unset($_SESSION['loggedin']);
		unset($_SESSION['username']);
		unset($_SESSION['access_level']);
		unset($_SESSION['start']);
		unset($_SESSION['expire']);
		header("location: /home");
	}
	
	/**
	 * Sign up function
	 * Shows the sign up view
	 */
	public function signup()
	{
		$view_name = "Sign up";
		$view = VIEWS_DIR."/signup.view.php";
		include LAYOUT_DIR."login.layout.php";
	}
	
	/**
	 * Create user function
	 * Creates a new user
	 */
	public function create($username, $email, $password)
	{
		$user = new User();
		$user->set_name($username);
		$user->set_email($email);
		$user->set_password(md5($password));
		$user->set_access_level(11);
		
		$users_repo = new UsersRepository();
		$users_repo->create($user);
		header("location: /login");
	}
	
}