<?php
	
	header('Content-Type: text/html; charset=utf-8');
			
	/* LOAD CONFIG */
	require_once('config.inc.php');
	
	/* DEPENDENCIES */
	require_once('libraries/router.class.php');
	require_once('libraries/orm.class.php');
	
	require_once('controllers/maincontroller.class.php');
	require_once('controllers/viewcontroller.class.php');
	
	require_once('routes.inc.php');	
	
	/* MAIN CONTROLLER */
	$loMainController = new MainController();
	