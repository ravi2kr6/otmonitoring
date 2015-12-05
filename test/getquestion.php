<?php
include('lib/config.php');
//$cid=mysql_real_escape_string($_POST['id']);
$rs=mysql_query("select * from questions");
$num=mysql_num_rows($rs);
$q=rand(1,20);
$var=array();
$rs1=mysql_query("select * from questions where qid='$q'");
while($r1= mysql_fetch_array($rs1)){
$var[]=array('qid' => $r1['qid'], 'question' => $r1['question'], 'ans'=>$r1['ans1'],'ans2'=>$r1['ans2'],'ans3'=>$r1['ans3'],'ans4'=>$r1['ans4']);
   
}
 header('Content-type: application/json');
 print json_encode($var);
 
?>
