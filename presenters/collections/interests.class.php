<?php

	namespace Presenters\Collections;
	
	use \Libraries\ORM as ORM;
	
	/* LOAD DEPENDECIES */
	require_once('models/interest.class.php');
	
	/**
	 * Interests Collection Class which contains the interest information.
	 */
	class Interests
	{
		private $iaInterests = array();
		
		/* CONSTRUCTOR */
		
		public function __construct()
		{
			$this->collect();
		}
		
		/* PUBLIC METHODS */
		
		public function all()
		{			
			return $this->iaInterests;
		}
		
		public function sortByName()
		{
			usort($this->iaInterests, function($a, $b)
			{
				return $a->title > $b->title ? 1 : -1;
			});
		}
		
		/* PRIVATE METHODS */
		
		private function collect()
		{
			$laInterests = ORM::factory('interests');	
			
			foreach($laInterests as $loInterest)
			{
				$loInterest = new \Models\Interest($loInterest);
				
				$this->iaInterests[] = $loInterest->get();
			}
		}
	}