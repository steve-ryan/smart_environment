CREATE DATABASE IF NOT EXISTS smart_environment;
USE smart_environment;

CREATE TABLE IF NOT EXISTS clients(
client_id INT(11) NOT NULL AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
phone_no VARCHAR(20) NOT NULL,
email VARCHAR(255) DEFAULT NULL,
password VARCHAR(255) NOT NULL,
PRIMARY KEY(client_id)

);
CREATE TABLE IF NOT EXISTS seedlings(
seedling_id INT(11) NOT NULL AUTO_INCREMENT,
category VARCHAR(255) NOT NULL,
s_name VARCHAR(255) NOT NULL,
price INT(20) NOT NULL ,
path VARCHAR(80) NOT NULL,
description TEXT NOT NULL,
PRIMARY KEY(seedling_id)

);
 