<?php

	namespace Presenters\Collections;
	
	use \Libraries\ORM as ORM;
	
	/* LOAD DEPENDECIES */
	require_once('models/career.class.php'); 
	
	/**
	 * Careers Collection Class which contains the career information.
	 */
	class Careers
	{
		private $iaCareers = array();
		
		/* CONSTRUCTOR */
		
		public function __construct()
		{
			$this->collect();
		}
		
		/* PUBLIC METHODS */
		
		public function all()
		{			
			return $this->iaCareers;
		}
		
		public function sortByDate()
		{
			// TO DO
		}
		
		/* PRIVATE METHODS */
		
		private function collect()
		{
			$laCareers = ORM::factory('careers');	
			
			foreach($laCareers as $loCareer)
			{
				$loCareer = new \Models\Career($loCareer);
				
				$this->iaCareers[] = $loCareer->get();
			}
		}
	}