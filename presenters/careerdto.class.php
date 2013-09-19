<?php

	/**
	 * CareerDTO Class which contains the career transfer information.
	 */
	class CareerDTO extends StandardDTO
	{
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct($poCareer)
		{
			$this->extend($poCareer);	
		}
	}