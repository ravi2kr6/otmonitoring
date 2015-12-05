<?php
  include('lib/config.php');
   $email=mysql_real_escape_string($_POST['user']);  
   mysql_query("insert into reject set email='$email'");
   header("location:rej.php");
?>
  