<?php 
ob_start();
session_start();
include('lib/config.php');
if(isset($_SESSION['username']))
{
$u=$_SESSION['username'];
$rs=mysql_query("select * from etest.add where username='$u'");
$num=mysql_num_rows($rs);
if($num>0)
{
header('location:dashboard.php');
}
}
else
     {
          if(isset($_POST['submit']))
                                        {
                                         $name=mysql_real_escape_string($_POST['name']);
                                         $password=mysql_real_escape_string($_POST['password']);

                                         $rs1=mysql_query("select * from etest.add where username='$name' and password='$password'");
                                      if($rs1==false)
                                                       {
                                                          echo mysql_error();
                                                        }
                                                         $num1=mysql_num_rows($rs1);
                                                           if($num1>0)
                                                                      {
                                                                       $_SESSION['username']=$name;
                                                                       header('location:dashboard.php');
                                                                       }
                                                            else
                                                                        {
                                                                         echo '<script type="text/javascript">alert("Incorrect Username/Password");</script>';
                                                                        }
                                                             }



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
	  <body style="background-color:#CCCCCC">
<div class="container">
<br>
<br>
<br>
<br>
<br>
<br>
<div class="col-xs-6 col-md-4 col-md-offset-4" style="border:thin">
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