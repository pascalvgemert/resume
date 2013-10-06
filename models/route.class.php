<?php

	namespace Models;
	
	/**
	 * This services handles all routing 
     */
	
	class Route
	{
		private $istrRouteUrl 	= '';
		private $ioTarget		= array();
		
		private $iaFilters		= array();
		private $iaParams		= array();
			
		/* CONSTRUCTOR */
		
		public function __construct($pstrRouteUrl, $pmTarget, $paFilters = array())
		{
			$this->setUrl($pstrRouteUrl); 
			$this->setTarget($pmTarget);
			$this->setFilters($paFilters);
		}
		
		/* PUBLIC METHODS */
		
		public function isMatch($pstrRequestedUrl, $paActions = array())
		{
			if(!preg_match("@^".$this->getRegex($paActions)."*$@i", $pstrRequestedUrl, $laMatches)) 
			{
				return false;
			}
			
			$this->setParametersFromMatch($laMatches);
			
			return true;
		}
		
		// setters
		
		public function setUrl($pstrUrl) 
		{
			$this->istrRouteUrl = $pstrUrl;
		}

		public function setTarget($pmTarget) 
		{
			if(is_string($pmTarget))
			{
				$this->ioTarget = (object) array('template' => $pmTarget);
			}
			else if(is_array($pmTarget))
			{
				$this->ioTarget = (object) $pmTarget;
			}
		}
		
		public function setFilters($paFilters) 
		{
			$this->iaFilters = $paFilters;
		}
		
		public function setParameters($paParams) 
		{
			$this->iaParams = $paParams;
		}
		
		// getters
		
		public function getUrl()
		{
			return $this->istrRouteUrl;
		}
		
		public function getTarget()
		{
			return $this->ioTarget;
		}
		
		public function getParameters() 
		{
			return $this->iaParams;
		}
	
		public function getRegex($paActions) 
		{
			return preg_replace_callback("/:(\w+)/", array(&$this, 'substituteFilter'), $this->istrRouteUrl).$this->getActionRegex($paActions);
		}
		
		/* PRIVATE METHODS */
		
		private function setParametersFromMatch($paMatches)
		{
			$laParams = array();

            if(preg_match_all("/:([\w-]+)/", $this->istrRouteUrl, $laArgumentKeys)) 
			{
                $laArgumentKeys = $laArgumentKeys[1];
				
                foreach($laArgumentKeys as $lnKey => $lstrName) 
				{
                    if(@isset($paMatches[$lnKey + 1]))
					{
                        $laParams[$lstrName] = $paMatches[$lnKey + 1];
					}
                }

            }

            $this->setParameters($laParams);
		}
		
		private function getActionRegex($paActions) 
		{
			$laActionRegexs = array();
			
			foreach($paActions as $lstrAction => $lstrValue)
			{
				$laActionRegexs[] = $lstrAction."/".$lstrValue;
			}
			
			return (count($laActionRegexs) > 0) ? "/*(?:".implode("|", $laActionRegexs).")*/" : "";
		}
		
		private function substituteFilter($paMatches) 
		{
			if(@isset($paMatches[1]) && @isset($this->filters[$paMatches[1]])) 
			{
				return $this->iaFilters[$paMatches[1]];
			}
			
			return "([\w-]+)";
		}
	}
	