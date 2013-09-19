<?php

	/**
	 * ContactDTO Class which contains the contact transfer information.
	 */
	class ContactDTO extends StandardDTO
	{
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct($poContact)
		{
			$this->extend($poContact);	
		}
	}