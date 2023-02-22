<?php
  
  // require('filefirst.php');
  // require('filesecond.php');

	// function __autoload($class_name) 
	// {
	//     require_once $class_name .".php";
	// }

	spl_autoload_register(function ($class_name) {
	    include $class_name . '.php';
	});

  $first_obj = new filefirst();
  $second_obj = new filesecond();

?>