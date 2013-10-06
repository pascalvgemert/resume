<?php

	namespace Models;
	
	/* LOAD DEPENDECIES */
	require_once('presenters/interest.class.php');
	
	/**
	 * Interest Class which contains the interest information.
	 */
	class Interest extends BaseModel
	{
		/* CONSTRUCTOR */
		
		public function __construct($poInterest)
		{
			$this->extend($poInterest);	
		}
		
		/* PUBLIC METHODS */
			
		public function get()
		{
			return new \Presenters\Interest($this);
		}
	}