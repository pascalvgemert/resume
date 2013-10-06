<?php

	namespace Models;
	
	/* LOAD DEPENDECIES */
	require_once('presenters/skill.class.php');
	
	/**
	 * Skill Class which contains the skill information.
	 */
	class Skill extends BaseModel
	{
		/* CONSTRUCTOR */
		
		public function __construct($poSkill)
		{
			$this->extend($poSkill);	
		}
		
		/* PUBLIC METHODS */
		
		public function get()
		{
			return new \Presenters\Skill($this);
		}
	}