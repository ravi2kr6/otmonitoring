<?php

    ob_start();
	session_start();
	include('lib/config.php');
	if(isset($_SESSION['username']))
	{
	$user=$_SESSION['username'];
	$rs=mysql_query("select * from admin where user='$user'");
	 $num=mysql_num_rows($rs);
		if($num==0)
	{
		header('location:index.php');
	}

	$r=mysql_fetch_array($rs);
	$rs1=mysql_query("select * from geo order by gid asc");
	$num1=mysql_num_rows($rs1);

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
      <li><a href="viewc.php"><i class="fa fa-certificate"></i>&nbsp;&nbsp;&nbsp;&nbsp;Geo Chart</a></li>
      <li><a href="viewct.php"><i class="fa fa-certificate"></i>&nbsp;&nbsp;&nbsp;&nbsp;Country Sheet</a></li>
	  <li><a href="viewt.php"><i class="fa fa-certificate"></i>&nbsp;&nbsp;&nbsp;&nbsp;Result Chart</a></li>
	  <li><a href="viewtt.php"><i class="fa fa-certificate"></i>&nbsp;&nbsp;&nbsp;&nbsp;Result Table</a></li>
	   <li><a href="viewrt.php"><i class="fa fa-certificate"></i>&nbsp;&nbsp;&nbsp;&nbsp;Rejected</a></li>
	  <li><a href="viewst.php"><i class="fa fa-certificate"></i>&nbsp;&nbsp;&nbsp;&nbsp;Enrolled</a></li>
	  
	  <li><a href="viewut.php"><i class="fa fa-certificate"></i>&nbsp;&nbsp;&nbsp;&nbsp;User</a></li>
	  
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
    <h1> Total Student Result Chart </h1>
	 <br />
	 <br />
	 <div id="chart_div" align="center"></div>
	 
</div>
</div>

	  <!--Body-->
	  <script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
	  <script src="js/jquery-ui.min.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="plugin/hamburger.js"></script>
	  <script type="text/javascript" src="js/jsapi.js"></script>
	  <script type="text/javascript">
	  var user=$("#name").val();
//Load the google visulaization API and the piechart package.
google.load('visualization','1',{'packages':['corechart']});
//Set a call BAck  to run when google visulaization API is loaded.
google.setOnLoadCallback(drawChart);
function drawChart(){
 var jsonData=$.ajax({
        data:"user="+user,
		type:"POST",
        url:"totar.php",
		datatype:"json",
		async:false
 }).responseText;
 var options = {
         title:'Total Result',
		 hAxis:{title: 'user'},
		 vAxis:{minValue:0}
 
 
 };

 
 
   var data=new google.visualization.DataTable(jsonData);

   var chart=new google.visualization.AreaChart(document.getElementById('chart_div'));
   chart.draw(data,options);
  }


</script>

	 

	   </body>
	  </html>