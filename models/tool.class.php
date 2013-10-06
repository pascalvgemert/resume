<?php

	namespace Models;
	
	/* LOAD DEPENDECIES */
	require_once('presenters/tool.class.php');
	
	/**
	 * Tool Class which contains the tool information.
	 */
	class Tool extends BaseModel
	{
		/* CONSTRUCTOR */
		
		public function __construct($poTool)
		{
			$this->extend($poTool);	
		}
		
		/* PUBLIC METHODS */
		
		public function get()
		{
			return new \Presenters\Tool($this);
		}
	}