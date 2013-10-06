<?php

	namespace Presenters;
	
	/**
	 * Interest Presenter Class which contains the interest transfer information.
	 */
	class Interest extends BaseDTO
	{
		/* CONSTRUCTOR */
		public function __construct($poTool)
		{
			$this->extend($poTool);	
		}
	}