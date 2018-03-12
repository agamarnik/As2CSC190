DROP DATABASE IF EXISTS db_posts;
CREATE DATABASE db_posts;
USE db_posts;
CREATE TABLE tbl_posts(
	author varchar(255) primary key,
	post varchar(1024),
	ts timestamp 
	/*real_name varchar(1024)*/
);
INSERT INTO tbl_posts(author,post) VALUES("dr.evil","Hi I'm here");
