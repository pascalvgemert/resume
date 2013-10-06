<?php

	namespace Models;
	
	/* LOAD DEPENDECIES */
	require_once('presenters/language.class.php');
	
	/**
	 * Language Class which contains the language information.
	 */
	class Language extends BaseModel
	{
		/* CONSTRUCTOR */
		
		public function __construct($poLanguage)
		{
			$this->extend($poLanguage);	
		}
		
		/* PUBLIC METHODS */
		
		public function get()
		{
			return new \Presenters\Language($this);
		}
	}