 <?php
  include("db_connect.php");


  include('./session.php');
  
  errorIfLogged();


  if($_SERVER['REQUEST_METHOD']=="POST")
  {

    $username=mysqli_real_escape_string($db,$_POST['username']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password = md5($password);

    $sql="SELECT * FROM `users` where username='$username' and password='$password'";
    $result=$db->query($sql);
    $role=$result->fetch_assoc();
      //dd($result);

  
    if($role['role']=="admin")
    {
      $_SESSION['login_user']=$username;
      header("location:admin/index.php"); 
    }

    else if($role['role']=="user")
    {
      $_SESSION['login_user']=$username;
      header("location:index.php"); 
    }

    else
    {
      $error="Your login name or password is invalid";
      echo $error;
    }
  }
?>
<html>
<html lang="en">
   <head>
      <title>Login Page</title>
      <?php require_once('includes/head.php'); ?>    
   </head>
   

   <body>
	    
      <?php include('includes/nav.php'); ?>
    </br>
  </br>
  <h2 style="margin-top:150px:">

 <h2 align="center">LOGIN</h2>
  </br>
  <div class="container">
  <div class="jumbotron">
  <form method="post" action="">

      <label>Username</label>
      <input type="text" name="username" class="form-control">
    
      <label>Password</label>
      <input type="password" name="password" class="form-control">
      <br>
      <button type="submit" class="btn btn-primary" value="submit">Login
      </button> <br> <br>
      Create a New Account.<br>
      Fast and easy!<br>
      <a href="register.php">Sign up</a>
  </form>

</div>
</div>
      <?php require_once('includes/footer.php'); ?>
      <?php require_once('includes/script.php'); ?>
   </body>
</html>