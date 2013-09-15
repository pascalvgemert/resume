<?php

	/* LOAD DEPENDENCIES */
	require_once('models/resumeservice.class.php');
	
	/**
	 * The main resume contoller
     * 
	 * @author      Pascal van Gemert <pascal@pascalvangemert.nl>
	 * @version     1.0 
     * @package     Resume
	 */
	
	class ResumeController
	{
		private $ioParent;
		private $ioResumeService;
			
		/****** CONSTRUCTOR ******/
		
		public function __construct($poParent)
		{
			$this->ioParent 		= $poParent;
			$this->ioResumeService 	= new ResumeService($this->ioParent->ioViewController);
		}
		
		/****** PUBLIC METHODS ******/
		
		public function show($paParams = array())
		{
			$this->ioResumeService->load();
		}
		
		/****** PRIVATE METHODS ******/
		

	}
	