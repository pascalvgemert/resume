<?php

	/* LOAD DEPENDECIES */
	require_once('models/skilldto.class.php');
	
	/**
	 * Skill Class which contains the skill information.
	 */
	class Skill extends StandardModel
	{
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct($poSkill)
		{
			$this->extend($poSkill);	
		}
		
		public function get()
		{
			return new SkillDTO($this);
		}
	}