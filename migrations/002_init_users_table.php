<?php

$query = 'CREATE TABLE users (
	id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	role_id INTEGER UNSIGNED NOT NULL,
	name VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL UNIQUE,
	password VARCHAR(50) NOT NULL,
	created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
	modified_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
	last_visit TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (role_id) REFERENCES roles(id)
)';

mysqli_query($db, $query);

$query = 'INSERT INTO users (role_id, name, email, password)
    		VALUES (1, "admin", "admin@mail.com", "21232f297a57a5a743894a0e4a801fc3"),
    		VALUES (2, "test", "test@mail.com", "098f6bcd4621d373cade4e832627b4f6")';
mysqli_query($db, $query);
