<?php

	namespace Presenters\Collections;
	
	use \Libraries\ORM as ORM;
	
	/* LOAD DEPENDECIES */
	require_once('models/project.class.php');
	
	/**
	 * Projects Collection Class which contains the interest information.
	 */
	class Projects
	{
		private $iaProjects = array();
		
		/* CONSTRUCTOR */
		
		public function __construct()
		{
			$this->collect();
		}
		
		/* PUBLIC METHODS */
		
		public function all()
		{			
			return $this->iaProjects;
		}
		
		public function sortByName()
		{
			usort($this->iaProjects, function($a, $b)
			{
				return $a->title > $b->title ? 1 : -1;
			});
		}
		
		/* PRIVATE METHODS */
		
		private function collect()
		{
			$laProjects = ORM::factory('projects');	
			
			foreach($laProjects as $loProject)
			{
				$loProject = new \Models\Project($loProject);
				
				$this->iaProjects[] = $loProject->get();
			}
		}
	}