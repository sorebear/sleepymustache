<?php
namespace CSS;

/**
 * @page css1 CSS Class
 *
 * A CSS class that concatinates and compresses CSS.
 *
 * @section usage Usage:
 * @code
 *   require_once('class.css.php');
 *
 *   $c = new \CSS\Compress();
 *
 *   $files = explode("&", $_GET['css']);
 *
 *   foreach ($files as $file) {
 *     $c->add(DIRBASE . "/css/" . $file . ".css");
 *   }
 *
 *   $c->show();
 * @endcode
 *
 * @section changelog Changelog
 *  ## Version 1.2
 *  * Added namespacing
 *  ## Version 1.1
 *  * Added the usage and date sections to documentation
 *
 * @date June 16, 2014
 * @author Jaime A. Rodriguez <hi.i.am.jaime@gmail.com>
 * @version 1.1
 * @copyright  GPL 3 http://cuttingedgecode.com
 */

class Compress {
	/**
	 * An array of CSS files
	 *
	 * @private
	 * @var array
	 */
	private $files = array();

	/**
	 * Adds a file to the CSS array for compression and concatenation
	 * @param string $file The name of the CSS file
	 */
	public function add($file) {
		array_push($this->files, $file);
	}

	/**
	 * Outputs the compressed CSS to the browser
	 * @return void nothing
	 */
	public function show() {
		$buffer = "";

		// Load the files
		foreach ($this->files as $file) {
			$buffer .= file_get_contents($file);
		}

		// Compress the files
		$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer); // comments
		$buffer = str_replace(': ', ':', $buffer); // space after colon
		$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer); // whitespace

		// Enable zip compression
		ob_start("ob_gzhandler");
		header('Cache-Control: public');
		header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT'); // 1 day
		header("Content-type: text/css");

		// Output to browser
		echo($buffer);
	}
}