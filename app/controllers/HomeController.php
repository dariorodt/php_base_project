<?php 
/*
 * Class HomeController
 *
 * @author Darío Rodríguez <dariorodt@gmail.com>
 */


class HomeController
{
	/**
	 * 
	 */
	public function show()
	{
		$view = VIEWS_DIR.'/home.view.php';
		$view_name = "Home";
		
		include LAYOUT_DIR."main.layout.php";
	}
	
	/**
	 * 
	 */
	public function welcome()
	{
		/*	Recibe las peticiones provenientes de las campañas de correo,
			las ofertas, las campañas de marketing por redes sociales, 
			etc.*/
	}
	
	/**
	 * 
	 */
	public function services()
	{
		# code...
	}
	
	/**
	 * 
	 */
	public function portfolio()
	{
		# code...
	}
	
	/**
	 * 
	 */
	public function about()
	{
		# code...
	}
	
	/**
	 * 
	 */
	public function contact()
	{
		# code...
	}
}