
CREATE TABLE `xtransam_files` (                    
  `id` INT(12) UNSIGNED NOT NULL AUTO_INCREMENT,        
  `ioid` INT(12) UNSIGNED DEFAULT '0',                  
  `filename` VARCHAR(255) DEFAULT NULL,                 
  `path` VARCHAR(255) DEFAULT NULL,                     
  `imported` TINYINT(2) DEFAULT '0',                    
  PRIMARY KEY (`id`)                                    
) ENGINE=MYISAM CHARSET=utf8;


CREATE TABLE `xtransam_iobase` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `point` enum('core','module') DEFAULT 'module',
  `path` varchar(255) DEFAULT NULL,
  `languagefrom` smallint(6) DEFAULT '0',
  `languageto` smallint(6) DEFAULT '0',
  `total` int(12) DEFAULT '0',
  `done` int(12) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `xtransam_languages` (
  `lang_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `provider` enum('google') DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(6) DEFAULT NULL,
  `foldername` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (1,'google','Albanian','sq',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (2,'google','Arabic','ar',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (3,'google','Bulgarian','bg',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (4,'google','Catalan','ca',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (5,'google','Chinese (Simplified)','zh-CN','schinese_utf8');
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (6,'google','Chinese (Traditional)','zh-TW','tchinese_utf8');
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (7,'google','Croatian','hr',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (8,'google','Czech','cs',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (9,'google','Danish','da',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (10,'google','Dutch','nl',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (11,'google','English','en',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (12,'google','Estonian','et',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (13,'google','Filipino','tl',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (14,'google','Finnish','fi',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (15,'google','French','fr',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (16,'google','Galician','gl',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (17,'google','German','de',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (18,'google','Greek','el',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (19,'google','Hebrew','iw',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (20,NULL,'Hindi','hi',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (21,'google','Hungarian','hu',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (22,'google','Indonesian','id',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (23,'google','Italian','it',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (24,'google','Japanese','ja',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (25,'google','Korean','ko',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (26,'google','Latvian','lv',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (27,'google','Lithuanian','lt',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (28,'google','Maltese','mt',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (29,'google','Norwegian','no',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (30,'google','Polish','pl',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (31,'google','Portuguese','pt',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (32,'google','Romanian','ro',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (33,'google','Russian','ru',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (34,'google','Serbian','sr',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (35,'google','Slovak','sk',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (36,'google','Slovenian','sl',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (37,'google','Spanish','es',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (38,'google','Swedish','sv',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (39,'google','Thai','th',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (40,'google','Turkish','tr',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (41,'google','Ukrainian','uk',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (42,'google','Vietnamese','vi',NULL);

CREATE TABLE `xtransam_translator` (
	`id` INT(30) UNSIGNED NOT NULL AUTO_INCREMENT,       
	`ioid` INT(12) UNSIGNED DEFAULT '0',                 
	`fromid` SMALLINT(6) DEFAULT '0',                    
	`toid` SMALLINT(6) DEFAULT '0',                      
	`fileid` INT(12) DEFAULT '0',                        
	`linetype` ENUM('define') DEFAULT 'define',          
	`hexval_name` MEDIUMTEXT,                            
	`hexval_orginal` MEDIUMTEXT,                         
	`hexval_translation` MEDIUMTEXT,                     
	`replacestr` MEDIUMTEXT,                             
	`out` ENUM('1','0') DEFAULT '0',                     
	`line` INT(12) DEFAULT '0',      
	`auto` TINYINT(2) DEFAULT '0', 
	PRIMARY KEY (`id`)                                   
)  ENGINE=MyISAM DEFAULT CHARSET=utf8;



