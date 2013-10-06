<?php

	namespace Presenters\Collections;
	
	use \Libraries\ORM as ORM;
	
	/* LOAD DEPENDECIES */
	require_once('models/tool.class.php');
	
	/**
	 * Tools Collection Class which contains the tool information.
	 */
	class Tools
	{
		private $iaTools = array();
		
		/* CONSTRUCTOR */
		
		public function __construct()
		{
			$this->collect();
		}
		
		/* PUBLIC METHODS */
		
		public function all()
		{			
			return $this->iaTools;
		}
		
		public function sortByLevel()
		{
			usort($this->iaTools, function($a, $b)
			{
				if($a->level == $b->level)
				{
					return $a->title > $b->title ? 1 : -1;
				}
		
				return ($a->level > $b->level) ? -1 : 1;
			});
		}
		
		/* PRIVATE METHODS */
		
		private function collect()
		{
			$laTools = ORM::factory('tools');	
			
			foreach($laTools as $loTool)
			{
				$loTool = new \Models\Tool($loTool);
				
				$this->iaTools[] = $loTool->get();
			}
		}
	}