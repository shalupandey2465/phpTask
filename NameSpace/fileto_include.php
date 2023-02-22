<?php

  /**
   * Here I include all files which contains same class name
  */

  include('first.php');
  include('second.php');

  $first_file_obj = new first\NameSpaceExample();
  // $second_file_obj = new second\NameSpaceExample();

  function Greeting()
  {
  	echo "When you include the files this file will greeted you";
  }

  // Greeting();
  second\Greeting();
?>