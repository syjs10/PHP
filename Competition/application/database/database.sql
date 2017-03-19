INSERT INTO mysql.user(Host,User,Password) VALUES("localhost","competition",password("competition123"));
flush privileges;
CREATE DATABASE `competition` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
GRANT select,insert,update,delete ON competition.* TO competition@localhost identified by 'competition123';
USE competition;
CREATE TABLE student(
      id int(4) NOT NULL PRIMARY KEY auto_increment,
      name char(20) NOT NULL,
      gender char(4) NOT NULL,
      number char(9) NOT NULL,
      class char(20) NOT NULL,
      qq char(20) NOT NULL,
      phone char(11) NOT NULL,
      object char(20) NOT NULL
);
