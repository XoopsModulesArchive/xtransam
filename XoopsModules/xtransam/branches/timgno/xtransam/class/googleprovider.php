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

if (!defined('XOOPS_ROOT_PATH')) {
	exit();
}
/**
 * Class for policies
 * @author Simon Roberts <onokazu@xoops.org>
 * @copyright copyright (c) 2009-2003 XOOPS.org
 * @package kernel
 */
class XtransamGoogleprovider extends XoopsObject
{

    function XtransamGoogleprovider($id = null)
    {
								
    }

}


/**
* XOOPS policies handler class.
* This class is responsible for providing data access mechanisms to the data source
* of XOOPS user class objects.
*
* @author  Simon Roberts <simon@chronolabs.org.au>
* @package kernel
*/
class XtransamGoogleproviderHandler extends XoopsPersistableObjectHandler
{

	var $url = "http://ajax.googleapis.com/ajax/services/language/translate";
	var $retrieve = array('start' => '<textarea name=utrans wrap=SOFT dir="ltr" rows=5 id=suggestion>',
						  'end' => '</textarea>');
	
    function __construct(&$db) 
    { }
	
	function translate($fromcode, $tocode, $value)
	{
		
		$response = $this->send_post($this->url, $value, $fromcode, $tocode, XOOPS_URL);
		if (preg_match("/{\"translatedText\":\"([^\"]+)\"/i", $response, $matches)) {
			return self::_unescapeUTF8EscapeSeq($this->clean($matches[1]));
		}
	}

	private function _unescapeUTF8EscapeSeq($str) {
		return preg_replace_callback("/\\\u([0-9a-f]{4})/i", create_function('$matches', 'return html_entity_decode(\'&#x\'.$matches[1].\';\', ENT_NOQUOTES, \'UTF-8\');'), $str);
	}

	private	function clean($var)
	{
		$var = htmlspecialchars_decode($var);
		$var = str_replace('% s', ' %s ', $var);
		$var = str_replace('% u', ' %u ', $var);
		$var = str_replace('% d', ' %d ', $var);
		if (strpos($var, 'text/css'))
			$var ='';
		return $var;
	}
	
	function send_post($url, $text, $from, $to, $referer = null)
	{
		$langpair = $from.'|'.$to;
		$text = $text;
		
		$params = array('http' =>
					  array(
					  'method' => 'POST',
					  'header'=>"Content-Type: application/x-www-form-urlencoded\r\n".
								"Referer: $referer\r\n",
					  "content"=> http_build_query(array('langpair'=>$langpair, 'q'=>$text, 'v'=>'2.0', 'key'=>$GLOBALS['xoopsModuleConfig']['google_api_key']))
					  )
				   );
		$ctx = stream_context_create($params);
		$fp = fopen($url, 'rb', false, $ctx);
		$response = stream_get_contents($fp);
		
		return $response;
	}
}
?>