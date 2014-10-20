<?php

	namespace Controllers;
	
	/* LOAD DEPENDENCIES */
	require_once('services/resume.class.php');
	
	/**
	 * The main resume contoller
     */
	
	class Resume
	{
		private $ioParent;
		private $ioResumeService;
			
		/* CONSTRUCTOR */
		
		public function __construct($poParent)
		{
			$this->ioParent 		= $poParent;
			$this->ioResumeService 	= new \Services\Resume($this->ioParent->ioViewController);
		}
		
		/* PUBLIC METHODS */
		
		/**
		 * Call show function of Resume Controller
		 *
		 * @params array $paParams
		 */
		public function show($paParams = array())
		{
			$this->ioResumeService->buildResume();
		}
	}
	