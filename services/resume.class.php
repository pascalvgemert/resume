<?php

	namespace Services;
	
	/* LOAD DEPENDENCIES */
	require_once('models/profile.class.php');
	require_once('presenters/collections/educations.class.php');
	require_once('presenters/collections/careers.class.php');
	require_once('presenters/collections/skills.class.php');
	require_once('presenters/collections/languages.class.php');
	require_once('presenters/collections/tools.class.php');
	require_once('presenters/collections/interests.class.php');
	require_once('presenters/collections/projects.class.php');
	require_once('models/contact.class.php');
	
	/**
	 * The main resume service 
	 */
	
	class Resume
	{
		private $ioViewController;
			
		/* CONSTRUCTOR */
		
		public function __construct($poViewController)
		{
			$this->ioViewController = $poViewController;
		}
		
		/* PUBLIC METHODS */
		
		public function buildResume()
		{
			$this->loadProfileInformation();
			$this->loadExperiences();
			$this->loadAbilities();
			$this->loadInterests();
			$this->loadProjects();
			$this->loadContactInformation();
		}
		
		/* PRIVATE METHODS */
		
		private function loadProfileInformation()
		{
			$loProfile = new \Models\Profile();
			
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
			$loEducationsCollection = new \Presenters\Collections\Educations();
			
			$loEducationsCollection->sortByDate();
			
			$this->ioViewController->assign('educations', $loEducationsCollection->all());
		}
		
		private function loadCareers()
		{
			$loCareersCollection = new \Presenters\Collections\Careers();
			
			$loCareersCollection->sortByDate();
			
			$this->ioViewController->assign('careers', $loCareersCollection->all());
		}
		
		private function loadSkills()
		{
			$loSkillsCollection = new \Presenters\Collections\Skills();
			
			$loSkillsCollection->sortByLevel();
			
			$this->ioViewController->assign('skills', $loSkillsCollection->all());
		}	
		
		private function loadLanguages()
		{
			$loLanguagesCollection = new \Presenters\Collections\Languages();

			$loLanguagesCollection->sortByLevel();
			
			$this->ioViewController->assign('languages', $loLanguagesCollection->all());
		}	
		
		private function loadTools()
		{
			$loToolsCollection = new \Presenters\Collections\Tools();
			
			$loToolsCollection->sortByLevel();
			
			$this->ioViewController->assign('tools', $loToolsCollection->all());
		}	
		
		private function loadInterests()
		{
			$loInterestCollection = new \Presenters\Collections\Interests();
			
			$loInterestCollection->sortByName();
			
			$this->ioViewController->assign('interests', $loInterestCollection->all());
		}	
		
		private function loadProjects()
		{
			$loProjectCollection = new \Presenters\Collections\Projects();
			
			//$loProjectCollection->sortByName();
			
			$this->ioViewController->assign('projects', $loProjectCollection->all());
		}	
		
		private function loadContactInformation()
		{
			$loContact = new \Models\Contact();
			
			$this->ioViewController->assign('contact', $loContact->get());
		}	
	}
	