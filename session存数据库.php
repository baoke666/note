<?php
ini_set("session.save_handler","user");
session_set_save_handler("open","close","read","write","destroy","gc");
	function open(){
		return true;
	}	

	function close(){
		return true;
	}

	function read($id){
		$conn = mysqli_connect("127.0.0.1","root","root","test");
		$sql = "select * from session where session_id='{$id}'";
		$result = mysqli_query($conn,$sql);
		$str = mysqli_fetch_assoc($result);
		return $str['data'];
	}

	function write($id,$sess_data){
		$conn = mysqli_connect("127.0.0.1","root","root","test");
		$time = time();
		$sql = "INSERT INTO session SET session_id='{$id}',data='{$sess_data}',start_time=$time";
		mysqli_query($conn,$sql);
		return true;


		/*
		$conn = mysqli_connect("127.0.0.1","root","root","test");
		$uid  = $_SESSION['uid'];
		$time = time();
		$sql = "INSERT INTO session SET session_id='{$id}',uid=$uid,start_time=$time";
		mysqli_query($conn,$sql);
		return true;
		*/
	}

	function destroy($id){
		return true;
	}

	function gc($maxlifetime){
		return true;
	}

	session_start();
	//$_SESSION["uid"]=rand(1,100);
	$name = $_SESSION['uid'];
	echo $name;
?>