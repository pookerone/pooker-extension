CREATE DATABASE IF NOT EXISTS pooker;
USE pooker;
CREATE TABLE IF NOT EXISTS useremail (
	user_id		INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name		varchar(250) not null,
	mail		varchar(250) not null
);

