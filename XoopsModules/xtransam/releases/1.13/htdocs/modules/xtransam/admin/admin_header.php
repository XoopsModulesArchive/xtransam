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

include_once (dirname(dirname(dirname(dirname(__FILE__)))). DIRECTORY_SEPARATOR .'mainfile.php');
include_once (dirname(dirname(dirname(dirname(__FILE__)))).DIRECTORY_SEPARATOR.'include'.DIRECTORY_SEPARATOR.'cp_header.php');

$GLOBALS['myts'] = MyTextSanitizer::getInstance();

$module_handler = xoops_gethandler('module');
$config_handler = xoops_gethandler('config');
$GLOBALS['xoopsModule'] = $module_handler->getByDirname('xtransam');
$GLOBALS['xoopsModuleConfig'] = $config_handler->getConfigList($GLOBALS['xoopsModule']->getVar('mid')); 

set_time_limit($GLOBALS['xoopsModuleConfig']['php_execute_for']);

xoops_load('pagenav');	
xoops_load('xoopsmailer');
xoops_load('xoopstree');
xoops_load('xoopslists');
xoops_load('xoopsformloader');

include '../include/functions.php';

if ( file_exists($GLOBALS['xoops']->path('/Frameworks/moduleclasses/moduleadmin/moduleadmin.php'))){
        include_once $GLOBALS['xoops']->path('/Frameworks/moduleclasses/moduleadmin/moduleadmin.php');
        //return true;
    }else{
        echo xoops_error("Error: You don't use the Frameworks \"admin module\". Please install this Frameworks");
        //return false;
    }
$module_handler =& xoops_gethandler('module');
$xoopsModule = & $module_handler->getByDirname(basename(dirname(dirname( __FILE__ ) )));
$moduleInfo =& $module_handler->get($xoopsModule->getVar('mid'));
$pathImageIcon = XOOPS_URL .'/'. $moduleInfo->getInfo('icons16');
$pathImageAdmin = XOOPS_URL .'/'. $moduleInfo->getInfo('icons32');

$myts =& MyTextSanitizer::getInstance();

if ($xoopsUser) {
    $moduleperm_handler =& xoops_gethandler('groupperm');
    if (!$moduleperm_handler->checkRight('module_admin', $xoopsModule->getVar( 'mid' ), $xoopsUser->getGroups())) {
        redirect_header(XOOPS_URL, 1, _NOPERM);
        exit();
    }
} else {
    redirect_header(XOOPS_URL . "/user.php", 1, _NOPERM);
    exit();
}

if (!isset($xoopsTpl) || !is_object($xoopsTpl)) {
	include_once(XOOPS_ROOT_PATH."/class/template.php");
	$xoopsTpl = new XoopsTpl();
}

$xoopsTpl->assign('pathImageIcon', $pathImageIcon);
//xoops_cp_header();

$traslactionsHandler =& xoops_getModuleHandler('iobase', 'xtransam');

?>