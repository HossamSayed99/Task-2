<?php 
require 'db.php';
use  Blog\DB;

$conn=DB\connect($config);

if(!$conn) die('Problem'); 

$data=[];
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$_SESSION['email']=$email;



	// check all
	if(empty($email)|| empty($password))
	 {

		$data['status']='Please fill all fields';
		header("location: http://localhost/task2/views/signin_view.php?msg=".$data['status']);
	 }  

	// check email
	else
	{
		$id=BLOG\DB\query('SELECT id from users Where email= :email',['email'=>$email],$conn)->fetch();
	 
		$check_email=BLOG\DB\query('SELECT id from users Where email= :email',['email'=>$email],$conn);

		if(!$check_email)
		 {
			$data['status']='Please enter a valid email';
			header("location: http://localhost/task2/views/signin_view.php?msg=".$data['status']);
		 }
		// check pass
		else
		 {
		  $original_pass=BLOG\DB\query('SELECT id,password from users Where email= :email',['email'=>$email],$conn)->fetch();
		  $check_pass=password_verify($password,$original_pass['password']);
		  if ($check_pass==false) {
		  	$data['status']='please enter a valid password';
		  header("location: http://localhost/task2/views/signin_view.php?msg=".$data['status']);

		 }
		else
		 {

		  	header("location: http://localhost/task2/category.php");
		 }
	}} 	 
 

}
