<?php

	namespace Presenters\Collections;
	
	use \Libraries\ORM as ORM;
	
	/* LOAD DEPENDECIES */
	require_once('models/language.class.php');
	
	/**
	 * Languages Collection Class which contains the language information.
	 */
	class Languages
	{
		private $iaLanguages = array();
		
		/* CONSTRUCTOR */
		
		public function __construct()
		{
			$this->collect();
		}
		
		/* PUBLIC METHODS */
		
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
		
		/* PRIVATE METHODS */
		
		private function collect()
		{
			$laLanguages = ORM::factory('languages');	
			
			foreach($laLanguages as $loLanguage)
			{
				$loLanguage = new \Models\Language($loLanguage);
				
				$this->iaLanguages[] = $loLanguage->get();
			}
		}
	}