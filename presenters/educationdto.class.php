<?php

	/**
	 * EducationDTO Class which contains the education transfer information.
	 */
	class EducationDTO extends StandardDTO
	{
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct($poEducation)
		{
			$this->extend($poEducation);	
		}
	}