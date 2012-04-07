<?PHP
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details. You should have
 * received a copy of the GNU General Public License along with
 * this program.
 *
 *
 * @package		HTML5
 * @contents	This is the main file one should include this file form html5
 * @copyright	2011, Cee Emm Infotech, All Rights Reserved.
 * @author		Vineet Gupta <vineetgupta22@gmail.com>
 *
 */
	//Before including this file One should define _html5 as the main starting point
	defined('_html5') or die('<h1 style="text-align:center">Direct Access Not Allowed</h1>');
	
	//Global definations
	require_once(_html5_root.'/includes/global.php');
	
	//framework
	require_once(_lib.'framework.php');
	
	html5_check_php_version();
 
?>