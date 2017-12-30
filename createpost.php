<?php 
require 'db.php';
use  Blog\DB;
session_start();
if (!isset($_SESSION['email']))
{
	header("location: http://localhost/task2/views/signup_view.php");
}

else
{

		$email=$_SESSION['email'];
		echo "$email";
		echo "\n"; 
		$conn=DB\connect($config);

		if(!$conn) die('Problem'); 

		$user_id=BLOG\DB\query('SELECT id FROM users WHERE email= :email',['email'=>$email],$conn)->fetch();

		echo $user_id['id'];
}		

$data=[];

if($_SERVER['REQUEST_METHOD']=='POST')
{


	$title=$_POST['title'];
	$body=$_POST['body'];
	$category_id=$_POST['category_id'];
	$category_title=$_POST['category_title'];


	if ($user_id==1) 
	{
					BLOG\DB\query("INSERT INTO categories(title) values ( :title)",['title'=>$category_title],$conn);

	}


	if(empty($title)|| empty($body)|| empty($category_id))
	{
		$data['status']='Please fill out both inputs';
	}
		
	else{

		BLOG\DB\query("INSERT INTO posts(title,body,category_id,user_id) values( :title, :body, :category_id, :user_id)",['title'=>$title , 'body'=>$body,
				'category_id'=>$category_id,
				'user_id'=>$user_id['id']],
			$conn);
	}
echo "$body";
echo "$title";
}

DB\view ('views/createpost_view.php', ['conn'=>$conn,'user_id'=>$user_id]);