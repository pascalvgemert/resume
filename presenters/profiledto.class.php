<?php

	/**
	 * ProfileDTO Class which contains the profile transfer information.
	 */
	class ProfileDTO extends StandardDTO
	{
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct($poProfile)
		{
			$this->extend($poProfile);	
		}
	}