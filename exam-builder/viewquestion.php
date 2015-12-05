<?php

    ob_start();
	session_start();
	include('lib/config.php');
	if(isset($_SESSION['username']))
	{
	$user=$_SESSION['username'];
	$rs=mysql_query("select * from etest.add where username='$user'");
		$num=mysql_num_rows($rs);
		if($num==0)
	{
		header('location:index.php');
	}

	$r=mysql_fetch_array($rs);
	$rs1=mysql_query("select * from questions order by qid asc");

	$num1=mysql_num_rows($rs1);
	if(isset($_POST["submit"]))
        {
           $file = $_FILES['file']['tmp_name'];
           $handle = fopen($file, "r");
           $c = 0;
           while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
           {
            $sub_id = $filesop[0];
            $question = $filesop[1];
			$ans1= $filesop[2];
			$ans2= $filesop[3];
			$ans3= $filesop[4];
			$ans4= $filesop[5];
			$ans = $filesop[6];
$sql = mysql_query("INSERT INTO questions (sub_id, question,ans1,ans2,ans3,ans4,ans) VALUES ('$sub_id','$question','$ans1','$ans2','$ans3','$ans4','$ans')");
}
if($sql){
echo "You database has imported successfully";
}else{
echo "Sorry! There is some problem.";
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
      <li><a href="viewhit.php"><i class="fa fa-question-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;Question Frequency</a></li>
      <li><a href="viewquestion.php"><i class="fa fa-certificate"></i>&nbsp;&nbsp;&nbsp;&nbsp;View Question</a></li>
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
    <div class="row">
	<div class="col-md-1 col-md-offset-7">
	<a href="addques.php"><i class="fa fa-plus"></i></a>
	</div>
	<div class="col-md-2">
	<form name="import"  method="post" action="" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="submit"><i class="fa fa-file-excel-o"></i></button>
	</form>
	*CSV Supported
	</div>
     </div>
	 <br />
	 <br />
	 <span>Question</span>
	 <br>
	 <div class="table-responsive">
	 <table class="table table-striped">
	 <thead>
	 <tr>
	 <th>Ques ID</th>
	 <th>Question</th>
	 <th>Action</th>
	 </thead>
	 </tr>
	 <tbody>
	  <?php if($num1>0){ $i=1; while($r1=mysql_fetch_array($rs1)){ ?>
	 <tr>
	 
	 <td><?php echo $r1['qid']; ?></td>
	 <td><?php echo $r1['question']; ?></td>
	 <td><a href="viewfullques.php?id=<?php echo $r1['qid']; ?>"><i class="fa fa-folder-open-o"></i></a>&nbsp;<a href="delete.php?id=<?php echo $r1['qid']; ?>"><i class="fa fa-trash-o"></i></a>&nbsp;<a href="changeques.php?id=<?php echo $r1['qid']; ?>"><i class="fa fa-edit"></i></a></td>
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