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
 * @contents	HTML5 Global Variables to use any where in project
 * @copyright	2011, Cee Emm Infotech, All Rights Reserved.
 * @author		Vineet Gupta <vineetgupta22@gmail.com>
 *
 */
	//Before including this file One should define _html5 as the main starting point
	defined('_html5') or die('<h1 style="text-align:center">Direct Access Not Allowed</h1>');
	
	//Directory seprater
	define('DS', DIRECTORY_SEPARATOR);
	
	if(! defined(_html5_root)){
		define(_html5_root, dirname(dirname(__FILE__)));
	}
	
	$parts = explode(DS, _html5_root);
	define('_root_loc', implode(DS, $parts).DS);
	
	define('_includes', _root_loc. 'includes'. DS);
	define('_lib', _root_loc. 'lib'. DS);
	define('_function', _root_loc. 'functions'. DS);
	
	//closing some command/services  which are not required
	set_magic_quotes_runtime( 0 );
	@ini_set( 'magic_quotes_sybase', 0 );
	
	//variables for checking php version
	$required_php_version='5';
	$html5_version='1.0.0';
	
 
?>