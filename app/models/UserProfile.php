<?php 

/**
 * Class UserProfile
 * Contents the user information beyond the user login data
 * contained in User model.
 */
class UserProfile
{
	private $id;
	private $user_id;
	private $name;
	private $phone;
	private $mail;
	private $address;
	private $birth;
	private $genere;
	private $photo;
	private $facebook;
	private $twitter;
	private $created_at;
	private $updated_at;
	
	// setters
	public function set_id($id) { $this->id = $id; }
	public function set_user_id($user_id) { $this->user_id = $user_id; }
	public function set_name($name) { $this->name = $name; }
	public function set_phone($phone) { $this->phone = $phone; }
	public function set_mail($mail) { $this->mail = $mail; }
	public function set_address($address) { $this->address = $address; }
	public function set_birth($birth) { $this->birth = $birth; }
	public function set_genere($genere) { $this->genere = $genere; }
	public function set_photo($photo) { $this->photo = $photo; }
	public function set_facebook($facebook) { $this->facebook = $facebook; }
	public function set_twitter($twitter) { $this->twitter = $twitter; }
	public function set_created_at($created_at) { $this->created_at = $created_at; }
	public function set_updated_at($updated_at) { $this->updated_at = $updated_at; }
	
	// getters
	public function get_id($id) { return $this->id; }
	public function get_user_id($user_id) { return $this->user_id; }
	public function get_name($name) { return $this->name; }
	public function get_phone($phone) { return $this->phone; }
	public function get_mail($mail) { return $this->mail; }
	public function get_address($address) { return $this->address; }
	public function get_birth($birth) { return $this->birth; }
	public function get_genere($genere) { return $this->genere; }
	public function get_photo($photo) { return $this->photo; }
	public function get_facebook($facebook) { return $this->facebook; }
	public function get_twitter($twitter) { return $this->twitter; }
	public function get_created_at($created_at) { return $this->created_at; }
	public function get_updated_at($updated_at) { return $this->updated_at; }
}