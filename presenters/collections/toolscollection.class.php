<?php

	/* LOAD DEPENDECIES */
	require_once('models/tool.class.php');
	
	/**
	 * ToolsCollection Class which contains the tool information.
	 */
	class ToolsCollection
	{
		private $iaTools = array();
		
		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct()
		{
			$this->collect();
		}
		
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
		
		private function collect()
		{
			$laTools = ORM::factory('tools');	
			
			foreach($laTools as $loTool)
			{
				$loTool = new Tool($loTool);
				
				$this->iaTools[] = $loTool->get();
			}
		}
	}