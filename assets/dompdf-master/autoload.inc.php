<?php
/**
 * @packagedompdf
 * @link    http://dompdf.github.com/
 * @authorBenj Carson <benjcarson@digitaljunkies.ca>
 * @authorFabienMénager<fabien.menager@gmail.com>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General PublicLicense
 */

/**
 * Dompdfautoloadfunction
 *
 * If youhaveanexistingautoloadfunction, add a calltothisfunction
 * fromyourexisting __autoload() implementation.
 *
 * @param string $class
 */

require_once __DIR__ . '/lib/html5lib/Parser.php';
require_once __DIR__ . '/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once __DIR__ . '/lib/php-svg-lib/src/autoload.php';

/*
 * New PHP 5.3.0 namespacedautoloader
 */
require_once __DIR__ . '/src/Autoloader.php';

Dompdf\Autoloader::register();
