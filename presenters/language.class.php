<?php

	namespace Presenters;
	
	/**
	 * Language Presenter Class which contains the language transfer information.
	 */
	class Language extends BaseDTO
	{
		/* CONSTRUCTOR */
		
		public function __construct($poLanguage)
		{
			$this->extend($poLanguage);	
		}
	}