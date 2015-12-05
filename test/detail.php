<?php
  ob_start();
  session_start();
  include('lib/config.php');
  if((isset($_SESSION['username'])) and (isset($_SESSION['name'])))
  {
  $user=$_SESSION['username'];
	$rs=mysql_query("select * from register where email='$user'");
	$r=mysql_fetch_array($rs);
	
	}
	else
	{
	header('location:https://otmonitoring-otmonitoring.c9.io/index.php');
	session_destroy();
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
	  <br>
	  <br>
	  <br>
	  <br>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading">Before Visiting Test Page</div>
<div class="panel-body">
Before Visiting Test Page<br>
The following action will lead to cancellation of your test<br>
-Exiting Full Screen Mode<br>
-Use any key except Enter<br>
</div>
<div class="panel-footer">
Note-<br>
1.)Don't move the mouse pointer out of the box<br>
2.)During the test use Mouse and Enter Key only <br>
3.)Don't resize window etc. <br>
<div class="alert alert-success" role="alert">
<a href="test.php" class="alert-link">Continue TO Test</a><br>
</div>
<div class="alert alert-danger" role="alert">
<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
<span class="sr-only">Please Check:</span>
During the test use Mouse and Enter Key only
</div>
</div>
</div>
</div>
	  <!--Body-->
	  
	  <script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
	  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	 
	
	   </body>
	  </html>
   