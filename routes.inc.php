<?php

	use \Libraries\Router as Router;
	
	Router::getInstance()->map('/', array('template' => 'resume.php', 'controller' => 'Resume', 'method' => 'show'));
