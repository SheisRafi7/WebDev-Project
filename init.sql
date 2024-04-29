CREATE DATABASE designersden;
 use designersden;
CREATE TABLE users (
                       id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                       firstname VARCHAR(30) NOT NULL,
                       lastname VARCHAR(30) NOT NULL,
                       email VARCHAR(50) NOT NULL,
                       address VARCHAR(50),
                       date TIMESTAMP
);

CREATE TABLE clothing_items (
                                id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                productname VARCHAR(30) NOT NULL,
                                description VARCHAR(30) NOT NULL,
                                price DECIMAL(8,2) NOT NULL,
                                category VARCHAR(30)
);