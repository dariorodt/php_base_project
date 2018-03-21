<?php 

require '../app/bootloader.php';

session_start();

$user_profile = new UserProfile();

$user_profile->set_id(1);
$user_profile->set_user_id(2);
$user_profile->set_name("Dario Rodriguez");
$user_profile->set_phone("04129490074");
$user_profile->set_mail("dariorodt@hotmail.com");
$user_profile->set_address("Calle 22, Nro 51, planta alta, Campo Gulf, Puerto La Cruz, Venezuela");
$user_profile->set_birth("1968-12-24");
$user_profile->set_genere(1);
$user_profile->set_photo("uploads/411563965865458.jpg");
$user_profile->set_facebook("http://www.facebook.com/dariorodt");
$user_profile->set_twitter("http://www.twitter.com/dariorodt");
$user_profile->set_created_at(NULL);
$user_profile->set_updated_at(NULL);

$users_repo = new UsersRepository();

$users_repo->update_profile($user_profile);

// $users_repo->set_profile($user_profile);