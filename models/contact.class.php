<?php

	namespace Models;
	
	use \Libraries\ORM as ORM;
	
	/* LOAD DEPENDECIES */
	require_once('presenters/contact.class.php');
	
	/**
	 * Contact Class which contains the contact information.
	 */
	class Contact extends BaseModel
	{
		/* CONSTRUCTOR */
		 
		public function __construct()
		{
			$this->extend(ORM::factory('contact_details'));	
		}
		
		/* PUBLIC METHODS */
			
		public function get()
		{
			return new \Presenters\Contact($this);
		}
	}