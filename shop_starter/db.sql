 CREATE TABLE users(
 	id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    password VARCHAR(255),
    email VARCHAR(255),
    status BOOLEAN,
    created_date DATETIME
 );



CREATE TABLE category(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255), 
    details VARCHAR(255)
);

INSERT INTO CATEGORY 
VALUES
('','Home Improvement','Home Improvement and Appliances'),
('','Toys','Childrens Toys'),
('','Tools','Toys for the big boys');

CREATE TABLE items(
	id INT PRIMARY KEY AUTO_INCREMENT,
    category_id INT,
    name VARCHAR(255),
    details VARCHAR(255),
    price DOUBLE,
    image VARCHAR(255),
    status BOOLEAN,
    created_date DATETIME,
    FOREIGN KEY (category_id) REFERENCES Category(id)
);

CREATE TABLE orders(
	id INT PRIMARY KEY AUTO_INCREMENT,
    count INT,
    item_id INT,
    user_id INT,
    order_date DATETIME,
    status BOOLEAN,
    FOREIGN KEY (item_id) REFERENCES Items(id),
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

CREATE TABLE BILLING(
    id INT PRIMARY KEY AUTO_INCREMENT,
	order_id INT,
    user_id INT,
    firstname VARCHAR(255), 
    lastname VARCHAR(255),
    address1 VARCHAR(255),
    city VARCHAR(20),
    zip VARCHAR(20),
    telephone VARCHAR(255),
    billing_date DATETIME,
    status BOOLEAN,
    FOREIGN KEY (order_id) REFERENCES Orders(id),
    FOREIGN KEY (user_id) REFERENCES Users(id)
)