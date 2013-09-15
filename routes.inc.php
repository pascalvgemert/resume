<?php

	Router::getInstance()->map('/', array('template' => 'resume.php', 'controller' => 'ResumeController', 'method' => 'show'));
