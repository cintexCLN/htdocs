<?php

if(isset($_SESSION['USER_ID']))
{
  if($_SESSION['USER_ID']=='NULL')
  {
    $_SESSION['CURRENT_STATUS']="NOT_LOGGED";
    session_start();
    $_SESSION['USER_ID'];
  }
  else
  {
    $_SESSION['CURRENT_STATUS']="LOGGED";
    //echo "<script>window.location.herf='../dashboard.php';</script>";
    #header("location:dashboard.php");
   
  }
}
#echo "<h1>sahil</h1>".print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CLN - Customer Logistic Needs</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    
  </head>

  <body>
 <nav class="navbar navbar-static-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="#"><img style="float:left;height:30px;width:70px;" src="https://www.google.com/a/cintex.ca/images/logo.gif">&nbsp&nbsp&nbspCintex International</a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Add Stock <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Remove Stock</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </nav>
    <div class="container">

      <form class="form-signin" action="login_verification.php" method="post">
        <div >
          <img src="logo.png">
        </div>
        <br><br>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pswd" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
      function process()
      {

      }
    </script>
  </body>
</html>