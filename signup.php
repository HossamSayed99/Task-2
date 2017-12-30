<?php 
require 'db.php';
use  Blog\DB;

$conn=DB\connect($config);

if(!$conn) die('Problem'); 

$data=[];

if($_SERVER['REQUEST_METHOD']=='POST')
{

	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$pass_1=$_POST['pass_1'];
	$pass_2=$_POST['pass_2'];
	$gender=$_POST['gender'];
	$check=BLOG\DB\query('SELECT id from users Where email= :email',['email'=>$email],$conn);

	if(empty($first_name)|| empty($last_name)|| empty($email) ||empty($pass_1)|| empty($pass_2) || empty($gender) )
	{

		$data['status']='Please fill all fields';
	}
	else if ($pass_1!=$pass_2) {
		$data['status']='please re-confirm password';
	}

	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$data['status']='please use a valid email';
	}

	else if ($check== true){
		 	$data['status']='This email has already been used'; 
	}
	else{

		BLOG\DB\query("INSERT INTO users(first_name,last_name,email,password,gender) values( :first_name, :last_name, :email, :password, :gender)",['first_name'=>$first_name , 'last_name'=>$last_name,
				'email'=>$email,
				'password'=>password_hash("$pass_1",PASSWORD_DEFAULT),
				'gender'=>$gender],
			$conn);
		$data['status']='user has been added';
	}
// view ('signup_view.php', ['conn'=>$conn]);
	header("location: http://localhost/task2/views/signup_view.php?msg=".$data['status']);
}
