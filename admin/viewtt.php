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
	$rs1=mysql_query("select * from total order by tid asc");
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
     <br />
	 <br />
	 <span>User Wise Result</span>
	 <br>
	 <div class="table-responsive">
	 <table class="table table-striped">
	 <thead>
	 <tr>
	 <th>ID</th>
	 <th>User</th>
	 <th>Marks</th>
	 <th>Time</th>
	 <th>Rank</th>
	 <th>Action</th>
	 </thead>
	 </tr>
	 <tbody>
	  <?php if($num1>0){ $i=1; while($r1=mysql_fetch_array($rs1)){ ?>
	 <tr>
	 
	 <td><?php echo $r1['tid']; ?></td>
	 <td><?php echo $r1['email']; ?></td>
	 <td><?php echo $r1['marks']; ?></td>
	  <td><?php echo $r1['time']; ?></td>
	 <td><?php  echo $i; ?></td>
	 <td>&nbsp;<a href="deletett.php?id=<?php echo $r1['tid']; ?>"><i class="fa fa-trash-o"></i>&nbsp;</a></td>
    
	 <?php $i++; }}else{ ?>
			No Data
			<?php } ?>
	 </tr>
	 </tbody>
	 </table>
	 </div>
</div>
</div>
</div>

	  <!--Body-->
	  <script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
	  <script src="js/jquery-ui.min.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="plugin/hamburger.js"></script>
	 

	   </body>
	  </html>