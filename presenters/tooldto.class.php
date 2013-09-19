<?php

	/**
	 * ToolDTO Class which contains the tool transfer information.
	 */
	class ToolDTO extends StandardDTO
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
	}