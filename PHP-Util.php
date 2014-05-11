<?php
/**
 * PHP-Util - PHP utility library.
 * 
 * @license MIT
 * @author wells
 * @version 0.2.7
 * 
 * ------------------
 * Changelog:
 *  0.2.7 (5/10/14)
 * 		- Add a bunch of array functions [array.php]
 * 		- Add is_json(), to_seconds() [scalar.php]
 * 		- Add is_hhvm() [misc.php]
 * 	0.2.6 (4/25/14)
 * 		- Move scalar, array, and filesystem funcs to separate files.
 * 		- Add str_between()
 * 		- Add str_sentences()
 * 		- Add esc_alnum()
 * 		- Add in_arrayi()
 *	0.2.5 (4/20/14)
 * 		- Add getcookie()
 * 		- Add base64_url_encode()
 * 		- Add base64_url_decode()
 *	0.2.4 (4/16/14)
 * 		- Add parents and interfaces options to classinfo()
 * 		- Change 'endswith()' to 'str_endswith()'
 * 		- Change 'startswith()' to 'str_startswith()'
 * 	0.2.3 (4/14/14)
 * 		- Add file_extension()
 * 		- Change fwritecsv() to file_put_csv()
 * 		- Add file_get_csv()
 * 	0.2.2 (4/12/14) 
 * 		- Fix classinfo() bitwise
 * 		- Add is_win()
 * 		- Add optional row callback param to fwritecsv()
 * 	0.2.1 (4/11/14) 
 * 		- Add XML functions; create package
 */

require __DIR__ .'/src/scalar.php';
require __DIR__.'/src/array.php';
require __DIR__.'/src/filesystem.php';
require __DIR__.'/src/misc.php';

function phputil_use_function($function) {
	
	$file = __DIR__.'/src/fn/'.$function.'.php';
	
	if (file_exists($file)) {
		include_once $file;
		return true;
	}
	
	return false;
}
