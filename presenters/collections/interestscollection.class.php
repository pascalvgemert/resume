<?php

	/* LOAD DEPENDECIES */
	require_once('models/interest.class.php');
	
	/**
	 * InterestsCollection Class which contains the interest information.
	 */
	class InterestsCollection
	{
		private $iaInterests = array();
		
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct()
		{
			$this->collect();
		}
		
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
		
		private function collect()
		{
			$laInterests = ORM::factory('interests');	
			
			foreach($laInterests as $loInterest)
			{
				$loInterest = new Interest($loInterest);
				
				$this->iaInterests[] = $loInterest->get();
			}
		}
	}