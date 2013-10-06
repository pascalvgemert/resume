<?php

	namespace Presenters;
	
	/**
	 * Education Presenter Class which contains the education transfer information.
	 */
	class Education extends BaseDTO
	{
		/* CONSTRUCTOR */
		
		public function __construct($poEducation)
		{
			$this->extend($poEducation);	
		}
	}