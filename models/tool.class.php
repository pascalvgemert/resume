<?php

	/* LOAD DEPENDECIES */
	require_once('presenters/tooldto.class.php');
	
	/**
	 * Tool Class which contains the tool information.
	 */
	class Tool extends StandardModel
	{
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct($poTool)
		{
			$this->extend($poTool);	
		}
		
		public function get()
		{
			return new ToolDTO($this);
		}
	}