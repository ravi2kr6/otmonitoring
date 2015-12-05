<?php
    ob_start();
	session_start();
	include('lib/config.php');
	if(isset($_SESSION['username']))
	{
	$user=$_SESSION['username'];
	$rs=mysql_query("select * from register where email='$user'");
	$num=mysql_num_rows($rs);
	if($num==0)
	{
		header('location:index.php');
	}
	
	$r=mysql_fetch_array($rs);
	if(isset($_POST['submit']))
	{
	$old=mysql_real_escape_string($_POST['old']);
	$new=mysql_real_escape_string($_POST['new']);
	$retype=mysql_real_escape_string($_POST['retype']);
	$password=$r['password'];
	if(($old==$password) and ($new == $retype))
	{
	mysql_query("update register set password='$new' where email='$user'");
	header('location:dashboard.php');
	}
	else
	{
	echo "<script type='text/javascript'>alert('Incorrect Username/Password'); </script>";
	}
	}
	}else
	{
	header('location:index.php');
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
	   <link rel="stylesheet" type="text/css" media="all" href="plugin/hamburger.css"/>
	   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	    <script src="plugin/modernizr.custom.js"></script>
		 <script>if(Modernizr.input.placeholder)document.getElementsByTagName('html')[0].className+=' inputplaceholder';</script>
		 </head>
	  <body>
	  <!--This wrapping container is used to get the width of the whole content-->
	  <div id="container">
	  <!--The Hamburger Button in the Header-->
  <header>
    <div id="hamburger">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </header>
	 <!--The mobile navigation Markup hidden via css-->
  <nav>
    <ul>
      <li><a href="dashboard.php"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;&nbsp;&nbsp;Home</a></li>
      <li><a href="take.php"><i class="fa fa-question-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;Take Test</a></li>
      <li><a href="result.php"><i class="fa fa-certificate"></i>&nbsp;&nbsp;&nbsp;&nbsp;Result</a></li>
      <li><a href="change.php"><i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;&nbsp;Change Password</a></li>
      <li><a href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;&nbsp;Logout</a></li>
      </ul>
  </nav>
   <!--The Layer that will be layed over the content
    so that the content is unclickable while menu is shown-->
  <div id="contentLayer"></div>
  

	  <!--The content of the site-->
  <div id="content">
 <div class="container-fluid">
<form class="form-horizontal" action="" method="post">
<div class="form-group">
<label class="col-sm-2 control-label">E-Mail</label>
<div class="col-sm-10">
<p class="form-control-static"><?php echo $r['email'];?></p>
</div>
</div>
<div class="form-group">
<label for="inputPassword" class="col-sm-2 control-label">Old Password</label>
<div class="col-sm-10">
<input type="password" class="form-control" id="inputPassword"
placeholder="Old Password" name="old">
</div>
</div>
<div class="form-group">
<label for="inputPassword" class="col-sm-2 control-label">New Password</label>
<div class="col-sm-10">
<input type="password" class="form-control" id="inputPassword"
placeholder="New Password" name="new">
</div>
</div>
<div class="form-group">
<label for="inputPassword" class="col-sm-2 control-label">Retype Password</label>
<div class="col-sm-10">
<input type="password" class="form-control" id="inputPassword"
placeholder="Retype Password" name="retype">
</div>
</div>
<button type="submit" class="btn btn-default pull-right" name="submit">Change Password</button>
</form>
</div>
</div>

	  <!--Body-->
	  <script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
 <script src="js/jquery-ui.min.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="plugin/hamburger.js"></script>
	   </body>
	  </html>