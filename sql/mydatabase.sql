START TRANSACTION;

DROP DATABASE IF EXISTS mydatabase;

CREATE DATABASE IF NOT EXISTS mydatabase;
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_520_ci;

USE mydatabase;

CREATE TABLE users(
    user_id int(04) NOT NULL AUTO_INCREMENT,
    password varchar(20) NOT NULL,
    file BLOB NOT NULL,
    email varchar(40) NOT NULL,
    gender set('Male', 'Female') NOT NULL,
    region varchar(25) NOT NULL,
    language SET('English', 'French', 'Others') NOT NULL,
    
    PRIMARY KEY(user_id)
);

COMMIT;
