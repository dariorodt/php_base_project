<?php 

/*
 * Class UsersController:
 * 
 * Se encarga de ejecutar las peticiones relacionadas con 
 * la administración de usuarios desde el panel de control 
 * de la aplicación.
 *
 * No cumple con las funciones de registro y autenticación 
 * de usuarios ya que de eso se encarga la clase 
 * LoginController.
 *
 * @author Darío Rodríguez <dariorodt@gmail.com>
 */
class UsersController
{
	private $users_repo;
	
	public function __construct()
	{
		$this->users_repo = new UsersRepository();
	}
	
	/**
	 * 
	 */
	public function show()
	{
		$view = VIEWS_DIR."list-users.view.php";
		$view_name = "Users list";
		
		$users = $this->users_repo->get_all();
		
		include LAYOUT_DIR.'admin.layout.php';
	}
	
	
	/**
	 * 
	 */
	public function add()
	{
		$view = VIEWS_DIR."add-user.view.php";
		$view_name = "Add new user";
		
		include LAYOUT_DIR.'admin.layout.php';
	}
	
	
	/**
	 * 
	 */
	public function create()
	{
		$user = new User();
		$user_profile = new UserProfile();
		
		echo $_POST['username'];
		
		// Todo: Assign every post data to their coresponding user object property.
		
		//$user_id = $this->users_repo->create($user);
		
		//$this->users_repo->set_profile();
	}
	
	/**
	 * 
	 */
	public function edit()
	{
		// Todo: Retrieve user data from database 
		// Todo: Retrieve relate data located in other tables
		// Todo: Call edit-user view
	}
	
	
	/**
	 * 
	 */
	public function update()
	{
		// Todo: Update table users
		// Todo: Update table user_profiles
	}
	
	
	/**
	 * 
	 */
	public function delete()
	{
		// Todo: Delete user from database
	}
}