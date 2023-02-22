<?php


/**
 * Example of Static properties
*/



 // class StaticExamples
 // {
 // 	static public $name="shalu";
 // }
 // echo StaticExamples::$name;

// class StaicExamples
// {
// 	static public $names="Annu Pandey";
// }
// class child extends StaicExamples
// {
// 	public function showName()
// 	{
// 		return parent::$names;
// 	}
// }
// echo child::$names;
// $obj=new child();
//  echo $obj->showName();




/**
 * Example of Static methods
*/


class StaicExamples
{
	static public $names="Annu Pandey";
}
class child extends StaicExamples
{
	static public function showName()
	{
		return parent::$names;
	}
}
echo child::showName();

?>