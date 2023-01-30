CREATE TABLE sellList(
	id INT NOT NULL AUTO_INCREMENT,
	Name VARCHAR(255),
	Phone VARCHAR(15),
	Address VARCHAR(255),
	Reference VARCHAR(255),
	Bookid INT,
	Submit VARCHAR(10),
	PRIMARY KEY(id),
	FOREIGN KEY(Bookid) REFERENCES bookproduct(id)
);
DROP TABLE sellList