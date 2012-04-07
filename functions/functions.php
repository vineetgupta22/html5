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
 * @contents	HTML5 Functions which are required are provided here
 * @copyright	2011, Cee Emm Infotech, All Rights Reserved.
 * @author		Vineet Gupta <vineetgupta22@gmail.com>
 *
 */
	
	defined('_html5') or die('<h1 style="text-align:center">Direct Access Not Allowed</h1>');
	
	function html5_check_php_version() {
		global $required_php_version, $html5_version;
		$php_version = phpversion();
		if (version_compare($required_php_version, $php_version, '>') ){
			die( sprintf('<h2 style="text-align:center">Your server is running PHP version %1$s but HTML5 version %2$s requires at least PHP Version %3$s.</h2>', $php_version, $html5_version, $required_php_version ) );
		}
	}
	
	function html5_import($key){
		if (!class_exists('html5_imported')) {
			require_once(_lib . 'import.php');
		}
		return html5_imported::html5_class_import($key);
	}

 
?>