<?php
  ob_start();
  session_start();
  include('lib/config.php');
  if((isset($_SESSION['username'])) and (isset($_SESSION['name'])))
  {
  $user=$_SESSION['username'];
	$rs=mysql_query("select * from register where email='$user'");
	$r=mysql_fetch_array($rs);

	$rs1=mysql_query("select * from reject where email='$user'");
	$num1=mysql_num_rows($rs1);
	if($num1>0)
	{
	header("location:rej.php");
	exit();
	}
	$rs2=mysql_query("select * from total where email='$user'");
		$num2=mysql_num_rows($rs2);
		$r2=mysql_fetch_array($rs2);
		$time=$r2['time'];
	if($time>10)
	{
	header("location:https://otmonitoring-otmonitoring.c9.io/result.php");
	exit();
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
<br />
<div class="container">
<div class="panel panel-info">
	<form method="post" id="test" role="form" action="">
<div class="panel-heading"><i class="fa fa-question-circle fa-4x">&nbsp;&nbsp;Question&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>00:60</span></i></div>
<div class="panel-body">
<div class="well well-lg">
<p id="question"></p></div>
<br/>
<ul class="list-group">
<input type="hidden" id="qid" value="" />
<input type="hidden" id="uid" value="<?php echo $user;?>" />
<li class="list-group-item list-group-item-success"><input type="radio" value="" name="ans1" id="one" /><label for="ans1" id="one1"></label></li>
<li class="list-group-item list-group-item-info"><input type="radio" value="" name="ans1" id="two"/><label for="ans2" id="two2"></label></li>
<li class="list-group-item list-group-item-warning"><input type="radio" value="" name="ans1" id="three"/><label for="ans3" id="three3"></label></li>
<li class="list-group-item list-group-item-danger"><input type="radio" value="" name="ans1" id="four"/><label for="ans4" id="four4"></label></li>

</ul>
<div class="panel-footer">
<input type="submit" value="submit" name="submit" id="submit"/>
*Press Enter to skip
</form></div>
</div>
</div>
</div>
<script type="text/javascript" src="js/jquery-2.1.0.js"></script>
<script type="text/javascript" src="js/tsubmit.js"></script>
<script type="text/javascript" src="js/result.js"></script>
<script type="text/javascript" src="js/timer.js"></script>
</body>	
</html>
