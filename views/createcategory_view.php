<!DOCTYPE html>
<html>
<head>
	<title>Create category</title>
	<style>
	.container{width: 600 px; margin: auto;}
	form ul {padding: 0;}
	form li {list-style: none;}	
	form input[type=text], form textarea {margin-bottom: 1.5em; width:100%;}
	form textarea {width:  100%; height: 300px;}
	label {display: black;}


	</style>
</head>
</head>
<body>
	<h1>Create a category</h1>

	<form action="" method="post">

	<ul>
		<li>
			<label for="category_title">Title:</label>
			<input type="text" name="category_title" id="category_title">
		</li>
		<li>
			<label for="post_title">post title: </label>
			<input type="text" name="post_title" id="post_title">
		</li >
		<li>
			<label for="post_body">Post Body </label>
			<textarea name="post_body" id="post_body"></textarea> 
		</li >
		<li>
			<input type="submit" value="Create category">
		</li>

		<li>
		<a href="./category.php">Return</a>

		</li>


	</ul>


	</form>

</body>
</html>