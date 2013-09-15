<?php
	
	/* LOAD CONFIG */
	require_once('config.inc.php');
	
	/* DEPENDENCIES */
	require_once('services/router.class.php');
	require_once('services/orm.class.php');
	
	require_once('controllers/maincontroller.class.php');
	require_once('controllers/viewcontroller.class.php');
	
	require_once('routes.inc.php');	
	
	/* MAIN CONTROLLER */
	$loMainController = new MainController();
	