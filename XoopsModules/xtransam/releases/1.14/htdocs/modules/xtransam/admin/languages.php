<?php
// $Autho: wishcraft $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2009 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
//  --  Author: Simon Roberts (simon@chronolabs.org.au)                   -- //
//  ------------------------------------------------------------------------ //
define ("_CHARSET","UTF-8");
define ("_CHARSET_ISO","ISO-8859-1");

include 'admin_header.php';
include_once '../include/forms.php';

error_reporting(E_ALL);
global $xoopsDB, $xoopsModuleConfig;

$op = isset($_REQUEST['op'])?$_REQUEST['op']:'languages'; 

switch ($op){
case "save-languages":
	$lang_handler = xoops_getmodulehandler('languages', 'xtransam');	
	foreach($id as $key => $value)
	{
		switch($value){
		case "new":
			$lang = $lang_handler->create();			
			break;
		default:
			$lang = $lang_handler->get($value);
		}
		
		if (!empty($name[$key])&&!empty($code[$key])) {
			$lang->setVar('name', $name[$key]);
			$lang->setVar('code', $code[$key]);
			$lang->setVar('foldername', $folder[$key]);			
			$lang->setVar('providers', $providers[$key]);			
			@$lang_handler->insert($lang);
		}	
	}
	redirect_header("index.php?op=languages",2,_AM_XTRANSAM_LANGSAVEOK);
	break;

case "save":
	$trans_handler = xoops_getmodulehandler('translator', 'xtransam');
	foreach($trans as $key => $value) {
		$tran = $trans_handler->get($key);
		$tran->setVar('translation', xtransam_convert_encode($value, $tran->getVar('sm')));
		$trans_handler->insert($tran);
	}
	redirect_header("index.php?op=manage&id=$id&fileid=$fileid",2,_AM_XTRANSAM_SAVECOMPLETE);
	break;	
case "languages":
default:
	xoops_cp_header();
	adminMenu(3);
	languagesForm_display();
	footer_adminMenu();
	xoops_cp_footer();
	break;		
}
?>