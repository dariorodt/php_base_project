CREATE DATABASE IF NOT EXISTS test;

use test;

# Note: The TIMESTAMP type needs defaults to be set as shown.

CREATE TABLE IF NOT EXISTS users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  uname VARCHAR(20) NOT NULL,
  email VARCHAR(50) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  password VARCHAR(32) NOT NULL, # enough room for a MD5 hash
  access_level INT(2) NOT NULL,
  PRIMARY KEY  (id),
);

CREATE TABLE IF NOT EXISTS user_profiles (
  id INT(11) NOT NULL AUTO_INCREMENT,
  user_id INT NOT NULL,
  name VARCHAR(100) NOT NULL,
  phone VARCHAR(12) NOT NULL,
  mail VARCHAR(100) NOT NULL,
  address VARCHAR(100) NOT NULL,
  birth DATETIME NOT NULL,
  genere INT(1),
  photo VARCHAR(100),
  facebook VARCHAR(250),
  twitter VARCHAR(250),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY  (id),
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);


# I used this to alter column 'password' in table 'users'
/*
ALTER TABLE `test`.`users` 
CHANGE COLUMN `password` `password` VARCHAR(32) NOT NULL ;
*/