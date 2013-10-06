<?php

	namespace Models;
	
	/* LOAD DEPENDECIES */
	require_once('presenters/career.class.php');
	
	/**
	 * Career Class which contains the education information.
	 */
	class Career extends BaseModel
	{
		/* CONSTRUCTOR */
		
		public function __construct($poCareer)
		{
			$this->extend($poCareer);	
		}
		
		/* PUBLIC METHODS */
		
		public function get()
		{
			return new \Presenters\Career($this);
		}
	}