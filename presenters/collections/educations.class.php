<?php

	namespace Presenters\Collections;
	
	use \Libraries\ORM as ORM;

	/* LOAD DEPENDECIES */
	require_once('models/education.class.php');
	
	/**
	 * Educations Collection Class which contains the education information.
	 */
	class Educations
	{
		private $iaEducations = array();
		
		/* CONSTRUCTOR */
		
		public function __construct()
		{
			$this->collect();
		}
		
		/* PUBLIC METHODS */
		
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
		
		/* PRIVATE METHODS */
		
		private function collect()
		{
			$laEducations = ORM::factory('educations');	
			
			foreach($laEducations as $loEducation)
			{
				$loEducation = new \Models\Education($loEducation);
				
				$this->iaEducations[] = $loEducation->get();
			}
		}
	}