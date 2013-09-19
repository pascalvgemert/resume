<?php

	/* LOAD DEPENDENCIES */
	require_once('models/profile.class.php');
	require_once('presenters/collections/educationscollection.class.php');
	require_once('presenters/collections/careerscollection.class.php');
	require_once('presenters/collections/skillscollection.class.php');
	require_once('presenters/collections/languagescollection.class.php');
	require_once('presenters/collections/toolscollection.class.php');
	require_once('presenters/collections/interestscollection.class.php');
	require_once('models/contact.class.php');
	
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
		
		public function buildResume()
		{
			$this->loadProfileInformation();
			$this->loadExperiences();
			$this->loadAbilities();
			$this->loadInterests();
			$this->loadContactInformation();
		}
		
		/****** PRIVATE METHODS ******/
		
		private function loadProfileInformation()
		{
			$loProfile = new Profile();
			
			$this->ioViewController->assign('profile', $loProfile->get()); // $loProfile->get() returns dto
		}	
		
		private function loadExperiences()
		{
			$this->loadEducations();
			$this->loadCareers();
		}	
		
		private function loadAbilities()
		{
			$this->loadSkills();
			$this->loadLanguages();
			$this->loadTools();
		}	
		
		private function loadEducations()
		{
			$loEducationsCollection = new EducationsCollection();
			
			$loEducationsCollection->sortByDate();
			
			$this->ioViewController->assign('educations', $loEducationsCollection->all());
		}
		
		private function loadCareers()
		{
			$loCareersCollection = new CareersCollection();
			
			$loCareersCollection->sortByDate();
			
			$this->ioViewController->assign('careers', $loCareersCollection->all());
		}
		
		private function loadSkills()
		{
			$loSkillsCollection = new SkillsCollection();
			
			$loSkillsCollection->sortByLevel();
			
			$this->ioViewController->assign('skills', $loSkillsCollection->all());
		}	
		
		private function loadLanguages()
		{
			$loLanguagesCollection = new LanguagesCollection();

			$loLanguagesCollection->sortByLevel();
			
			$this->ioViewController->assign('languages', $loLanguagesCollection->all());
		}	
		
		private function loadTools()
		{
			$loToolsCollection = new ToolsCollection();
			
			$loToolsCollection->sortByLevel();
			
			$this->ioViewController->assign('tools', $loToolsCollection->all());
		}	
		
		private function loadInterests()
		{
			$loInterestCollection = new InterestsCollection();
			
			$loInterestCollection->sortByName();
			
			$this->ioViewController->assign('interests', $loInterestCollection->all());
		}	
		
		private function loadContactInformation()
		{
			$loContact = new Contact();
			
			$this->ioViewController->assign('contact', $loContact->get());
		}	
	}
	