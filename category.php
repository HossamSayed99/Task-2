<?php 
use Blog\DB;
require 'db.php';
session_start();
if (!isset($_SESSION['email']))
{
	header("location: http://localhost/task2/views/signup_view.php");
}
else
{	
	$conn=DB\connect($config);

	if(!$conn) die('Problem'); 


// get($tablename, $conn , $limit =10)
//fetch allposts
$categories= DB\get('categories',$conn);
// $posts= DB\get('posts',$conn)->fetchAll();
// foreach ($categories as $category) 
// {
// 	$posts=BLOG\DB\query('SELECT title from posts where category_id='.$category['id'],['category_id'=>$category_id], $conn )->fetchAll();
// }


// extract(['post'=>$post]);

	DB\view('views/categories_view.php',
		['categories'=>$categories,
		'conn'=>$conn]
);

// echo $name = getName();

// var_dump($test);

// <pre>
// 				  <?php foreach ($posts as $post) {
// 					echo($post['title']);
// 					echo "<br>";
// 				   } 


}