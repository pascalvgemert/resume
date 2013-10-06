<?php

	namespace Presenters;
	
	/**
	 * Contact Presenter Class which contains the contact transfer information.
	 */
	class Contact extends BaseDTO
	{
		/* CONSTUCTOR */
		
		public function __construct($poContact)
		{
			$this->extend($poContact);	
		}
	}