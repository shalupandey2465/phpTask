<?php
// sleep(10);
// abstract class Exampleclass 
// {

// 	public $name;
// 	public $age;
// 	public $adress;
// 	private $abc;

// 	/**
// 	 * This is constructor method when the object 
// 	 * of class is created this method will called 
// 	 * automatically
// 	*/
// 	const LEAVING_MESSAGE = "<h6>Thank you for visiting W3Schools.com!</h6><br/>";

// 	function __construct()
// 	{
// 		echo "<h1>Welcome to my page</h1><br/>";
// 	}


//     /**
// 	 * This  method is used to set data 
// 	*/


// 	function set_data($name,$adress)
// 	{
// 		$this->name=$name;
// 		$this->age=$age;
// 		$this->address=$adress;
// 	}


//      /**
// 	 * This  method is used to get data 
// 	*/

// 	final public function get_data()
// 	{
// 	    return "I am ".$this->name.", I am staying in ".$this->address."<br/><br/>";
// 	}

//        abstract public function intro() : string;
// 	/**
// 	 * This method will called automatically when the execution of script will stoped
// 	*/

// 	public function __destruct()
// 	{
// 		echo "This is End of the scripts";
// 	}

// 	// function message()
// 	// {
// 	// 	return 'hi';
// 	// }

// }

// // $obj=new Exampleclass();
// // $obj->set_data('Shalu Pandey' ,'Deoria');
// // echo $obj->get_data();
// // echo $obj->message();



// class classExampleForInheritance extends Exampleclass
// {

//    // const LEAVING_MESSAGE = "<h6>Thank you for visiting W3Schools.com!abcdef</h6><br/>";
//    // function __construct($data_name,$data_value)
// // 	{
//    //        $this->data_name=$data_name;
//    //        $this->data_value=$data_value;
// // 	}

//     function get_costant_values()
// 	{
// 		echo self::LEAVING_MESSAGE;
// 	}

// 	// public function intro() : int{

//     //      return 10;
// 	// }

// 	public function intro() : string {
//     return "<h4>Choose German quality!</h4><br/>";
//   }


// 	function __destruct()
// 	{
// 		echo "Data name ".$this->data_name." ,data value ".$this->data_value;
// 	}

// 	// public function get_data()
// 	// {
// 	//     return "I am ".$this->name.", I am staying in ".$this->address." Happy<br/><br/>";
// 	// }
	

// }

// $childClassObj=new classExampleForInheritance('pro','green');
// $childClassObj->set_data('Annu Pandey','Gorakhpur');
// echo $childClassObj->get_data();
// $childClassObj->get_costant_values();
// echo $childClassObj->intro();
// echo classExampleForInheritance::LEAVING_MESSAGE;




// class SleepAwakeExample
// {
   

  

// 	public $name;
// 	public $age;
// 	public $address;
	
// 	function __construct($names ,$ages , $addres)
// 	{
// 		//  ini_set('display_errors', 1);
// 	   // ini_set('display_startup_errors', 1);
// 	   // error_reporting(E_ALL);

// 		$this->name=$names;
// 		$this->age=$ages;
// 		$this->address=$addres;
// 	}

//    function __sleep()
// 	{
	
// 		return array('name','age');
// 	}

// 	function __wakeup()
// 	{
// 		$wakeup_data = "<h3>This is wakeup method</h3><br/>";
// 		return $wakeup_data;
// 	}

// 	function __destruct()
// 	{
// 		return  "I am ".$this->name." , i am ".$this->age." years old , i am from ".$this->address;
// 	}

// }
// $classObj=new SleepAwakeExample('Annu Pandey', 20 ,'Deoria');
// $serialize_data=serialize($classObj);
// $unserialize_data=unserialize($serialize_data);
// print_r($unserialize_data); 
// echo $classObj->__destruct();

// echo $classObj->__sleep();
// echo $classObj->__wakeup();



/**
 * This class is for getter and setter example
 */
class GetterSetterExample
{
	
	// function __construct(argument)
	// {
		
	// }

	// public $name;
	 private $name;

	 private $private_data=array('Name'=>'Shalu Pandey' , 'Age' => 20 , 'Address'=>'Deoria');
	 // public $private_data=array('Name'=>'Shalu Pandey' , 'Age' => 20 , 'Address'=>'Deoria');
	  public function show_data()
	  {
	  	return $this->name;
	  }
	public function __get($p)
	{
		echo "Trying to access non existing key($p)";
	}

	//  public function __get($p)
	// {
	// 	if(array_key_exists($p,$this->private_data))
	// 	{
	// 		return $this->private_data[$p];
	// 	}
	// 	else
	// 	{
	// 		return "Trying to access non existing key($p)";
	// 	}
	// }

	public function __set($p,$val)
	{
		if(property_exists($this, $p))
		{
			return $this->$p=$val;
		}
		else
		{
			return "Trying to access non existing key:$p";
		}
	}

}

$classObj = new GetterSetterExample();
$classObj->name="Annu Pandey";
echo $classObj->show_data();
// echo $classObj->Name;

?>