<?php
	
	namespace Controllers;
	
	use \Libraries\ORM as ORM;
	use \Libraries\Router as Router;
	
	/* LOAD DEPENDECIES */
	require_once('models/basemodel.class.php');
	require_once('presenters/basedto.class.php');
	
	class Main
	{
		public $ioViewController;
		
		/* CONSTRUCTOR */
		
		public function __construct()
		{
			$this->ioViewController = new \Controllers\View();
			
			$this->loadData();
			$this->initialize();
		}
		
		/* PUBLIC METHODS */
		
		public function initialize()
		{
			$lstrRequestedUri = preg_replace('|'.dirname($_SERVER['PHP_SELF']).'|i', '', $_SERVER['REQUEST_URI']);
			
			$loRoute = Router::getInstance()->match($lstrRequestedUri); 
			
			$this->executeRoute($loRoute);
		}
		
		public function loadController($pstrController)
		{
			$lstrController = "Controllers\\$pstrController";
			
			if(class_exists(ucfirst($lstrController)) || class_exists($lstrController)) 
			{			
				return new $lstrController($this);
			}
			
			return $this->importController($lstrController);
		}
		
		/* PRIVATE METHODS */
		
		private function loadData()
		{
			if($lstrData = file_get_contents(JSON_DATA_FILE))
			{
				ORM::setData($lstrData);
			}
		}
		
		private function executeRoute($poRoute)
		{
			if(!@isset($poRoute))
			{
				$this->ioViewController->showPageNotFound();
			}
			
			$this->callTarget($poRoute);
		}
		
		private function callTarget($poRoute)
		{
			$loTarget = $poRoute->getTarget();
			
			if(@isset($loTarget->controller) && @isset($loTarget->method))
			{
				$loController = $this->loadController($loTarget->controller);
					
				if(!@isset($loController))
				{
					$this->ioViewController->showPageNotFound();
				}
				
				call_user_func_array(array($loController, $loTarget->method), $poRoute->getParameters());
			}
			
			$this->ioViewController->showTemplate((@isset($loTarget->template)) ? $loTarget->template : null);
		}
		
		private function importController($pstrController)
		{	
			$laControllerParts		= explode('\\', $pstrController);
			$lstrControllerFilename = CONTROLLERS_INCLUDE_PATH.strtolower(end($laControllerParts)).'.class.php';
			
			@include_once($lstrControllerFilename);
				
			if(class_exists(ucfirst($pstrController)) || class_exists($pstrController)) 
			{			
				return new $pstrController($this);
			}

			return null;
		}		
	}