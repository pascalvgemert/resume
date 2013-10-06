<?php

	namespace Libraries;
	
	/**
	 * Singleton ORM Class, will handle all the object data received from mocked json
	 */
	class ORM 
	{
		private static $ioDataobject = null;

		/* CONSTRUCTOR */
		
		public function __construct() {}
		
		/* PUBLIC METHODS */
		
		static public function setData($pstrData)
		{
			self::$ioDataobject = @json_decode($pstrData);
		}
		
		static public function factory($pstrObjectTitle)
		{
			return self::getObject($pstrObjectTitle);
		}
		
		/* PRIVATE METHODS */
		
		private function getObject($pstrObjectTitle)
		{
			return (@isset(self::$ioDataobject->$pstrObjectTitle)) ? self::$ioDataobject->$pstrObjectTitle : null;
		}
	}