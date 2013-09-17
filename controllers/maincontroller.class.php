<?php
	
	/* LOAD DEPENDECIES */
	require_once('models/standardmodel.class.php');
	require_once('presenters/standarddto.class.php');
	
	class MainController
	{
		public $ioViewController;
		
		public function __construct()
		{
			$this->ioViewController = new ViewController();
			
			$this->loadData();
			$this->initialize();
		}
		
		public function initialize()
		{
			$lstrRequestedUri = preg_replace('|'.dirname($_SERVER['PHP_SELF']).'|i', '', $_SERVER['REQUEST_URI']);
			
			$loRoute = Router::getInstance()->match($lstrRequestedUri); 
			
			$this->executeRoute($loRoute);
		}
		
		public function loadController($pstrController)
		{
			if(class_exists(ucfirst($pstrController)) || class_exists($pstrController)) 
			{			
				return new $pstrController($this);
			}
			
			return $this->importController($pstrController);
		}
		
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
			if(file_exists(CONTROLLERS_INCLUDE_PATH.strtolower($pstrController).'.class.php'))
			{ 
				include_once(CONTROLLERS_INCLUDE_PATH.strtolower($pstrController).'.class.php');
				
				if(class_exists(ucfirst($pstrController)) || class_exists($pstrController)) 
				{			
					return new $pstrController($this);
				}
			}

			return null;
		}		
	}