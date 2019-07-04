<?php

	// class A{
	// 	public function __construct(){
	// 		spl_autoload_register(array($this,"loadClass"));
	// 	}

	// 	public function loadClass($className){
	// 		include "./$className.php";
	// 		echo 3;
	// 	}
	// }


	// echo 1;
	// new A();
	// echo 4;
	// new B();
	// echo 7;


// 	class Factory{
// 		private $arr = array();
// 		public function __construct(){
// 			// $this->arr['A']= new A();
// 			// $this->arr['B']= new B();
// 			// $this->arr['C']= new C();
// 			spl_autoload_register(array($this,"loadClass"));
// 		}
// 		public function loadClass($className){
// 			include "./$className.php";
// 		}
// 		public function getobj($className){
// 			if(!isset($this->arr[$className])){
// 				$this->arr[$className] =new $className();
// 				return $this->arr[$className];
// 			}
// 		}
// 	}
// $objf = new Factory();
// $obja = $objf->getobj("A");
// $obja->aa();

// $objb = $objf->getobj("B");
// $objb->bb();
//位图排序
	// class Db {
	// 	private static $res;
	// 	private function __construct(){
	// 		$conn = mysqli_connect("127.0.0.1","root","root","test");
	// 		self::$res = $conn;
	// 	}

	// 	private function __clone(){

	// 	}

	// 	public static function getInstance(){
	// 		if(empty(self::$res)){
	// 			new self();
	// 		}
	// 		return self::$res;
	// 	}		
	// }
	// $conn = Db::getInstance();
	// var_dump($conn);

	// 	$conn = Db::getInstance();
	// var_dump($conn);

?>