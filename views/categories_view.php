<?php 
echo $_SESSION['email']?>
<!DOCTYPE html>
<html>
<head>
<title>Categories</title>
<style>
	.container{width: 600 px; margin: auto;}
	form ul {padding: 0;}
	form li {list-style: none;}	
	form input[type=text], form textarea {margin-bottom: 1.5em; width:100%;}
	form textarea {width:  100%; height: 300px;}
	label {display: black;}


</style>
</head>
<body>
<form></form>
	<h1>The BLOG</h1>
	<?php foreach ($categories as $category) : ?>
	

	<h2>
		<ul>
			<li><?=$category['title']?><br>
			<h3>
				<div>
				<?php 
					$posts=BLOG\DB\query('SELECT title ,id from posts where category_id='.$category['id'],['category_id'=>$category[
						'id']], $conn )->fetchAll();
				 ?>
			</h3>
			<h4>
				 <?php foreach($posts as $post) :?>
				 		<?=$post['title'];?>
				 	<br>
					<br>				 
				</div>
				<?php endforeach ?>
			</h4>

			</li>
		</ul>
	</h2>
	<?php endforeach;?>




	<a href="./profile.php">See profile</a>
	
		


</body>
</html>