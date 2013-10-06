<?php
	
	namespace Models;
	
	/**
	 * BaseModel Class is an extendable class which contains a default object functions
	 */
	class BaseModel
	{
		/* CONSTRUCTOR */
		
		public function __construct($object)
		{
			$this->extend($object);
		}
		
		/* PROTECTED METHODS */
		
		protected function extend($object) 
		{
			$object_variables = (@isset($object)) ? get_object_vars($object) : array();
			
			foreach($object_variables as $field => $value) 
			{
				$this->$field = $value;
			}
		}
	}