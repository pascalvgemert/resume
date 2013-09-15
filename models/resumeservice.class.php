<?php

	/* LOAD DEPENDENCIES */
	require_once('models/profile.class.php');
	require_once('models/skillscollection.class.php');
	/*require_once('models/languagescollection.class.php');
	require_once('models/toolscollection.class.php');
	require_once('models/interestscollection.class.php');
	require_once('models/contact.class.php');*/
	
	/**
	 * The main resume service
     * 
	 * @author      Pascal van Gemert <pascal@pascalvangemert.nl>
	 * @version     1.0 
     * @package     Resume
	 */
	
	class ResumeService
	{
		private $ioViewController;
			
		/****** CONSTRUCTOR ******/
		
		public function __construct($poViewController)
		{
			$this->ioViewController = $poViewController;
		}
		
		/****** PUBLIC METHODS ******/
		
		public function load()
		{
			$this->loadProfileInformation();
			$this->loadAbilities();
			//$this->loadInterests();
			//$this->loadContactInformation();
		}
		
		/****** PRIVATE METHODS ******/
		
		private function loadProfileInformation()
		{
			$loProfile = new Profile();
			
			$this->ioViewController->assign('profile', $loProfile->get()); // $loProfile->get() returns dto
		}	
		
		private function loadAbilities()
		{
			$this->loadSkills();
			//$this->loadLanguages();
			//$this->loadTools();
		}	
		
		private function loadSkills()
		{
			$loSkillsCollection = new SkillsCollection();
			
			$this->ioViewController->assign('skills', $loSkillsCollection->all());
		}	
		
		private function loadLanguages()
		{
			$loLanguagesCollection = new LanguagesCollection();
			
			$this->ioViewController->assign('languages', $loLanguagesCollection->all());
		}	
		
		private function loadTools()
		{
			$loToolsCollection = new ToolsCollection();
			
			$this->ioViewController->assign('tools', $loToolsCollection->all());
		}	
		
		private function loadInterests()
		{
			$loInterestCollection = new InterestCollection();
			
			$this->ioViewController->assign('interests', $loInterestCollection->all());
		}	
		
		private function loadContactInformation()
		{
			$loContact = new Contact();
			
			$this->ioViewController->assign('contact', $loContact->get());
		}	
	}
	