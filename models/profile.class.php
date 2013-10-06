<?php

	namespace Models;
	
	use \Libraries\ORM as ORM;
	use \Libraries\Helper as Helper;
	
	/* LOAD DEPENDECIES */
	require_once('presenters/profile.class.php');
	
	/**
	 * Profile Class which contains the profile information.
	 */
	class Profile extends BaseModel
	{
		/* CONSTRUCTOR */
		
		public function __construct()
		{
			$this->extend(ORM::factory('profile'));	
			
			$this->full_name 	= $this->full_name();
			$this->age			= $this->age(); 
		}
		
		/* PUBLIC METHODS */
		
		public function get()
		{
			return new \Presenters\Profile($this);
		}
		
		public function full_name($include_middle_name = false)
		{
			$middle_name = ($include_middle_name) ? ' ('.$this->middle_name.') ' : '';
			
			return $this->first_name.' '.$middle_name.' '.$this->last_name;
		}
		
		public function age()
		{
			return Helper::calculateAge($this->date_of_birth);
		}
	}