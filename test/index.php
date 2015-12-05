<?php
  ob_start();
  session_start();
  include('lib/config.php');
  $cap = 'notEq';
  if(isset($_SESSION['username']))
  {
  $user=$_SESSION['username'];
	$rs=mysql_query("select * from register where email='$user'");
	$r=mysql_fetch_array($rs);
	$result=mysql_query("select * from reject where email='$user'");
	$rslt=mysql_num_rows($result);
	if($rslt>0)
	{
	echo "<script type='text/javascript'>alert('Your account is held under moderation');</script>'";
	header('location:https://otmonitoring-otmonitoring.c9.io/index.php');
	exit();
	}
	
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['captcha'] == $_SESSION['cap_code']) {
        // Captcha verification is Correct. Do something here!
        $cap = 'Eq';
	if(isset($_POST['submit']))
	{
	$name=mysql_real_escape_string($_POST['name']);
	$pwd=mysql_real_escape_string($_POST['password']);
	$name1=$r['username'];
	$password=$r['password'];
	if(($name==$name1) and ($pwd == $password))
	{
	header('location:detail.php');
	$_SESSION['name']=$name;
	}
	else
	{
	echo "<script type='text/javascript'>alert('Incorrect Username/Password'); </script>";
	}
	}
    }
    else {
        // Captcha verification is wrong. Take other action
        $cap = '';
		echo "<script type='text/javascript'>alert('Incorrect Captcha');</script>";
    }
}
	
	
    	
    }
	else
	{
	header('location:https://otmonitoring-otmonitoring.c9.io/index.php');
    exit();
	}
	?>
	
	<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>Online Test</title>
	  <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
	   <link href="css/style.css" rel="stylesheet">
	   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	    <script src="plugin/modernizr.custom.js"></script>
		 <script>if(Modernizr.input.placeholder)document.getElementsByTagName('html')[0].className+=' inputplaceholder';</script>
		 </head>
	  <body>
<div class="container">
<div class="col-xs-6 col-md-4 col-md-offset-4">
<button type="button" class="btn btn-lg btn-info btn-block" disabled="disabled" aria-label="Left-Align" style="margin-top: 50px;"><i class="fa fa-key"></i>&nbsp;&nbsp;&nbsp;&nbsp; Login</span></button> <br>
<form class="form-horizontal" method="post" role="form" action="">
<div class="form-group">
<div class="input-group">
<span class="input-group-addon" id="basic-addon1">@</span>
<input type="text" class="form-control" placeholder="Username" ariadescribedby="basic-addon1" name="name">
</div>
</div>
<div class="form-group">
<label class="sr-only" for="exampleInputPassword3">Password</label>
<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" name="password">
</div>
 <div class="form-group">
	   <div class="col-sm-10">
	  <div class="row">
	  <div class="col-sm-6">
	  <img src="captcha.php">
	  </div>
	  <div class="col-sm-6">
	  <input type="text" name="captcha" id="captcha"  class="form-control" required>
      </div>
	  </div>
	  </div>
	  </div>
	 
<button type="submit" class="btn btn-default pull-right" name="submit">Sign in</button>
</form>
</div>
</div>

	  <!--Body-->
	  <script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
	  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	 
	   </body>
	  </html>