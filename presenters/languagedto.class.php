<?php

	/**
	 * LanguageDTO Class which contains the language transfer information.
	 */
	class LanguageDTO extends StandardDTO
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
	}