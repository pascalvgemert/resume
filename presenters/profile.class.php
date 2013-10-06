<?php

	namespace Presenters;
	
	/**
	 * Profile Presenter Class which contains the profile transfer information.
	 */
	class Profile extends BaseDTO
	{
		/* CONSTRUCTOR */
		
		public function __construct($poProfile)
		{
			$this->extend($poProfile);	
		}
	}