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

  if (isset($_GET)) {
    foreach ($_GET as $k => $v) {
      ${$k} = $v;
    }
  }

  if (isset($_POST)) {
    foreach ($_POST as $k => $v) {
      ${$k} = $v;
    }
  }


ini_set("max_execution_time", "300");  

switch ($op){
case "deletebuffer":
	$sql[0] = "DELETE FROM ".$xoopsDB->prefix('xtransam_files')." WHERE ioid = $id";
	$sql[1] = "DELETE FROM ".$xoopsDB->prefix('xtransam_translator')." WHERE ioid = $id";
	$sql[2] = "DELETE FROM ".$xoopsDB->prefix('xtransam_iobase')." WHERE id = $id";	
	
	foreach($sql as $fquestion)
		$xoopsDB->queryF($fquestion);
		
	redirect_header("index.php", 4, _XT_IODELETED);
	break;
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
			$lang->setVar('provider', $provider[$key]);			
			@$lang_handler->insert($lang);
		}	
	}
	redirect_header("index.php?op=languages",2,_XT_LANGSAVEOK);
	break;
case "languages":
	xoops_cp_header();
	adminMenu(3);
	languagesForm_display();
	footer_adminMenu();
	xoops_cp_footer();

	break;
case "export":
	global $xoopsUser;
	
	$io_handler = xoops_getmodulehandler('iobase', 'xtransam');
	$io = $io_handler->get($id);
	$trans_handler = xoops_getmodulehandler('translator', 'xtransam');
	$lang_handler = xoops_getmodulehandler('languages', 'xtransam');	
	$files_handler = xoops_getmodulehandler('files', 'xtransam');		
	$criteria = new CriteriaCompo(new Criteria('ioid', $io->getVar('id')));
	$files = $files_handler->getObjects($criteria);
	
	$from_folder = $lang_handler->folder($io->getvar('languagefrom'));
	$to_folder = $lang_handler->folder($io->getvar('languageto'));
	
	foreach($files as $file) {
		$path = explode('/', $file->getVar('path'));

		foreach($path as $key => $value)
			if (strtolower($value) == strtolower($from_folder)) {
				$path[$key] = $to_folder;
			}

		//$wpath = implode('/', $path).'/';
		$wpath = implode(DIRECTORY_SEPARATOR, $path);
		mkdir($wpath, 0777);
		
		if($wpath!=$file->getVar('path')){
			$bfile = file($file->getVar('path').$file->getVar('filename'));
			$criteria = new CriteriaCompo(new Criteria('ioid', $io->getVar('id')));
			$criteria->add(new Criteria('fileid', $file->getVar('id')));
			$trans = $trans_handler->getObjects($criteria);
                        // Changed & Added by TXMod Xoops
                        $bfile[1] = "\n// Translation done by xtransam & ".$xoopsUser->uname()." TXMod Xoops - ".date('Y-m-d H:i')."\n\n";
			
                        foreach($trans as $tran) {
				$search = xtransam_convert_decode($tran->getVar('replacestr'), $tran->getVar('sm'));
				$name = xtransam_convert_decode($tran->getVar('name'), $tran->getVar('sm'));
				$translation = xtransam_convert_decode($tran->getVar('translation'), $tran->getVar('sm'));

				// Changed & Added by TXMod Xoops
				//include_once '../include/charset_utf-8.php';
				//$translation = preg_replace($search, $replace, $translation);
                                $translation = str_replace('"', '\"', $translation);
                                $translation = str_replace('\"', "'", $translation);
				$translation = str_replace('="', "='", $translation);
				$translation = str_replace('">', "'>", $translation);
				$translation = str_replace('È', 'E&#39;', $translation);
				$translation = str_replace('ì', '&#236;', $translation);
				$translation = str_replace('ò', '&#242;', $translation);
				$translation = str_replace('è', '&#232;', $translation);
				$translation = str_replace('ù', '&#249;', $translation);
				$translation = str_replace('à', '&#224;', $translation); 
                                $translation = str_replace('% S', '%s', $translation);
                                $translation = str_replace('%s  ', '%s ', $translation);
                                $translation = str_replace('%s "', '%s"', $translation);
                                $translation = str_replace(' / ', '/', $translation);
                                
				$replace = 'define("'.$name.'", "'.$translation.'");';
				$bfile[$tran->getVar('line')] = str_replace($search, $replace, $bfile[$tran->getVar('line')]);	
			}
			@makeWritable($wpath, true);
			if (file_exists($wpath.$file->getVar('filename')))
				unlink($wpath.$file->getVar('filename'));
			$file = @fopen($wpath.$file->getVar('filename'), 'w');
			$buffer = implode('', $bfile);
			fwrite($file, $buffer, strlen($buffer));
			fclose($file);
		}
	}
	// Added by TXMod Xoops
	if (file_exists($indexFile = XOOPS_ROOT_PATH."/modules/xtransam/language/index.html"))
	   copy($indexFile, $wpath."index.html");

	redirect_header("index.php?op=bbs",2,_XT_EXPORTCOMPLETE);
	break;
