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

insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Albanian','sq',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Arabic','ar',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Bulgarian','bg',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Catalan','ca',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Chinese (Simplified)','zh-CN','schinese');
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Chinese (Traditional)','zh-TW','tchinese')
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Chinese (Simplified)','zh-CN','schinese_utf8');
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Chinese (Traditional)','zh-TW','tchinese_utf8');
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Croatian','hr',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Czech','cs',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Danish','da',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Dutch','nl',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','English','en',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Estonian','et',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Filipino','tl',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Finnish','fi',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','French','fr',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Galician','gl',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','German','de',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Greek','el',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Hebrew','iw',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,NULL,'Hindi','hi',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Hungarian','hu',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Indonesian','id',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Italian','it',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Japanese','ja',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Korean','ko',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Latvian','lv',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Lithuanian','lt',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Maltese','mt',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Norwegian','no',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Polish','pl',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Portuguese','pt',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Romanian','ro',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Russian','ru',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Serbian','sr',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Slovak','sk',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Slovenian','sl',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Spanish','es',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Swedish','sv',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Thai','th',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Turkish','tr',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Ukrainian','uk',NULL);
insert  into `xtransam_languages` (`lang_id`,`provider`,`name`,`code`,`foldername`) values (0,'google','Vietnamese','vi',NULL);



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



