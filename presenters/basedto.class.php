<?php
	
	namespace Presenters;
	
	/**
	 * BaseModel Class is an extendable class which contains a default object functions
	 */
	class BaseDTO
	{
		/* CONSTRUCTOR */
		public function __construct($object)
		{
			$this->extend($object);
		}
		
		/* PROTECTED METHODS */
			
		protected function extend($object) 
		{
			$object_variables = get_object_vars($object);
			
			foreach($object_variables as $field => $value) 
			{
				$this->$field = $value;
			}
		}
	}