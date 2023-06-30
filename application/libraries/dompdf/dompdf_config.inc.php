<?php

require_once 'dompdf/autoload.inc.php';
Dompdf\Autoloader::register();
require_once 'dompdf/include/functions.inc.php';
require_once 'dompdf/include/cpdf_adapter.cls.php';

// Set up DOMPDF configuration

define('DOMPDF_ENABLE_AUTOLOAD', false);
define('DOMPDF_ENABLE_REMOTE', true);
define('DOMPDF_ENABLE_CSS_FLOAT', true);

// Custom font directory
define('DOMPDF_FONT_DIR', __DIR__ . '/fonts/');
define('DOMPDF_FONT_CACHE', __DIR__ . '/fonts/cache/');

// Custom paper size
define('DOMPDF_DEFAULT_PAPER_SIZE', 'A4');

// Enable Unicode support
define('DOMPDF_UNICODE_ENABLED', true);

// Enable font subsetting
define('DOMPDF_ENABLE_FONTSUBSETTING', true);

// Enable inline PHP evaluation
define('DOMPDF_ENABLE_PHP', true);

// Enable DOMPDF logging
define('DOMPDF_LOG_OUTPUT_FILE', __DIR__ . '/dompdf_log.txt');
define('DOMPDF_FONT_LOG_OUTPUT_FILE', __DIR__ . '/dompdf_font_log.txt');

// Set additional options
$options = new Dompdf\Options();
$options->set('isRemoteEnabled', true);
$options->set('defaultPaperSize', 'A4');
$options->set('fontDir', DOMPDF_FONT_DIR);
$options->set('fontCache', DOMPDF_FONT_CACHE);
$options->set('defaultFont', 'Arial');

$dompdf = new Dompdf\Dompdf($options);

// Other custom configurations or initialization can be added here
