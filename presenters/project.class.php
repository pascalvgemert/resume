<?php

	namespace Presenters;
	
	/**
	 * Project Presenter Class which contains the interest transfer information.
	 */
	class Project extends BaseDTO
	{
		/* CONSTRUCTOR */
		public function __construct($poTool)
		{
			$this->extend($poTool);	
		}
	}