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
 * @contents	HTML5 - importing different types of classes
 * @copyright	2011, Cee Emm Infotech, All Rights Reserved.
 * @author		Vineet Gupta <vineetgupta22@gmail.com>
 *
 */
	//Before including this file One should define _html5 as the main starting point
	defined('_html5') or die('<h1 style="text-align:center">Direct Access Not Allowed</h1>');
	
	// Register html5_imported::loaded as an autoload class handler.
	spl_autoload_register(array('html5_imported','loaded'));
	
	class html5_imported{
		/**
		* Array to record already imported files
		* @var 		array
		* @since	1.0.0
		*/
		protected static $_html5_file_imported = array();
		/**
		* Array to record already imported classes
		* @var 		array
		* @since	1.0.0
		*/
		protected static $_html5_classes_imported = array();
		
		public static function html5_class_import($key, $base_name=''){
			
			//First we have to check whether we had imported the file or not
			if (!isset(self::$_html5_file_imported[$key])){
				
				//We are using $key provided as source of file and thus
				//setting it up for some of the variables to import class
				$html5_import_success = false;
				$key_parts = explode('.', $key);
				$html5_class_to_import = array_pop($key_parts);
				$base_name = (!empty($base_name)) ? $base_name : dirname(__FILE__);
				$html5_import_path = str_replace('.', DS, $key);
				
				// If we are importing a library from the HTML5 namespace
				if (strpos($html5_import_path, 'html5') === 0) {
					
					
					//First thing first - Check whether file exits or not
					if (is_file($base_name . DS . str_replace('html5'.DS, '', $html5_import_path).'.php')) {
						self::$_html5_classes_imported[strtolower($html5_class_to_import)] = $base_name . DS . str_replace('html5'.DS, '', $html5_import_path).'.php';
						$success = true;
					}else{
						echo "No, The file doesn't exits ";
					}
				}else{
					echo $key;
				}
			}
			return self::$_html5_file_imported[$key];
		}
		
		public static function loaded($class){
			$class = strtolower($class);
			if (class_exists($class)) {
			  return;
			}else{
				// If the class is registered include the file.
				if (isset(self::$_html5_classes_imported[$class])) {
					include_once self::$_html5_classes_imported[$class] ;
					return true;
				}
			}
			return false;
		}
	}
?>