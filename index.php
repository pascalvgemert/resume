<?php
	
	header('Content-Type: text/html; charset=utf-8');
	
	ob_start("ob_gzhandler");
	
	/* LOAD CONFIG */
	require_once('config.inc.php');
	
	/* DEPENDENCIES */
	require_once('libraries/router.class.php');
	require_once('libraries/orm.class.php');
	require_once('libraries/helper.class.php');
	
	require_once('controllers/main.class.php');
	require_once('controllers/view.class.php');
	
	require_once('routes.inc.php');	
	
	/* MAIN CONTROLLER */
	$loMainController = new \Controllers\Main();
	