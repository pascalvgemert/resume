<?php
	
	class ViewController
	{
		private $iaVariables 			= array();
		private $istrNotFoundTemplate 	= '';
		
		public function __construct()
		{
			$this->istrNotFoundTemplate = VIEW_INCLUDE_PATH . '404.php';
		}
		
		public function showTemplate($pstrTemplate)
		{
			if(!@isset($pstrTemplate) || !@file_exists(VIEW_INCLUDE_PATH . $pstrTemplate))
			{
				$this->showPageNotFound();
			}
			
			foreach($this->iaVariables as $lstrVariable => $lmValue)
			{
				$$lstrVariable = $lmValue; 
			}
				
			header('Content-Type: text/html; charset=utf-8');
			@include_once(VIEW_INCLUDE_PATH . $pstrTemplate);
		}
		
		public function showPageNotFound()
		{
			header("HTTP/1.0 404 Not Found");
			
			if(@file_exists($this->istrNotFoundTemplate))
			{
				@include_once($this->istrNotFoundTemplate);
			}
			
			exit();
		}
		
		public function assign($pstrVariable, $pmValue)
		{
			$this->iaVariables[$pstrVariable] = $pmValue;
		}
	}