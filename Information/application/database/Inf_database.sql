INSERT INTO mysql.user(Host,User,Password) VALUES("localhost","information", password("infromation123"));
flush privileges;
CREATE DATABASE `information` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
GRANT select,insert,update,delete ON information.* TO information@localhost identified by 'information123';
USE information;
CREATE TABLE need(
      needInformation char(50) NOT NULL
);
CREATE TABLE information(
      I0 textarea NULL,
      I1 textarea NULL,
      I2 textarea NULL,
      I3 textarea NULL,
      I4 textarea NULL,
      I5 textarea NULL,
      I6 textarea NULL,
      I7 textarea NULL,
      I8 textarea NULL,
      I9 textarea NULL,
      I10 textarea NULL,
      I11 textarea NULL,
      I12 textarea NULL,
      I13 textarea NULL,
      I14 textarea NULL,
      I15 textarea NULL,
      I16 textarea NULL,
      I17 textarea NULL,
      I18 textarea NULL,
      I19 textarea NULL
);
