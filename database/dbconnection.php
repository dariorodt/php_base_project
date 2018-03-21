<?php 

/**
 * Class: Database
 * 
 * Crea un objeto PDO que interactúa con la base de datos. Teóricamente 
 * el objeto PDO puede conectar usando cualquiera de los drivers para base 
 * de datos soportado por PHP: mysql, sqlite, pgsql y otros (investigar); 
 * pero aquí sólo lo probamos con mysql.
 */

// Todo: Completar la documentación acerca de PDO
// Todo: Hacer pruebas con otros drivers
// Todo: Definir un archivo de cofiguración para la base de datos

class Database
{
	// Debe cargarse desde un archivo de configuración
	private static $dbName = 'test' ;
	private static $dbHost = 'localhost' ;
	private static $dbUsername = 'root';
	private static $dbUserPassword = '';
	 
	private static $cont  = null;
	
	// Impide instanciar la clase
	public function __construct() {
		die('Init function is not allowed');
	}
	
	/**
	 * Genera y devuelve un objeto PDO previamente configurado
	 */
	public static function connect()
	{
		// Una sola conexión para toda la aplcación
		if ( null == self::$cont )
		{
			try
			{
				self::$cont = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
				self::$cont->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e)
			{
				die($e->getMessage()); 
			}
		}
		return self::$cont;
	}
	
	/**
	 * Elimina la conexión
	 */ 
	public static function disconnect()
	{
		self::$cont = null;
	}
}