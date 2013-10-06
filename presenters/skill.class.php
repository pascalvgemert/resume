<?php

	namespace Presenters;
	
	/**
	 * Skill Presenter Class which contains the skill transfer information.
	 */
	class Skill extends BaseDTO
	{
		/* CONSTRUCTOR */
		
		public function __construct($poSkill)
		{
			$this->extend($poSkill);	
		}
	}