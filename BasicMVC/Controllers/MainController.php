<?php
/*
 * Created on May 16, 2013
 *
 */
 
 class MainController
 {
 	
 	function homepage()
 	{
 		require_once ("Views/MainView.php");
 		
 	}
 	
 	function aboutme()
 	{
 		require_once ("Views/AboutView.php");
 	}
 	
 	function blog()
 	{
 		require_once ("Views/BlogView.php");
 	}
 	
 	function contact()
 	{
 		require_once ("Views/ContactView.php");
 	}
 	
 }
 
?>
