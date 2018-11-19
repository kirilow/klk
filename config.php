<?php
$isSecure = false;
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
	$isSecure = true;
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
	$isSecure = true;
}
$REQUEST_PROTOCOL = $isSecure ? 'https' : 'http';

define('GOOGLE_CLIENT_ID', '510448767094-9pl4n7hqetdb8vjsnkse505abh8r52is.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SICRET', 'rrYEXDAOUNtotRojMZaNe6je');

define('DOMAIN_NAME', $_SERVER['SERVER_NAME']);
define('SITE_NAME', 'testserver');
define('BRAND_NAME', 'testserver');

getenv("0") <> "" ? define('SUBDOMEIN_NAME', getenv("APPLICATION_SUBDIRECTORY") . '/') : define('SUBDOMEIN_NAME', "");
define('AUTHOR', getenv("SITE_WEBMASTER"));
define('APPLICATION_ENV', getenv("APPLICATION_ENV"));
/**
 * configure DB conection
 */
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_DATABASENAME', "rentcar");


if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
	define("SEPARATOR", "\\");
} else {
	define("SEPARATOR", "/");
}



define('SERVER_PREFIX', $REQUEST_PROTOCOL);
define('SERVER_NAME', '://' . $_SERVER['SERVER_NAME'] . "/");
define('SERVER_WORK_DIRECTORY', strtolower(SERVER_PREFIX . SERVER_NAME));
define('SERVER_WORK_DIRECTORY_PUB', SERVER_WORK_DIRECTORY . 'pub/');

define('BASE_PATH_ABS', dirname(__FILE__) . SEPARATOR);

define('HTMLS_PATH', BASE_PATH_ABS . 'htmls'.SEPARATOR);
//define('SERVER_WORK_XHR', BASE_PATH_ABS . 'xhr'.SEPARATOR);

//define('YOUR_INFORMATION_DIRECTORY', BASE_PATH_ABS.'your_information/');

$header_css = [];
$footer_js = [];


if( !is_session_started() ){
	session_start();
}

function is_session_started() {
	return session_id() === '' ? FALSE : TRUE;
}


function ourautoload($classname) {
	if (file_exists(__DIR__ . "/classes/" . $classname . ".php")) {
		require_once("classes/" . $classname . ".php");
	}
}
spl_autoload_register('ourautoload');

define('VENDOR_PATH', BASE_PATH_ABS . 'vendor'.SEPARATOR);

require_once(VENDOR_PATH . "autoload.php");

