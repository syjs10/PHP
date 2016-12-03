INSERT INTO mysql.user(Host,User,Password) VALUES("localhost","information",password("information123"));
flush privileges;
CREATE DATABASE `information` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
GRANT CREATE,select,insert,update,delete,DROP ON information.* TO information@localhost identified by 'information123';
USE information;
CREATE TABLE need(
      id int(4) NOT NULL PRIMARY KEY auto_increment,
      inf char(50) NOT NULL
);
