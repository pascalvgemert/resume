<?php

	/* LOAD DEPENDECIES */
	require_once('presenters/languagedto.class.php');
	
	/**
	 * Language Class which contains the language information.
	 */
	class Language extends StandardModel
	{
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct($poLanguage)
		{
			$this->extend($poLanguage);	
		}
		
		public function get()
		{
			return new LanguageDTO($this);
		}
	}