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

define("_MI_XTRANSAM_XTRANSAM_NAME", "Traduttore lingua");
define("_MI_XTRANSAM_XTRANSAM_DESC", "Language Translator &Atilde;&uml; usato per tradurre il file di lingua in xoops. &lt;br&gt; &lt;em&gt;Scritta in memoria di John Milner (Microsoft Australia)&lt;/em&gt;");
	
define("_MI_XTRANSAM_ADMENU1", "Dashboard");
define("_MI_XTRANSAM_ADMENU2", "Traduzione guidata");
define("_MI_XTRANSAM_ADMENU3", "Traduzione");
define("_MI_XTRANSAM_ADMENU4", "Lingua Matrix");
define("_MI_XTRANSAM_ADMENU5", "Chi XTransam");
	
	// preferences
define("_MI_XTRANSAM_STORE_METHOD", "Metodo di stoccaggio");
define("_MI_XTRANSAM_STORE_METHOD_DESC", "Questo &Atilde;&uml; il metodo utilizzato con i database per memorizzare la lingua");
define("_MI_XTRANSAM_STORE_METHOD_URLENCODE", "URL Codice metodo store");
define("_MI_XTRANSAM_STORE_METHOD_UUCODE", "UU Codice Conservare Metodo");
define("_MI_XTRANSAM_STORE_METHOD_BASE64", "Codice base64 Metodo Conservare");
define("_MI_XTRANSAM_STORE_METHOD_HEX", "Conservare Metodo esadecimale");
define("_MI_XTRANSAM_STORE_METHOD_OPEN", "Conservare metodo aperto");
define("_MI_XTRANSAM_PROVIDER", "Traduzione provider da utilizzare");
define("_MI_XTRANSAM_PROVIDER_DESC", "Si tratta di un&amp;#39;opzione fornitore di traduzione in cui &Atilde;&uml; possibile selezionare l&amp;#39;API e il metodo da usare");
define("_MI_XTRANSAM_PROVIDER_REST_GOOGLE", "API di Google");
define("_MI_XTRANSAM_PROVIDER_OAUTH2_GOOGLE", "OAuth 2,0 API di Google di accesso");
define("_MI_XTRANSAM_PROVIDER_REST_MYMEMORY", "API MyMemory");
define("_MI_XTRANSAM_GOOGLE_APIKEY", "La vostra chiave API per Google API s  &amp;#39;");
define("_MI_XTRANSAM_GOOGLE_APIKEY_DESC", "Questa &Atilde;&uml; la tua chiave API per Google API &Atilde;&uml; possibile ottenere uno da &lt;a href=&quot;https://code.google.com/apis/console/?api=translate&amp;pli=1#welcome&quot; target=&quot;_blank&quot;&gt;API di Google iscrizione&lt;/a&gt;");
define("_MI_XTRANSAM_GOOGLE_CHAR_SECONDS", "I tuoi personaggi per utente al secondo su Google Traduttore Lingua API");
define("_MI_XTRANSAM_GOOGLE_CHAR_SECONDS_DESC", "Questo &Atilde;&uml; il numero di caratteri vostro  &amp;#39;Per-User Limit &amp;#39; &Atilde;&uml; impostato su: &lt;a href=&quot;https://code.google.com/apis/console/?api=translate&amp;pli=1&quot; target=&quot;_blank&quot;&gt;informazioni sulle quote di google&lt;/a&gt;");
define("_MI_XTRANSAM_GOOGLE_CHAR_DAY", "I tuoi personaggi limite di cortesia al giorno su Google Traduttore Lingua API");
define("_MI_XTRANSAM_GOOGLE_CHAR_DAY_DESC", "Questo &Atilde;&uml; il numero di caratteri &amp;#39;Limite di cortesia &amp;#39; tuo  &Atilde;&uml; impostato su: &lt;a href=&quot;https://code.google.com/apis/console/?api=translate&amp;pli=1&quot; target=&quot;_blank&quot;&gt;informazioni sulle quote di google&lt;/a&gt;");
define("_MI_XTRANSAM_PHP_EXECUTE_FOR", "Numero di secondi uno script PHP in questo modulo verranno eseguiti per");
define("_MI_XTRANSAM_PHP_EXECUTE_FOR_DESC", "Questo &Atilde;&uml; il numero totale di secondi uno script PHP in questo modulo verr&Atilde;&nbsp; eseguito per");
define("_MI_XTRANSAM_WAIT_IN_CASE", "Secondi di attesa per lo slot limite per aprire");
define("_MI_XTRANSAM_WAIT_IN_CASE_DESC", "Questo &Atilde;&uml; il numero di secondi la routine traduzione aspetter&Atilde;&nbsp; di vedere se si aprir&Atilde;&nbsp; uno slot per ulteriori traduzione.");
define("_MI_XTRANSAM_MICROTIME_SECONDS_DIFF", "Differenza secondi per il bilanciamento di slot");
define("_MI_XTRANSAM_MICROTIME_SECONDS_DIFF_DESC", "Questo &Atilde;&uml; il numero di secondi per una differenza elemento della cache storico con limitazione di CompAir essere quello per la rimozione e l&amp;#39;apertura di uno slot traduzione sulla seconda limiti secondo");
define("_MI_XTRANSAM_MICROTIME_DAY_DIFF", "Secondi in un giorno per il bilanciamento differenza di slot");
define("_MI_XTRANSAM_MICROTIME_DAY_DIFF_DESC", "Questo &Atilde;&uml; il numero di secondi per una differenza elemento della cache storico con limitazione di CompAir essere quello per la rimozione e l&amp;#39;apertura di uno slot di traduzione su limiti giornalieri");
	
	// Version 1.18
	// Preferences
define("_MI_XTRANSAM_PROVIDER_REST_BING", "API Microsoft Bing");
define("_MI_XTRANSAM_BING_APIKEY", "Il tuo numero di applicazioni per Microsoft Bing  &amp;#39;s API");
define("_MI_XTRANSAM_BING_APIKEY_DESC", "Questo &Atilde;&uml; il vostro ID applicazione per Bing API &Atilde;&uml; possibile ottenere uno da &lt;a href=&quot;https://ssl.bing.com/webmaster/Developers/Home?FORM=R5FD2&quot; target=&quot;_blank&quot;&gt;ID applicazione Registrati&lt;/a&gt;");

// Translation done by XTransam & admin (info@txmodxoops.org)
// XTransam 1.2 is written by Chronolabs Co-op & The XOOPS Project - File Dumped on 2011-12-28 14:49

?>