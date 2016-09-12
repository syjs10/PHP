create database login;
use login;
create table login(
	id int unsigned not null auto_increment primary key,
	user varchar(20) not null,
	password varchar(32) not null,
	time timestamp not null default current_timestamp
);
