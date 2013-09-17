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
		private static $data_object = null;

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
		static public function setData($data)
		{
			self::$data_object = @json_decode($data);
		}
		
		/**
		 * Factorizing static object of the chosen object
		 *
		 * @return object
		 */
		static public function factory($object_title)
		{
			return self::getObject($object_title);
		}
		
		private function getObject($object_title)
		{
			return (@isset(self::$data_object->$object_title)) ? self::$data_object->$object_title : null;
		}
	}

?>