<?php

	namespace Libraries;
	
	/* LOAD DEPENDENCIES */
	require_once('models/route.class.php');
	
    /**
	 * This services handles all routing of the application
	 */
	
	class Router 
	{
		private static $Instance 	= null;
		
		private $iaActions			= array();
		private $iaRoutes			= array();
		private $iaParams			= array();
		
		/* CONSTRUCTOR */
		
		public function __construct() { }
		
		static public function getInstance()
		{
			if(self::$Instance == NULL) 
			{
				self::$Instance = new \Libraries\Router();
			}
			
			return self::$Instance;
		}

		/* PUBLIC METHODS */
		
		public function action($pstrAction, $pstrValue)
		{
			$this->iaActions[$pstrAction] = $pstrValue;
		}
		
		public function map($pstrRouteUrl, $pmTarget, $paFilters = array())
		{
			$loRoute = new \Models\Route($pstrRouteUrl, $pmTarget, $paFilters);
			
			array_push($this->iaRoutes, $loRoute); 
		}
		
		public function getParam($pstrField)
		{
			return (@isset($this->iaParams[$pstrField])) ? $this->iaParams[$pstrField] : null;
		}
		
		public function match($pstrRequestedUrl)
		{
			$lstrRequestedUrl = $this->extractParams($pstrRequestedUrl);
			
			foreach($this->iaRoutes as $loRoute)
			{
				if($loRoute->isMatch($lstrRequestedUrl, $this->iaActions))
				{
					$this->setParametersFromAction($lstrRequestedUrl, $this->iaActions);
	
					return $loRoute;
				}
			}
			
			return null;
		}
		
		/* PRIVATE METHODS */
		
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
		
		private function extractParams($pstrRequestedUrl)
		{
			$laUrlParts = parse_url($pstrRequestedUrl);
			
			if(@isset($laUrlParts['query']))
			{
				parse_str($laUrlParts['query'], $laParams);
				
				foreach($laParams as $lstrKey => $lstrValue)
				{
					$_GET[$lstrKey] = $lstrValue;
				}
			}
			
			return (@isset($laUrlParts['path'])) ? $laUrlParts['path'] : '/';
		}
	}