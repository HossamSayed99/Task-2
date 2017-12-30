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

	$stmt=BLOG\DB\query('SELECT * FROM posts Where user_id= :user_id',['user_id'=>$user_id['id']],$conn);
if ($stmt==false)
{
	header("location: http://localhost/task2/createpost.php");
}
else
{
	$posts=	BLOG\DB\query('SELECT * FROM posts Where user_id= :user_id',['user_id'=>$user_id['id']],$conn)->fetch();
	$categories=BLOG\DB\query('SELECT * FROM categories WHERE id='.$posts['category_id'],['id'=>$posts['category_id']], $conn )->fetch();



	print_r($categories);



	DB\view('views/profile_view.php',
			['posts'=>$posts,
			 '$categories'=>$categories,
			'conn'=>$conn]);


}

}

