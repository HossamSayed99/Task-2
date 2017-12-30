<!DOCTYPE html>
<html>
<head>
<title></title>
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
<form action="./createpost.php" method="post">
	<h1>Your posts</h1>
	<?foreach ($posts as $post) : ?>
		<h2>
			<ul>
				<li>
					<?=$posts['title'];?>
				</li>
				<li>
					<?=$posts['body'];?>
				</li>
			</ul>
		</h2>
	

 	<input type="submit" value="create post">


	

</form>
</body>
</html>