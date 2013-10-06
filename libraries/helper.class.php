<?php

	namespace Libraries;
	
	/**
	 * Singleton Helper Class, will help the view do calculations and more
	 */
	class Helper 
	{
		/* TIMER FUNCTIONS */
		
		static public function calculateAge($pstrDate)
		{
			return floor( (time() - strtotime($pstrDate)) / 31556926);
		}
	}
