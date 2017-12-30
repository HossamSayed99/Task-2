<!DOCTYPE html>
<html>
<head>
  <title>sign up</title>
</head>
<body>
 <form action="../signup.php" method="POST"> 
  <h1 style="text-align: center;">Welcome to my site</h1>

  <label for="first_name">First name:</label><br>
  <input type="text" name="first_name" id="first_name"><br>

  <label for="last_name">Last name:</label><br>
  <input type="text" name="last_name" id="last_name"><br>

  <label for="email">Email</label><br>
  <input type="text" name="email" id="email"><br>

  <label for="pass_1">Password</label><br>
  <input type="password" name="pass_1" id="pass_1"><br>

  <label for="pass_2">Re-enter password</label><br>
  <input type="password" name="pass_2" id="pass_2"><br>



  <label for="gender">Gender</label><br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br>


  <input type="submit" name="submit" value="Sign up">
  <br>

  <?php if ($_GET['msg']=='user has been added')
  {
    header("location: http://localhost/task2/views/signin_view.php");
  }
  else 
  {
    echo $_GET['msg'];
  }

  ?>



</form>
</body>
</html>