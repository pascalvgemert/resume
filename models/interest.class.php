<?php

	/* LOAD DEPENDECIES */
	require_once('presenters/interestdto.class.php');
	
	/**
	 * Interest Class which contains the interest information.
	 */
	class Interest extends StandardModel
	{
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct($poInterest)
		{
			$this->extend($poInterest);	
		}
		
		public function get()
		{
			return new InterestDTO($this);
		}
	}