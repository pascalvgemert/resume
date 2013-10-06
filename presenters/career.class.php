<?php
	
	namespace Presenters;
	
	/**
	 * Career Presenter Class which contains the career transfer information.
	 */
	class Career extends BaseDTO
	{
		/* CONSTRUCTOR */
		
		public function __construct($poCareer)
		{
			$this->extend($poCareer);	
		}
	}