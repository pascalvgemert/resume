<?php
	
	namespace Controllers;

	class View
	{
		private $iaVariables 			= array();
		private $iaStatusCodes			= array(
			200	=> '200 OK',
			301 => '301 Moved Permanently',
			303 => '303 See Other',
			307 => '307 Temporary Redirect',
			401 => '401 Unauthorized',
			403 => '403 Forbidden',
			404 => '404 Not Found'
		);
		private $istrNotFoundTemplate 	= '';
		
		/* CONSTRUCTOR */
		
		public function __construct()
		{
			$this->istrNotFoundTemplate = VIEW_INCLUDE_PATH . '404.php';
		}
		
		/* PUBLIC METHODS */
		
		public function showTemplate($pstrTemplate)
		{
			if(!$this->templateExists(VIEW_INCLUDE_PATH . $pstrTemplate))
			{
				$this->showPageNotFound();
			}
			
			$this->renderTemplate(VIEW_INCLUDE_PATH . $pstrTemplate);
		}
		
		public function showPageNotFound()
		{			
			if($this->templateExists($this->istrNotFoundTemplate))
			{
				$this->renderTemplate($this->istrNotFoundTemplate, 404);
			}
			
			exit();
		}
		
		public function assign($pstrVariable, $pmValue)
		{
			$this->iaVariables[$pstrVariable] = $pmValue;
		}
		
		/* PRIVATE METHODS */
		
		private function templateExists($pstrTemplate)
		{
			return (@file_exists($pstrTemplate) && is_file($pstrTemplate));
		}
		
		private function renderTemplate($pstrTemplate, $pnStatusCode = 200)
		{
			foreach($this->iaVariables as $lstrVariable => $lmValue)
			{
				$$lstrVariable = $lmValue; 
			}
				
			$this->setStatusCodeHeader($pnStatusCode);
			
			@include_once($pstrTemplate);
		}
		
		private function setStatusCodeHeader($pnStatusCode)
		{
			$lstrStatusCode = (@isset($this->iaStatusCodes[$pnStatusCode])) ? $this->iaStatusCodes[$pnStatusCode] : '200 OK';
			
			header("HTTP/1.0 " . $lstrStatusCode);
		}
	}