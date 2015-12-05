<?php
ob_start();
session_start();
include('lib/config.php');
$cap = 'notEq';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['captcha'] == $_SESSION['cap_code']) {
        // Captcha verification is Correct. Do something here!
        $cap = 'Eq';
		if(isset($_POST['submit']))
		{
		$fname=mysql_real_escape_string($_POST['fname']);
		//echo $fname;
		$uname=mysql_real_escape_string($_POST['uname']);
		$email=mysql_real_escape_string($_POST['email']);
		$password=mysql_real_escape_string($_POST['pwd']);
		$bday=mysql_real_escape_string($_POST['bday']);
		$country=mysql_real_escape_string($_POST['country']);
		$hash = md5( rand(0,1000) );
		//$avatar=mysql_real_escape_string($_POST['avatar']);
		$gender=mysql_real_escape_string($_POST['inlineRadioOptions']);
		$result=mysql_query("select * from register where username='".$uname."' or email='".$email."'");
		$num=mysql_num_rows($result);
		   if($num>0)
		             {
		             echo '<script type="text/javascript">alert("Username/E-Mail Id already Exist");</script>';
		             header('location:index.php');
		             exit();
		             }
	
	    $result=mysql_query("insert into register set username='$uname',password='$password',email='$email',birthday='$bday',country='$country',gender='$gender',name='$fname',hash='$hash'");
        if($result==false)
         {
     	echo mysql_error();
        }
     
     echo '<script type="text/javascript">alert("Please Login To Continue");</script>';		
    	

}
		
		 }
		  else {
        // Captcha verification is wrong. Take other action
        $cap = '';
		echo "<script type='text/javascript'>alert('Incorrect Captcha');</script>";
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
	  <link href="plugin/jquery.datetimepicker.css" rel="stylesheet">
	  <link href="css/style.css" rel="stylesheet">
	  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="plugin/example.wink.css">
	  <link href="plugin/css/flags.css" rel="stylesheet">
	  <link rel="stylesheet" href="plugin/build/css/countrySelect.css">
	 
	   <script src="plugin/modernizr.custom.js"></script>
	   <script>if(Modernizr.input.placeholder)document.getElementsByTagName('html')[0].className+=' inputplaceholder';</script>
	  <style type="text/css">
<!--
.style2 {font-size: medium}
-->
      </style>
</head>
	  <body style="background-color:black">
	  	
	  </style>>
	  <!--Navigation Bar-->
	     <nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
         <div class="container-fluid">
           <p class="navbar-text">Data Visualization</p>
          <form class="navbar-form navbar-right" role="login" action="login.php" method="post">
           <div class="form-group">
           <input type="text" class="form-control" id="exampleInputname2" placeholder="E-Mail" name="em">
           </div>
           <div class="form-group">
           <input type="password" class="form-control login-field  login-field-password"  id="password-1" placeholder="Password" name="pw">
           </div>
           <button type="submit" class="btn btn-default" name="login">Sign In</button>
           </div>
		   </form>
           </div>
	       </nav>
		   <!--Navigation Bar Ended-->
		   <!--Container -->
		   <div class="wrapper" style="background-image:url(img/Testing_mainbanner.jpg)">
		   <div class="container">
		   <!--Body-->
		  
		  
	  <!--Signup-->
	  
	  
	  <div class="col-md-6">
	  <div class="col-sm-10">
	  <button type="button" class="btn btn-lg btn-info btn-block" disabled="disabled" aria-label="Left-Align" style="margin-top: 50px;"><span class="glyphicon glyphicon-user">&nbsp;E-Test</span></button> <br>
	  </div>
	  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	  <div class="col-sm-10">
	  <input type="text" class="form-control" id="fname" placeholder="Full Name" name="fname" required>
	  </div>
	  
	  </div>
	  <div class="form-group">
	  <div class="col-sm-10">
	  <div class="input-group">
	  <div class="input-group-addon">@</div>
	  <input type="text" class="form-control" id="uname" placeholder="Username" name="uname" required>
	  <span class="username_val">
	  </span>
	  </div>
	  </div>
	  </div>
	  <div class="form-group">
	  <div class="col-sm-10">
	  <input type="email" class="form-control" id="email" placeholder="E-Mail" name="email" required>
	  </div>
	  </div>
	  <div class="form-group">
	  <div class="col-sm-10">
	  <input type="password" class="form-control login-field  login-field-password" id="password-2" placeholder="Password" name="pwd" required>
	
	  </div>
	  </div>
	  <div class="form-group">
	  <div class="col-sm-10">
	   <input id="datetimepicker1" type="text" class="form-control" placeholder="BirthDay" name="bday">
	  </div>
	  </div>
	  <div class="form-group">
	  <div class="col-sm-10">
	    <input type="text" id="country" name="country">
	  </div>
	  </div>
	  
	  
	  <div class="form-group">
	  <div class="col-sm-10">
	  <label class="radio-inline">
	  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male" checked="checked"><i class="fa fa-male fa-lg"></i></label>
	  <label class="radio-inline">
	  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female"><i class="fa fa-female fa-lg"></i></label>
	  </div>
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
	  
	  <div class="form-group">
	  <div class="col-sm-10">
	  <button type="submit" class="btn btn-default btn-block" name="submit" id="signup" style="margin-bottom: 20px;">Sign Up</button>
	  </div>
	  </div>
	  </form>
	  </div>
	 <!--Sign UP ended-->
	 </div>
	 
	 <!--Body-->
	  </div>
	  <!--Container ended-->
	
		
	  

	  <!--footer start
	  <footer class="byline">
	  <div class="row">
	  <div class="col-md-3">
	 
	  <p>About the Project</p>
	  </div>
	  <div class="col-md-3">
	  <p>Contact Us</p>
	  </div>
	  </div>
	  
	  </footer>
	  	  <!--footer ended-->
	  <script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="plugin/jquery.datetimepicker.js"></script>
	  <script type="text/javascript" src="plugin/hideShowPassword.min.js"></script>
	  <script src="plugin/build/js/countrySelect.min.js"></script>
  <script>
    $("#country").countrySelect();
  </script>
  
	  <script type="text/javascript">
	  $(':checkbox').checkboxpicker();
	  </script>
	  <script type="text/javascript">
$('#password-1').hidePassword(true);
$('#password-2').hidePassword(true);
</script>
	  <script type="text/javascript">
	  jQuery('#datetimepicker1').datetimepicker({
lang:'en',
i18n:{
en:{
months:[
'January','February','March','April',
'May','June','July','August',
'September','October','November','December',
],
dayOfWeek:[
"Sun", "Mon", "Tue", "Wed",
"Thu", "Fri", "Sat.",
]
}
},
timepicker:false,
format:'d.m.Y'
});


</script>
	  </body>
	  </html>