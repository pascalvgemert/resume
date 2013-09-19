<?php

	/* LOAD DEPENDECIES */
	require_once('models/language.class.php');
	
	/**
	 * LanguagesCollection Class which contains the language information.
	 */
	class LanguagesCollection
	{
		private $iaLanguages = array();
		
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct()
		{
			$this->collect();
		}
		
		public function all()
		{			
			return $this->iaLanguages;
		}
		
		public function sortByLevel()
		{
			usort($this->iaLanguages, function($a, $b)
			{
				if($a->level == $b->level)
				{
					return $a->title > $b->title ? 1 : -1;
				}
		
				return ($a->level > $b->level) ? -1 : 1;
			});
		}
		
		private function collect()
		{
			$laLanguages = ORM::factory('languages');	
			
			foreach($laLanguages as $loLanguage)
			{
				$loLanguage = new Language($loLanguage);
				
				$this->iaLanguages[] = $loLanguage->get();
			}
		}
	}