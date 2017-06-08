<?php

$query = 'CREATE TABLE roles (
	id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	alias VARCHAR(30) NOT NULL UNIQUE
)';
mysqli_query($db, $query);

$query = 'INSERT INTO roles (name, alias)
    		VALUES ("Администратор", "admin"),
    		VALUES ("Зарегистрированный", "registered")';
mysqli_query($db, $query);