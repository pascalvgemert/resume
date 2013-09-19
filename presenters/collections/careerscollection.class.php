<?php

	/* LOAD DEPENDECIES */
	require_once('models/career.class.php'); 
	
	/**
	 * CareersCollection Class which contains the career information.
	 */
	class CareersCollection
	{
		private $iaCareers = array();
		
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
			return $this->iaCareers;
		}
		
		public function sortByDate()
		{
			/*usort($this->iaCareers, function($a, $b)
			{
				if($a->level == $b->level)
				{
					return $a->title > $b->title ? 1 : -1;
				}
		
				return ($a->level > $b->level) ? -1 : 1;
			});*/
		}
		
		private function collect()
		{
			$laCareers = ORM::factory('careers');	
			
			foreach($laCareers as $loCareer)
			{
				$loCareer = new Career($loCareer);
				
				$this->iaCareers[] = $loCareer->get();
			}
		}
	}