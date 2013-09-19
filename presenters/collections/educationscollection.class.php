<?php

	/* LOAD DEPENDECIES */
	require_once('models/education.class.php');
	
	/**
	 * EducationsCollection Class which contains the education information.
	 */
	class EducationsCollection
	{
		private $iaEducations = array();
		
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
			return $this->iaEducations;
		}
		
		public function sortByDate()
		{
			/*usort($this->iaEducations, function($a, $b)
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
			$laEducations = ORM::factory('educations');	
			
			foreach($laEducations as $loEducation)
			{
				$loEducation = new Education($loEducation);
				
				$this->iaEducations[] = $loEducation->get();
			}
		}
	}