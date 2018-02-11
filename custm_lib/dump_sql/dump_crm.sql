/*create database db_crm_casona;*/
USE db_crm_casona;
CREATE TABLE users_crm (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name_usr VARCHAR(80) NOT NULL,
    email_usr VARCHAR(80) NOT NULL,
    password_usr VARCHAR(80) NOT NULL,
    level_usr TINYINT NOT NULL
);
CREATE TABLE client_crm (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name_client VARCHAR(80) NOT NULL,
    email_client VARCHAR(80) NOT NULL,
    phone_client VARCHAR(22) NOT NULL
);
CREATE TABLE client_byuser (
    name_usr VARCHAR(80) NOT NULL
);
CREATE TABLE level_byuser (
    level_usr TINYINT NOT NULL,
    level_name VARCHAR(80),
    level_active BOOLEAN NOT NULL
);
