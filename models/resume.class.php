<?php

	/**
	 * Resume Class which contains the resume sections like profile, educations, etcetra.
	 */
	class Resume 
	{
		/**
		 * Object which will contain profile information
		 * @var object 
		 */
		public $profile 			= null;
		
		/**
		 * Object which will contain contact information
		 * @var object 
		 */
		private $contact_information 	= null;
		
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct()
		{
			$this->loadResumeData();
		}
		
		private function loadResumeData()
		{
			$this->profile 				= new Profile();
			$this->contact_information 	= new ContactDetails(); // new StandardObject(ORM::factory('contact_details'));
			
			$this->skills 				= ORM::factory('skills');
		}
	}
	
	/**
	 * StandardObject Class is an extendable class which contains a default object functions
	 */
	class StandardObject
	{
		/**
		 * Initalization of this class
		 *
		 * @param object to extend
		 * @return void
		 */
		public function __construct($object)
		{
			$this->extend($object);
		}
		
		protected function extend($object) 
		{
			$object_variables = get_object_vars($object);
			
			foreach($object_variables as $field => $value) 
			{
				$this->$field = $value;
			}
		}
	}
	
	/**
	 * Profile Class which contains the profile information.
	 */
	class Profile extends StandardObject
	{
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct()
		{
			$this->extend(ORM::factory('profile'));			
		}
		
		public function full_name($include_middle_name = false)
		{
			$middle_name = ($include_middle_name) ? ' ('.$this->middle_name.') ' : '';
			
			return $this->first_name.' '.$middle_name.' '.$this->last_name;
		}
	}
	
	/**
	 * Profile Class which contains the profile information.
	 */
	class ContactDetails extends StandardObject
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
	}
	
?>