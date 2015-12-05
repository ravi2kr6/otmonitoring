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
    $rs1=mysql_query("select * from category");
	$num=mysql_num_rows($rs1);
	if(isset($_GET['id']))
	{
	$qid=$_GET['id'];
	$rs2=mysql_query("select * from questions where qid='$qid'");
	$num2=mysql_num_rows($rs2);
	$r2=mysql_fetch_array($rs2);
	if(isset($_POST['submit']))
	{
	$question=mysql_real_escape_string($_POST["question"]);
	$category=mysql_real_escape_string($_POST["category"]);
	$ans1=mysql_real_escape_string($_POST["ans1"]);
	$ans2=mysql_real_escape_string($_POST["ans2"]);
	$ans3=mysql_real_escape_string($_POST["ans3"]);
	$ans4=mysql_real_escape_string($_POST["ans4"]);
	$ans=mysql_real_escape_string($_POST["ans"]);
	mysql_query("update questions set sub_id='$category',question='$question',ans1='$ans1',ans2='$ans2',ans3='$ans3',ans4='$ans4',ans='$ans' where qid='$qid'");
	echo "<script>alert('Question Updated Successfully');</script>";
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

  <div class="alert alert-info" role="alert">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
<span class="sr-only"></span>
Add Your Question Here
</div>
 <form action="" method="post" role="form">
 <div class="form-group">
 <label class="col-md-4 control-label" for="exampleInputEmail">Subject</label>
 <div class="col-md-8">
 <select class="form-control" name="category">
 <?php if($num>0){$i=1; while($r1=mysql_fetch_array($rs1)){ ?>
 <option value="<?php echo $r1['id'];?>" <?php if($r1['id']==$r2['sub_id']){echo "selected";}?>><?php echo $r1['cat_name'];?></option>
 <?php $i++; }} ?>
 </select>
 </div>
 </div>
 <br>
 <br>

 <div class="form-group">
 <label class="col-md-4 control-label" for="exampleInputEmail">Question:</label>
 <div class="col-md-8">
 
 <textarea id="mytextarea" class="form-control" placeholder="Add Your Question Here" name="question"><?php echo $r2['question']; ?> </textarea>
 </div>
   <br>
 <br>
 </div>
  <br>
 <br>
 
  <br>
 <br>
  <br>
 <br>
  <div class="form-group">
 <label class="col-md-4 control-label" for="exampleInputEmail">Option 1:</label>
 <div class="col-md-8">
 <input type="text" class="form-control" placeholder="Add Option 1" name="ans1" value="<?php echo $r2['ans1']; ?>"> 
 </div>
 </div>
  <br>


 <br>
  <div class="form-group">
 <label class="col-md-4 control-label" for="exampleInputEmail">Option 2:</label>
 <div class="col-md-8">
 <input type="text" class="form-control" placeholder="Add Option 2" name="ans2" value="<?php echo $r2['ans2']; ?>"> 
 </div>
 </div>
  <br>
 <br>
 
  <div class="form-group">
 <label class="col-md-4 control-label" for="exampleInputEmail">Option 3:</label>
 <div class="col-md-8">
 <input type="text" class="form-control" placeholder="Add Option 3" name="ans3" value="<?php echo $r2['ans3']; ?>"> 
 </div>
 </div>
  <br>
 <br>
 
  <div class="form-group">
 <label class="col-md-4 control-label" for="exampleInputEmail">Option 4:</label>
 <div class="col-md-8">
 <input type="text" class="form-control" placeholder="Add Option 4" name="ans4" value="<?php echo $r2['ans4']; ?>"> 
 </div>
 </div>
  <br>
 <br>
  <div class="form-group">
 <label class="col-md-4 control-label" for="exampleInputEmail">Correct Answer:</label>
 <div class="col-md-8">
 <input type="text" class="form-control" placeholder="Enter Complete Answer" name="ans" value="<?php echo $r2['ans']; ?>"> 
 </div>
 </div>
  <br>
 <br>
 
 <div class="form-group">
 <button type="submit" name="submit" class="btn-block btn-primary form-control">Submit</button>
 </div>
 </form>
 </div>

</div>

	  <!--Body-->
	  <script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
	  <script src="js/jquery-ui.min.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="plugin/hamburger.js"></script>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
	  <script>tinymce.init({selector:'textarea'});</script>



	   </body>
	  </html>