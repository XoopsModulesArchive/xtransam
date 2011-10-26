CREATE TABLE `xtransam_files` (
	`id` INT(12) UNSIGNED NOT NULL AUTO_INCREMENT,         
	`ioid` INT(12) UNSIGNED DEFAULT '0',                   
	`filename` VARCHAR(255) DEFAULT NULL,                  
	`path` VARCHAR(255) DEFAULT NULL,                      
	`imported` TINYINT(2) DEFAULT '0',                     
	PRIMARY KEY (`id`)                                     
) ENGINE=INNODB CHARSET=utf8; 

CREATE TABLE `xtransam_iobase` (
	`id` int(12) unsigned NOT NULL AUTO_INCREMENT,
	`point` enum('core','module') DEFAULT 'module',
	`path` varchar(255) DEFAULT NULL,
	`languagefrom` smallint(6) DEFAULT '0',
	`languageto` smallint(6) DEFAULT '0',
	`total` int(12) DEFAULT '0',
	`done` int(12) DEFAULT '0',
	PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE `xtransam_languages` (
	`lang_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
	`providers` VARCHAR(500) DEFAULT 'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}',
	`name` varchar(255) DEFAULT NULL,
	`code` varchar(6) DEFAULT NULL,
	`foldername` varchar(255) DEFAULT NULL,
	PRIMARY KEY (`lang_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Albanian','sq',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Arabic','ar',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Bulgarian','bg',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Catalan','ca',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Chinese (Simplified)','zh-CN','schinese');
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Chinese (Traditional)','zh-TW','tchinese');
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Chinese (Simplified)','zh-CN','schinese_utf8');
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Chinese (Traditional)','zh-TW','tchinese_utf8');
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Croatian','hr',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Czech','cs',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Danish','da',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Dutch','nl',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','English','en',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Estonian','et',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Filipino','tl',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Finnish','fi',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','French','fr',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Galician','gl',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','German','de',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Greek','el',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Hebrew','iw',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Hindi','hi',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Hungarian','hu',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Indonesian','id',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Italian','it',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Japanese','ja',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Korean','ko',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Latvian','lv',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Lithuanian','lt',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Maltese','mt',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Norwegian','no',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Polish','pl',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Portuguese','pt',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Romanian','ro',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Russian','ru',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Serbian','sr',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Slovak','sk',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Slovenian','sl',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Spanish','es',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Swedish','sv',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Thai','th',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Turkish','tr',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Ukrainian','uk',NULL);
insert  into `xtransam_languages` (`lang_id`,`providers`,`name`,`code`,`foldername`) values (0,'a:2:{i:0;s:6:"google";i:1;s:8:"mymemory";}','Vietnamese','vi',NULL);

CREATE TABLE `xtransam_translator` (
	`id` INT(30) UNSIGNED NOT NULL AUTO_INCREMENT,       
	`ioid` INT(12) UNSIGNED DEFAULT '0',                 
	`fromid` SMALLINT(6) DEFAULT '0',                    
	`toid` SMALLINT(6) DEFAULT '0',                      
	`fileid` INT(12) DEFAULT '0',                        
	`linetype` ENUM('define') DEFAULT 'define',          
	`name` MEDIUMTEXT,                            
	`orginal` MEDIUMTEXT,                         
	`translation` MEDIUMTEXT,                     
	`replacestr` MEDIUMTEXT,                             
	`out` ENUM('1','0') DEFAULT '0',                     
	`line` INT(12) DEFAULT '0',      
	`auto` TINYINT(2) DEFAULT '0',
	`sm` ENUM('urlcode','uucode','base64','hex','open') DEFAULT 'urlcode',
	PRIMARY KEY (`id`)                                   
) ENGINE=INNODB DEFAULT CHARSET=utf8;     