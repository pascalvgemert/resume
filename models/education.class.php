<?php

	namespace Models;
	
	/* LOAD DEPENDECIES */
	require_once('presenters/education.class.php');
	
	/**
	 * Education Class which contains the education information.
	 */
	class Education extends BaseModel
	{
		/* CONSTRUCTOR */
		
		public function __construct($poEducation)
		{
			$this->extend($poEducation);	
		}
		
		/* PUBLIC METHODS */
		
		public function get()
		{
			return new \Presenters\Education($this);
		}
	}