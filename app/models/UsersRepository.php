<?php 

/**
 * Clase Users
 */
class UsersRepository
{
	private $database;
	private $table = 'users';
	
	public function __construct()
	{
		$this->database = Database::connect();
	}
			
	
	/**
	 * Recupera todas las filas de la tabla users
	 */
	public function get_all()
	{
		try
		{
			// Preparamos un array para almacenar las lista de usuarios
			$result = array();

			// Preparamos la consulta seleccionando todos los registros de la 
			// tabla users
			$stm = $this->database->prepare("SELECT * FROM $this->table");
			$stm->execute();
			
			/*	La función fetchAll devuelve un array que contiene todas las 
			filas del conjunto de resultados. Estos resultados puedes ser 
			retornados como: FETCH_OBJ, FETCH_ASOC, FETCH_NUM, FETCH_BOTH, 
			FETCH_BOUND, FETCH_CLASS, FETCH_INTO, FETCH_NAMED.*/
			
			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$user = new User();
				
				$user->set_id($r->id);
				$user->set_name($r->uname);
				$user->set_email($r->email);
				$user->set_created($r->created_at);
				$user->set_updated($r->updated_at);
				$user->set_password($r->password);
				$user->set_access_level($r->access_level);

				$result[] = $user;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	/**
	 * Obtiene la fila de la tabla users que coincida con $id
	 */
	public function get($id)
	{
		try 
		{
			// Preparamos la consulta seleccionando el registro de la 
			// tabla alumnos que coincida con el parámetro
			$stm = $this->database
					  ->prepare("SELECT * FROM $this->table WHERE id = ?");
			
			$stm->execute(array($id));
			
			// Almaenamos el resultado en $r como un objeto
			$r = $stm->fetch(PDO::FETCH_OBJ);

			// Creamos un nuevo objeto alumno
			$user = new User();
			
			// Igualamos los campos de $user con las columnas de $r
			$user->setId($r->id);
			$user->setName($r->uname);
			$user->setMail($r->email);
			$user->setPassword($r->password);
			$user->setAccessLevel($r->access_level);

			return $user;
		}
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	/**
	 * Obtiene los datos del usuario que coincida con $uname
	 */
	public function get_by_name($user_name)
	{
		try 
		{
			// Preparamos la consulta seleccionando el registro de la 
			// tabla usuarios que coincida con el parámetro
			$stm = $this->database
					  ->prepare("SELECT * FROM $this->table WHERE uname = ?");
			
			$stm->execute(array($user_name));
			
			// Almaenamos el resultado en $r como un objeto
			$r = $stm->fetch(PDO::FETCH_OBJ);

			if ($r)
			{
				// Creamos un nuevo objeto user
				$user = new User();
				
				// Igualamos los campos de $user con las columnas de $r
				$user->set_id($r->id);
				$user->set_name($r->uname);
				$user->set_email($r->email);
				$user->set_created($r->created_at);
				$user->set_updated($r->updated_at);
				$user->set_password($r->password);
				$user->set_access_level($r->access_level);

				return $user;
			}
			
			else
			{
				return FALSE;
			}
		}
		catch (Exception $e) 
		{
			exit("Error reading table users in method get_by_name() from class UsersRepository.<br>".$e->getMessage());
		}
	}
	
		
	/**
	 * Crea un nuevo perfil de usuario en la base de datos
	 * 
	 */
	public function set_profile($user_profile)
	{
		try
		{				
			$query = "INSERT INTO user_profiles(user_id, name, phone, mail, address, birth, genere, photo, facebook, twitter) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			
			$this->database->prepare($query)->execute(array(
				$user_profile->get_user_id(),
				$user_profile->get_name(),
				$user_profile->get_phone(),
				$user_profile->get_mail(),
				$user_profile->get_address(),
				$user_profile->get_birth(),
				$user_profile->get_genere(),
				$user_profile->get_photo(),
				$user_profile->get_facebook(),
				$user_profile->get_twitter()
			));
			
			return TRUE;
		}
		
		catch (Exception $e)
		{
			$error_msg = "Error inserting new record table user_profiles in method set_profile() on class UsersRepository<br>";
			
			exit($error_msg.$e->getMessage());
		}
	}
	
	
	/**
	 * Lee el perfil vinculado con el user_id suministrado
	 */
	public function get_profile($user_id)
	{
		try 
		{
			$query = $this->database->prepare("SELECT * FROM user_profiles WHERE user_id=$user_id LIMIT 1");
			$query->execute();
			
			$user_profile = $query->fetchAll(PDO::FETCH_OBJ)[0];
			
			return $user_profile;
		} 
		
		catch (Exception $e) 
		{
			$error_msg = "Error reading table user_profiles from method get_profile() in class UsersRepository<br>";
			
			exit($error_msg.$e->getMessage());
		}
	}
	
	
	/**
	 * Actualiza el registro indicado en profile_id
	 */
	public function update_profile($user_profile)
	{
		try 
		{
			$query = $this->database->prepare("UPDATE user_profiles SET user_id=?, name=?, phone=?, mail=?, address=?, birth=?, genere=?, photo=?, facebook=?, twitter=? WHERE id=?");
			
			$query->execute(
				array(
					$user_profile->get_user_id(),
					$user_profile->get_name(),
					$user_profile->get_phone(),
					$user_profile->get_mail(),
					$user_profile->get_address(),
					$user_profile->get_birth(),
					$user_profile->get_genere(),
					$user_profile->get_photo(),
					$user_profile->get_facebook(),
					$user_profile->get_twitter(),
					$user_profile->get_id()
				)
			);
		} 
		
		catch (Exception $e) 
		{
			$error_msg = "Error updating  table user_profiles from update_profile() method in class UsersRepository";
			
			exit($error_msg.$e->getMessage());
		}
	}
	
	
	/**
	 * Elimina la fila de la tabla alumnos que coincida con $id
	 */
	public function delete($id)
	{
		try 
		{
			// Preparamos la consulta DELETE indicando que la columna
			// a buscar el id
			$stm = $this->database
					  ->prepare("DELETE FROM $this->table WHERE id = ?");                      

			// Vimculamos el parámertro $id con la colunma id de la tabla
			$stm->execute(array($id));
			
			return true;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	
	/**
	 * Actualiza una fila con datos nuevos
	 */
	public function update(User $user)
	{
		try 
		{
			// Preparamos la consulta UPDATE apuntando a las columnas que 
			// se van a actualizar
			$sql = "UPDATE users SET uname=?, email=?, password=?, access_level=? WHERE id = ?";
			
			// Pasamos los datos que entran por el argumento (que es un
			// tipo Alumno) en el mismo orden en que aparecen en la
			// consulta UPDATE
			$this->database->prepare($sql)->execute(
				array(
					$user->get_name(),
					$user->get_email(),
					$user->get_password(),
					$user->get_access_level(),
					$user->get_id()
				)
			);
			return true;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	
	/**
	 * Crea un nuevo isiario en la tabla users
	 */
	public function create(User $user)
	{
		
		//exit(var_dump($user));
		
		try 
		{
			// Preparamos la cunsulta INSERT INTO indicando las columnas
			// que se van a afectar en el oden en que aparecen en la tabla
			// excepto la columna id que se rellena automátcamente.
			$sql = "INSERT INTO $this->table(uname, email, password, access_level) 
					VALUES (?, ?, ?, ?)";
			
			// Pasamos los datos que entran por el argumento (que es un
			// tipo Alumno) en el mismo orden en que aparecen en la
			// consulta INSERT INTO
			$this->database->prepare($sql)->execute(
				array(
					$user->get_name(),
					$user->get_email(),
					$user->get_password(),
					$user->get_access_level()
				)
			);
			
			return $this->database->lastInsertId();
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	
	public function __destruct()
	{
		Database::disconnect();
	}
}