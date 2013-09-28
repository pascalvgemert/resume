<?php
	
	define('ROOT', dirname(__FILE__). '/');
	define('BASE', str_replace('//', '/', dirname($_SERVER['PHP_SELF']). '/'));
	
	define('CONTROLLERS_INCLUDE_PATH', ROOT.'controllers/');
	define('MODELS_INCLUDE_PATH', ROOT.'models/');
	define('SERVICES_INCLUDE_PATH', ROOT.'services/');
	define('VIEW_INCLUDE_PATH', ROOT.'view/');
	
	define('VIEW_PATH', BASE.'view/');
	
	define('JSON_DATA_FILE', ROOT.'json/resume.min.json');