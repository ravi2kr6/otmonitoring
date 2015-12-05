<?php
  ob_start();
  session_start();
  include('lib/config.php');
  if((isset($_SESSION['username'])) and (isset($_SESSION['name'])))
  {
  $user=$_SESSION['username'];
	$rs=mysql_query("select * from register where email='$user'");
	$r=mysql_fetch_array($rs);
	if(isset($_POST['submit']))
	{
	$reason=mysql_real_escape_string($_POST['reason']);
	mysql_query("update reject set reason='$reason' where email='$user'");
	header("location:https://otmonitoring-otmonitoring.c9.io/dashboard.php");
	
	
	}
	
	
	
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

<h1>Your test is rejected Kindly contact the administrator.</h1>
<form action="" method="post">

<br>
<br>
<div class="form-group">
<label for="reason" class="control-label col-md-4">You can state the reason for rejection here:</label>
<div class="col-md-8">
<textarea id="mytextarea" name="reason" placeholder="Reason"></textarea>
</div>
</div>
<br>
<br>

<br>
<br>
 <div class="form-group">
 <br>
 <br>
 <div class="col-md-4">
 <button type="submit" name="submit" class="btn btn-danger form-control">Submit</button>
 </div>
</div>
</form>
      <script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
	  <script src="js/jquery-ui.min.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	    <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
	    <script type="text/javascript">
        tinymce.init({
            selector: "#mytextarea"
        });
        </script>

	  
</body>
</html>
