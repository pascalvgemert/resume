<?php

	/* LOAD DEPENDECIES */
	require_once('models/profiledto.class.php');
	
	/**
	 * Profile Class which contains the profile information.
	 */
	class Profile extends StandardModel
	{
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct()
		{
			$this->extend(ORM::factory('profile'));	
			
			$this->full_name = $this->full_name();
		}
		
		public function get()
		{
			return new ProfileDTO($this);
		}
		
		public function full_name($include_middle_name = false)
		{
			$middle_name = ($include_middle_name) ? ' ('.$this->middle_name.') ' : '';
			
			return $this->first_name.' '.$middle_name.' '.$this->last_name;
		}
	}