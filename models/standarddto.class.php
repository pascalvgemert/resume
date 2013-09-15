<?php
	
	/**
	 * StandardModel Class is an extendable class which contains a default object functions
	 */
	class StandardDTO
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