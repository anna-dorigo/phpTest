
<?php
class Singleton{
 	
 	static private $instance = NULL;
 	
 	private function __construct()
 	{
 			
 	}
 	
 	static function getIstance(){
 		if(self::$instance == NULL)
 		{
 			self::$instance = new Singleton();
 		}
 		return self::$instance;
 		
 	}
 	
 }
 
 ?>