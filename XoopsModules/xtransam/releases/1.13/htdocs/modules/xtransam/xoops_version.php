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
if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$dirname = basename( dirname( __FILE__ ) ) ;

$modversion['name'] = _MI_XTRANSAM_XTRANSAM_NAME;
$modversion['version'] = 1.13;
$modversion['description'] = _MI_XTRANSAM_XTRANSAM_DESC;
$modversion['author'] = "Wishcraft";
$modversion['credits'] = "The XOOPS Project, Wishcraft, Timgno";
$modversion['help'] = "page=help";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 1;
$modversion['status']  = "Beta 2";
$modversion['image'] = "images/xtransam_slogo.png";
$modversion['dirname'] = "$dirname";

$modversion['dirmoduleadmin'] = 'Frameworks/moduleclasses';
$modversion['icons16'] = 'Frameworks/moduleclasses/icons/16';
$modversion['icons32'] = 'Frameworks/moduleclasses/icons/32';

$modversion['release_info'] = "Beta 1 30/08/2011";
$modversion['release_file'] = XOOPS_URL."/modules/".$dirname."/changelog.txt";
$modversion['release_date'] = "2011/08/30";

$modversion['author_realname'] = "Simon Antony Roberts";
$modversion['author_website_url'] = "http://www.chronolabs.org.au";
$modversion['author_website_name'] = "Chronolabs Australia";
$modversion['author_email'] = "simon@chronolabs.coop";
$modversion['demo_site_url'] = "Chronolabs Australia";
$modversion['demo_site_name'] = "";
$modversion['support_site_url'] = "http://www.chronolabs.org.au/forums/viewforum.php?forum=30";
$modversion['support_site_name'] = "Chronolabs";
$modversion['submit_bug'] = "http://www.chronolabs.org.au/forums/viewforum.php?forum=30";
$modversion['submit_feature'] = "http://www.chronolabs.org.au/forums/viewforum.php?forum=30";
$modversion['usenet_group'] = "sci.chronolabs";
$modversion['maillist_announcements'] = "";
$modversion['maillist_bugs'] = "";
$modversion['maillist_features'] = "";

// Admin things
$modversion['system_menu'] = 1;
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

$modversion['onUpdate'] = "include/update.php";

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
// $modversion['sqlfile']['postgresql'] = "sql/pgsql.sql";
// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "xtransam_files";
$modversion['tables'][1] = "xtransam_iobase";
$modversion['tables'][2] = "xtransam_languages";
$modversion['tables'][3] = "xtransam_translator";

// Menu
$modversion['hasMain'] = 0;
$i=0;
$modversion['config'][$i]['name'] = 'store_method';
$modversion['config'][$i]['title'] = '_MI_XTRANSAM_STORE_METHOD';
$modversion['config'][$i]['description'] = '_MI_XTRANSAM_STORE_METHOD_DESC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'urlcode';
$modversion['config'][$i]['options'] = array(	_MI_XTRANSAM_STORE_METHOD_URLENCODE => 'urlcode',
												_MI_XTRANSAM_STORE_METHOD_UUCODE => 'uucode',
												_MI_XTRANSAM_STORE_METHOD_BASE64 => 'base64',
												_MI_XTRANSAM_STORE_METHOD_HEX => 'hex',
												_MI_XTRANSAM_STORE_METHOD_OPEN => 'open'				); 
$i++;
$modversion['config'][$i]['name'] = 'provider';
$modversion['config'][$i]['title'] = '_MI_XTRANSAM_PROVIDER';
$modversion['config'][$i]['description'] = '_MI_XTRANSAM_PROVIDER_DESC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'google';
$modversion['config'][$i]['options'] = array(	_MI_XTRANSAM_PROVIDER_REST_GOOGLE => 'google',
												_MI_XTRANSAM_PROVIDER_REST_MYMEMORY => 'mymemory'		); 

$i++;
$modversion['config'][$i]['name'] = 'google_api_key';
$modversion['config'][$i]['title'] = "_MI_XTRANSAM_GOOGLE_APIKEY";
$modversion['config'][$i]['description'] = "_MI_XTRANSAM_GOOGLE_APIKEY_DESC";
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'google_chars_seconds';
$modversion['config'][$i]['title'] = "_MI_XTRANSAM_GOOGLE_CHAR_SECONDS";
$modversion['config'][$i]['description'] = "_MI_XTRANSAM_GOOGLE_CHAR_SECONDS_DESC";
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = '100';

$i++;
$modversion['config'][$i]['name'] = 'google_chars_day';
$modversion['config'][$i]['title'] = "_MI_XTRANSAM_GOOGLE_CHAR_DAY";
$modversion['config'][$i]['description'] = "_MI_XTRANSAM_GOOGLE_CHAR_DAY_DESC";
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = '2500000';

$i++;
$modversion['config'][$i]['name'] = 'php_execute_for';
$modversion['config'][$i]['title'] = "_MI_XTRANSAM_PHP_EXECUTE_FOR";
$modversion['config'][$i]['description'] = "_MI_XTRANSAM_PHP_EXECUTE_FOR_DESC";
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 60*13*4;

$i++;
$modversion['config'][$i]['name'] = 'wait_in_case';
$modversion['config'][$i]['title'] = "_MI_XTRANSAM_WAIT_IN_CASE";
$modversion['config'][$i]['description'] = "_MI_XTRANSAM_WAIT_IN_CASE_DESC";
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 60*13;

$i++;
$modversion['config'][$i]['name'] = 'micro_sec_diff';
$modversion['config'][$i]['title'] = "_MI_XTRANSAM_MICROTIME_SECONDS_DIFF";
$modversion['config'][$i]['description'] = "_MI_XTRANSAM_MICROTIME_SECONDS_DIFF_DESC";
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = '1';

$i++;
$modversion['config'][$i]['name'] = 'micro_day_diff';
$modversion['config'][$i]['title'] = "_MI_XTRANSAM_MICROTIME_DAY_DIFF";
$modversion['config'][$i]['description'] = "_MI_XTRANSAM_MICROTIME_DAY_DIFF";
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 60*60*24;

?>