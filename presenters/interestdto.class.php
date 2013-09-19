<?php

	/**
	 * InterestDTO Class which contains the interest transfer information.
	 */
	class InterestDTO extends StandardDTO
	{
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct($poTool)
		{
			$this->extend($poTool);	
		}
	}