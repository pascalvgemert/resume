<?php

	/**
	 * SkillDTO Class which contains the skill transfer information.
	 */
	class SkillDTO extends StandardDTO
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
	}