<?php
/**
 * XTransam module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright    The XOOPS Project (http://www.xoops.org)
 * @license      GNU GPL (http://www.gnu.org/licenses/gpl-2.0.html/)
 * @package    Contact
 * @since        2.5.0
 * @author     Mage, Mamba, Timgno
 * @version    $Id $
 **/

include 'admin_header.php';
xoops_cp_header();

$aboutAdmin = new ModuleAdmin();
echo $aboutAdmin->addNavigation('about.php');
echo $aboutAdmin->renderabout('xoopsfoundation@gmail.com', false);

include 'admin_footer.php';
?>