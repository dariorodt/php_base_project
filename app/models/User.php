<?php

/**
 * Class User
 */
class User
{
	private $id;
	private $uname;
	private $email;
	private $created;
	private $updated;
	private $password;
	private $access_level;
	
	// Setters
	public function set_id(int $userId) { $this->id = $userId; return $this; }
	public function set_name($userName) { $this->uname = $userName; return $this; }
	public function set_email($userMail) { $this->email = $userMail; return $this; }
	public function set_created($date) { $this->created = $date; return $this; }
	public function set_updated($date) { $this->updated = $date; return $this; }
	public function set_access_level(int $accessLevel) { $this->access_level = $accessLevel; }
	public function set_password($userPassword) { $this->password = $userPassword; return $this; }
	
	// Getters
	public function get_id() { return $this->id; }
	public function get_name() { return $this->uname; }
	public function get_email() { return $this->email; }
	public function get_created() { return $this->created; }
	public function get_updated() { return $this->updated; }
	public function get_password() { return $this->password; }
	public function get_access_level() { return $this->access_level; }
}