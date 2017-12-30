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

	$category_title=$_POST['category_title'];
	$post_title=$_POST['post_title'];
	$post_body=$_POST['post_body'];

	BLOG\DB\query("INSERT INTO categories(title) values( :title)",['title'=>$category_title],$conn);



	if(empty($category_title)|| empty($post_title)|| empty($post_body))
	{
		$data['status']='Please fill out all feilds';
	}


		
	else{

		$category_id=BLOG\DB\query("SELECT id FROM categories where title= :title",['title'=>$category_title],$conn)->fetch();

	echo $category_id['id'];

	

	BLOG\DB\query("INSERT INTO posts(title,body,category_id,user_id) values( :title, :body, :category_id, :user_id)",['title'=>$post_title , 'body'=>$post_body,
				'category_id'=>$category_id['id'],
				'user_id'=>$user_id['id']],
			$conn);
	}

}

DB\view ('views/createcategory_view.php', ['conn'=>$conn,'user_id'=>$user_id]);