case "save":
	$trans_handler = xoops_getmodulehandler('translator', 'xtransam');
	foreach($trans as $key => $value) {
		$tran = $trans_handler->get($key);
		$tran->setVar('translation', xtransam_convert_encode($value, $tran->getVar('sm')));
		$trans_handler->insert($tran);
	}
	redirect_header("index.php?op=manage&id=$id&fileid=$fileid",2,_XT_SAVECOMPLETE);
	break;
case "manage":
	xoops_cp_header();
	adminMenu(2);
	managerForm_display($id, $fileid);
	footer_adminMenu();
	xoops_cp_footer();

	break;
	
case "analysis":
	$io_handler = xoops_getmodulehandler('iobase', 'xtransam');
	$files_handler = xoops_getmodulehandler('files', 'xtransam');
	$io = $io_handler->get($id);
	@$files_handler->analysepath($io);
	redirect_header("index.php?op=bbs",2,_XT_ANLYSISCOMPLETE);
	break;

case "import":
	$io_handler = xoops_getmodulehandler('iobase', 'xtransam');
	$files_handler = xoops_getmodulehandler('files', 'xtransam');
	$io = $io_handler->get($id);
	@$files_handler->importfiles($io);
	redirect_header("index.php?op=bbs",2,_XT_IMPORTCOMPLETE);
	break;
	
case "translate":
	$io_handler = xoops_getmodulehandler('iobase', 'xtransam');
	$io = $io_handler->get($id);
	$trans_handler = xoops_getmodulehandler('translator', 'xtransam');
	$lang_handler = xoops_getmodulehandler('languages', 'xtransam');	
	$criteria = new CriteriaCompo(new Criteria('ioid', $io->getVar('id')));
	if ($trans_handler->getCount($criteria)>0) {
		$trans = $trans_handler->getObjects($criteria);
		$start = time();
		foreach($trans as $tran) {
			if ($tran->isempty()){
				$from = $lang_handler->code($io->getVar('languagefrom'));
				$to = $lang_handler->code($io->getVar('languageto'));
				$provider = $lang_handler->provider($tran->getVar('toid'));
				if (strlen($provider)>0) {
					$provider_handler = xoops_getmodulehandler($provider.'provider', 'xtransam');	
					$translation = $provider_handler->translate($from,$to, xtransam_convert_decode($tran->getVar('orginal'), $tran->getVar('sm')));
					$tran->setVar('translation', xtransam_convert_encode($translation, $tran->getVar('sm')));
					if (strlen($translation)>0)
						$tran->setVar('auto', 1);
					else
						$tran->setVar('auto', 0);

					$trans_handler->insert($tran);
				}
				if ($start+28<time())
				{	
					$restart++;
					redirect_header("index.php?op=translate&id=$id&restart=$restart",2,sprintf(_XT_30SECONDSCONTINUING, $restart));			
				}
			}
		}
	}
	redirect_header("index.php?op=bbs",2,_XT_TRANSLATIONCOMPLETE);
	break;
	
case "languages":

	break;
case "bbs":

	xoops_cp_header();
	adminMenu(2);
	translationForm_display(false);
	footer_adminMenu();
	xoops_cp_footer();

	break;
	
case "wizard":
default:
	
	xoops_cp_header();
	adminMenu(1);
	wizardForm_display($step);
	translationForm_display(true);	
	footer_adminMenu();
	xoops_cp_footer();
	break;	
	
}
?>