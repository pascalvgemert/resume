<?php

	/* LOAD DEPENDENCIES */
	require_once('models/route.class.php');
	
    /**
	 * This services handles all routing 
     * 
	 * @author      Pascal van Gemert <pascal@pascalvangemert.nl>
	 * @version     1.0 
     * @package     Resume
	 */
	
	class Router 
	{
		private static $Instance 	= null;
		
		private $iaActions			= array();
		private $iaRoutes			= array();
		private $iaParams			= array();
		
		/****** CONSTRUCTOR ******/
		
		public function __construct() { }
		
		static public function getInstance()
		{
			if(self::$Instance == NULL) 
			{
				self::$Instance = new Router();
			}
			
			return self::$Instance;
		}

		/****** PUBLIC METHODS ******/
		
		public function action($pstrAction, $pstrValue)
		{
			$this->iaActions[$pstrAction] = $pstrValue;
		}
		
		public function map($pstrRouteUrl, $pmTarget, $paFilters = array())
		{
			$loRoute = new Route($pstrRouteUrl, $pmTarget, $paFilters);
			
			array_push($this->iaRoutes, $loRoute); 
		}
		
		public function getParam($pstrField)
		{
			return (@isset($this->iaParams[$pstrField])) ? $this->iaParams[$pstrField] : null;
		}
		
		public function match($pstrRequestedUrl)
		{
			foreach($this->iaRoutes as $loRoute)
			{
				if($loRoute->isMatch($pstrRequestedUrl, $this->iaActions))
				{
					$this->setParametersFromAction($pstrRequestedUrl, $this->iaActions);
	
					return $loRoute;
				}
			}
			
			return null;
		}
		
		/****** PRIVATE METHODS ******/
		
		private function setParametersFromAction($pstrRequestedUrl, $paActions)
		{
			foreach($paActions as $lstrAction => $lstrValue)
			{
				if(preg_match_all("/".$lstrAction."\/(".$lstrValue.")/", $pstrRequestedUrl, $laArgumentKeys)) 
				{
					$this->iaParams[$lstrAction] = current($laArgumentKeys[1]);
				}
			}
		}
	}