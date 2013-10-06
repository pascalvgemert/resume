<?php

	namespace Presenters\Collections;
	
	use \Libraries\ORM as ORM;
	
	/* LOAD DEPENDECIES */
	require_once('models/skill.class.php');
	
	/**
	 * Skills Collection Class which contains the skills information.
	 */
	class Skills
	{
		private $iaSkills = array();
		
		/* CONSTRUCTOR */
		
		public function __construct()
		{
			$this->collect();
		}
		
		/* PUBLIC METHODS */
		
		public function all()
		{			
			return $this->iaSkills;
		}
		
		public function sortByLevel()
		{
			usort($this->iaSkills, function($a, $b)
			{
				if($a->level == $b->level)
				{
					return $a->title > $b->title ? 1 : -1;
				}
		
				return ($a->level > $b->level) ? -1 : 1;
			});
		}
		
		/* PRIVATE METHODS */
		
		private function collect()
		{
			$laSkills = ORM::factory('skills');	
			
			foreach($laSkills as $loSkill)
			{
				$loSkill = new \Models\Skill($loSkill);
				
				$this->iaSkills[] = $loSkill->get();
			}
		}
	}