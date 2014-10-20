<?php

	namespace Models;
	
	/* LOAD DEPENDECIES */
	require_once('presenters/project.class.php');
	
	/**
	 * Project Class which contains the project information.
	 */
	class Project extends BaseModel
	{
		/* CONSTRUCTOR */
		
		public function __construct($poProject)
		{
			$this->extend($poProject);	
		}
		
		/* PUBLIC METHODS */
			
		public function get()
		{
			return new \Presenters\Project($this);
		}
	}