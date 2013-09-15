<?php
	
	/**
	 * StandardModel Class is an extendable class which contains a default object functions
	 */
	class StandardModel
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
			$object_variables = (@isset($object)) ? get_object_vars($object) : array();
			
			foreach($object_variables as $field => $value) 
			{
				$this->$field = $value;
			}
		}
	}