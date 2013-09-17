<?php

	/* LOAD DEPENDECIES */
	require_once('models/skill.class.php');
	
	/**
	 * SkillsCollection Class which contains the skills information.
	 */
	class SkillsCollection
	{
		private $iaSkills = array();
		
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
			$this->sortByTitle();
			
			return $this->iaSkills;
		}
		
		private function sortByTitle()
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
		
		private function collect()
		{
			$laSkills = ORM::factory('skills');	
			
			foreach($laSkills as $loSkill)
			{
				$loSkill = new Skill($loSkill);
				
				$this->iaSkills[] = $loSkill->get();
			}
		}
	}