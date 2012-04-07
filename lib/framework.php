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
 * @contents	HTML5 Framework, every thing is done through this file
 * @copyright	2011, Cee Emm Infotech, All Rights Reserved.
 * @author		Vineet Gupta <vineetgupta22@gmail.com>
 *
 */
	//Before including this file One should define _html5 as the main starting point
	defined('_html5') or die('<h1 style="text-align:center">Direct Access Not Allowed</h1>');
	
	require_once(_function . 'functions.php');
	
	//Importing Class - to dynamically loading classes
	require_once(_lib . 'import.php');
	html5_import('html5.html.html5');
		

?>