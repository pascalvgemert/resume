<?php

	/**
	 * Singleton ORM Class, will handle all the object data received from mocked json
	 */
	class ORM 
	{
		/**
		 * Initialization of the statis object 
		 * @var object 
		 */
		private static $ioDataobject = null;

		/**
		 * Initalization of this class
		 *
		 * @return void
		 */
		public function __construct() {}
		
		/**
		 * Setting the mocked data
		 *
		 * @return void
		 */
		static public function setData($pstrData)
		{
			self::$ioDataobject = @json_decode($pstrData);
		}
		
		/**
		 * Factorizing static object of the chosen object
		 *
		 * @return object
		 */
		static public function factory($pstrObjectTitle)
		{
			return self::getObject($pstrObjectTitle);
		}
		
		private function getObject($pstrObjectTitle)
		{
			return (@isset(self::$ioDataobject->$pstrObjectTitle)) ? self::$ioDataobject->$pstrObjectTitle : null;
		}
	}