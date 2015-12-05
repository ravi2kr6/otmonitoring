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
    if(isset($_GET['id']))
	{
	$qid=$_GET['id'];
	$rs1=mysql_query("delete from register where uid='$qid'");
    header('location:viewst.php');
	}
	}else
	{
	header('location:index.php');
	exit();
	}
	
	?>