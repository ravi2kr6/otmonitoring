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
	$rs1=mysql_query("select * from total where email='$user'");
	$num4=mysql_num_rows($rs1);
	if($num4==0)
	{
	header("location:res.php");
	
	}
	$r1=mysql_fetch_array($rs1);
	$rs2=mysql_query("select count(nop) from result where email='$user'");
	$r2=mysql_fetch_array($rs2);
	$num=mysql_num_rows($rs2);
	$rs3=mysql_query("select * from result where email='$user'");
	
	$num1=mysql_num_rows($rs3);
	$rs4=mysql_query("select count(nop) from result where email='$user' and nop='y'");
	$num5=mysql_num_rows($rs4);
	$r4=mysql_fetch_array($rs4);
	
	
	
	
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
<input type="hidden" value="<?php echo $user;?>" id="name">
<br>
<div class="container-fluid">
<div id="chart_div" align="center"></div>
<br>
<div class="col-md-4 col-md-offset-4" style="background-color:#999999">
Total Marks:<?php echo $r1['marks']; ?><br>
Total Time &nbsp;:<?php echo $r1['time']; ?><br>
Total NOP &nbsp;:<?php echo $r4['count(nop)']; ?><br>
</div>
<br>
<br>
<div class="col-md-4 col-md-offset-4">
<br>
<br>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Question No.</th>
			<th>Marks</th>
			<th>Time</th>
			<th>NOP</th>
                </tr>
    </thead>
    <tbody>
        <?php if($num1>0){ $i=1; while($r3=mysql_fetch_array($rs3)){ ?>
		<tr>
		
            <td><?php echo $i; ?> </td>
            <td><?php echo $r3['marks']; ?> </td>
		    <td><?php echo $r3['time']; ?> </td>
			<td><?php echo $r3['nop']; ?> </td>
			<?php $i++; }}else{ ?>
			No Data
			<?php } ?>
        </tr>
            </tbody>
</table>
</section>
</div>
</div>
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
google.load('visualization','1.1',{'packages':['bar']});
//Set a call BAck  to run when google visulaization API is loaded.
google.setOnLoadCallback(drawChart);
function drawChart(){
 var jsonData=$.ajax({
        data:"user="+user,
		type:"POST",
        url:"ajax.php",
		datatype:"json",
		async:false
 }).responseText;
 var options = {
          chart: {
            title: 'Performance',
            subtitle: 'Question, Marks, and Time: Q1-Q15',
          }
        };

 
 //Create our data table out of JSON data loaded from SERVER.
 var data=new google.visualization.DataTable(jsonData);
 //Instantiate and draw our chart,passing in some options.
 var chart=new google.charts.Bar(document.getElementById('chart_div'));
 chart.draw(data,options);
 }


</script>

	   </body>
              
	  </html>