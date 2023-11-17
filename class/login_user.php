<?php
    include("class/clshome.php");
	$p= new myhome();
	if(!isset($_SESSION))
	{
		session_start();
	}
	if(isset($_SESSION['my_name']) && isset($_SESSION['my_pass'])){
		$p->confirmLogin($_SESSION['my_name'],$_SESSION['my_pass']) ;
	}
	// $a
?>