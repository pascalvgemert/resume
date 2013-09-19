<?php

	/* LOAD DEPENDECIES */
	require_once('presenters/contactdto.class.php');
	
	/**
	 * Contact Class which contains the contact information.
	 */
	class Contact extends StandardModel
	{
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct()
		{
			$this->extend(ORM::factory('contact_details'));	
		}
		
		public function get()
		{
			return new ContactDTO($this);
		}
	}