<?php

	/* LOAD DEPENDECIES */
	require_once('presenters/careerdto.class.php');
	
	/**
	 * Career Class which contains the education information.
	 */
	class Career extends StandardModel
	{
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct($poCareer)
		{
			$this->extend($poCareer);	
		}
		
		public function get()
		{
			return new CareerDTO($this);
		}
	}