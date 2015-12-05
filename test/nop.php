<?php
  include('lib/config.php');
  $email=mysql_real_escape_string($_POST['user']);  //email from the user
  $qid= mysql_real_escape_string($_POST['qid']);   //question id
  $timespent= mysql_real_escape_string($_POST['timespent']); //timespent on the page
  $rs=mysql_query("select * from questions where qid='$qid'");   //getting correct ans
  $r=mysql_fetch_array($rs);  
  $result=mysql_query("select country from register where email='$email'");
  $e=mysql_fetch_array($result);
  $c=$e['country'];
  $sub=$r['sub_id'];
  $cans=$r['ans'];   //correct ans
  $question=$r['question'];  //question
  $marks=0;  //marks is zero bcz not attempted
  mysql_query("insert into result set qid='$qid',correctanswer='$cans',marks='$marks',time='$timespent',email='$email',nop='y'");
  
  /**question frequency***/
  $rs1=mysql_query("select * from hit where qid='$qid'");
  $num1=mysql_num_rows($rs1);
  if($num1>0)
  {
   $r1=mysql_fetch_array($rs1);
   mysql_query("update hit set count=count+1 where qid='$qid'");
   }
  else
  {
   mysql_query("insert into hit set question='$question',qid='$qid',count='1'");
  }
   /**total frequency***/
  $rs2=mysql_query("select * from total where email='$email'");
  $num2=mysql_num_rows($rs2);
  if($num2>0)
  {
   $r2=mysql_fetch_array($rs2);
    mysql_query("update total set marks=marks+'$marks',time=time+'$timespent' where email='$email'");
  }
  else
  {
   mysql_query("insert into total set email='$email',marks='$marks',time='$timespent',tcountry='$c'");
  }
  /**Done****/
  $rs3=mysql_query("select avg(marks) from total where tcountry='$c'");
  $r3=mysql_fetch_array($rs3);
  $av=$r3['avg(marks)'];
  $rs4=mysql_query("select * from geo where country='$c'");
  $num4=mysql_num_rows($rs4);
  if($num4>0)
  {
    mysql_query("update geo set cmarks='$av' where country='$c'");
  }
  else
  {
   mysql_query("insert into geo set country='$c',cmarks='$av'");
  }
  //geo ends
?>
