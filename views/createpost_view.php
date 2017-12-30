<?php 
// require '../blog.php';


$categories =BLOG\DB\get('categories',$conn)->fetchAll();



?>
<!DOCTYPE html>
<html>
<head>
	<title>Create post</title>
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
	<h1>Create a post</h1>

	<form action="" method="post">
	<ul>
		<li>
			<label for="title">Title:</label>
			<input type="text" name="title" id="title">
		</li>
			<?=$_SESSION['email'];?>
		<li>
			<label for="body">Body: </label>
			<textarea name="body" id="body"></textarea> 
		</li >
		<li>
		
		<h2>Category</h2>

			<select name="category_id" id="category_id">
			<?php foreach ($categories as $category) : ?>
			  <option value="<?=$category['id']?>"><?=$category['title']?></option>
			<?php endforeach ;?>
			</select> 
		</li >
		<li>
		<li>
			<input type="submit" value="Create post">
		</li>
			<?php if ($_SESSION['email']=='hossam@gmail.com') : ?>
		<a href="./createcategory.php"> Create new category</a>
		<?php endif  ?>


		</li>

		<li>
		<a href="./category.php">Return</a>

		</li>

	</ul>
	<?php if(isset($status) ): ?>
	<p><?=$status;?></p>
	<?php endif; ?>

</form>

</body>
</html>


