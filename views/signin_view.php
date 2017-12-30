<!DOCTYPE html>
<html>
<head>
  <title>Sign in</title>
</head>
<body>
 <form action="../signin.php" method="POST"> 
  <h1>Please sign in</h1>

  <label for="first_name">Email</label><br>
  <input type="text" name="email" id="email"><br>

  <label for="password">Password:</label><br>
  <input type="password" name="password" id="password"><br>


  <input type="submit" name="submit" value="Sign in">
  <br>

  <?=$_GET['msg']?>

</form>
</body>
</html