<?php
  ob_start();
  session_start();
  include('lib/config.php');

if(isset($_POST['login']))
{
$username=mysql_real_escape_string($_POST['em']);
$pwd=mysql_real_escape_string($_POST['pw']);
$rs=mysql_query("select * from register where email='$username' and password='$pwd'");
$num=mysql_num_rows($rs);
if($num>0)
{
$_SESSION['username']=$username;
header('location:dashboard.php');
exit();
}
else
{
		echo "<script type='text/javascript'>alert('Incorrect Username/Incorrect Password');</script>";
}
}
?>