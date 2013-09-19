<?php

	/* LOAD DEPENDECIES */
	require_once('presenters/educationdto.class.php');
	
	/**
	 * Education Class which contains the education information.
	 */
	class Education extends StandardModel
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
		
		public function get()
		{
			return new EducationDTO($this);
		}
	}