CREATE TABLE users(
	id INT NOT NULL AUTO_INCREMENT ,
	username VARCHAR(255) UNIQUE,
	email VARCHAR(255) UNIQUE,
	password VARCHAR(255),
	PRIMARY KEY(id)
);