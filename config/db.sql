CREATE DATABASE IF NOT EXISTS RMS;
use RMS;

CREATE TABLE IF NOT EXISTS roles(id int(3) PRIMARY KEY,role_name VARCHAR(20) NOT NULL);


CREATE TABLE IF NOT EXISTS users(id int(3) primary key,userid varchar(20) NOT NULL,fname varchar(20) NOT NULL,lname varchar(20) NOT NULL,pass varchar(20) NOT NULL,role_id int(3) REFERENCES roles(id));

INSERT INTO roles values(1,'manager'),(2,'waiter'),(3,'chef');

INSERT INTO users values(1,"pravin0607","Pravin","adhav",'12345','1');

