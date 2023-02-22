<?php

   /**
    * Example of Namespace
   */

   namespace first;

   class NameSpaceExample{

   	function __construct()
   	{
   		// echo "<h4>This is First Function</h4><br/>";
   		$second_file_obj = new \second\NameSpaceExample();
   	}
   }

?>