INSERT INTO mysql.user(Host,User,Password) VALUES("localhost","mrwho",password("mrwho123"));
flush privileges;
CREATE DATABASE `mrwho` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
GRANT select,insert,update,delete ON mrwho.* TO mrwho@localhost identified by 'mrwho123';
USE mrwho;
CREATE TABLE student(
      id int(4) NOT NULL PRIMARY KEY auto_increment,
      name char(20) NOT NULL,
      gender char(4) NOT NULL,
      number char(8) NOT NULL,
      class char(20) NOT NULL,
      phone char(11) NOT NULL
);
