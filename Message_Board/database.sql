CREATE DATABASE guestbook DEFAULT CHARSET utf8 COLLATE utf8_general_ci;
GRANT select,insert,update,delete ON guestbook.* TO guestbook@localhost identified by 'guestbook123';

USE guestbook;
SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for guestbook
-- ----------------------------
DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE guestbook (
	id int(10) unsigned NOT NULL AUTO_INCREMENT,
	nickname char(16) NOT NULL DEFAULT '',
	email varchar(60) DEFAULT NULL,
	content text NOT NULL,
	createtime datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	reply text,
	replytime datetime DEFAULT NULL,
	status tinyint(1) unsigned DEFAULT '0',
	PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;

CREATE TABLE user(
	uid INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nickname varchar(30) NOT NULL,
	password varchar(32) NOT NULL,
	createtime INT(10) unsigned NOT NULL,
	level TINYINT(1) unsigned DEFAULT '0'
) ENGINE=MyISAM CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO user(nickname, password, createtime, level)    
VALUES( 'shiyanlou','21232f297a57a5a743894a0e4a801fc3', 1423018916, 9);