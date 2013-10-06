<?php
	
	namespace Presenters;
	
	/**
	 * Tool Presenter Class which contains the tool transfer information.
	 */
	class Tool extends BaseDTO
	{
		/* CONSTRUCTOR */
		
		public function __construct($poTool)
		{
			$this->extend($poTool);	
		}
	}