<?php
 include('lib/config.php');
 $email=mysql_real_escape_string($_POST['user']);
 $rs=mysql_query("select * from total");
 $rows=array();
 $table=array();
 $table['cols']=array( 
    array('label' => 'user', 'type' => 'string'),
    array('label' => 'marks', 'type' => 'number'),
	 array('label' => 'time', 'type' => 'number')
	);
	$rows=array();
	//$i=0;
 while($r=mysql_fetch_assoc($rs)){
 $temp=array();
 $temp[]=array('v' => (string)$r['email']);
 $temp[]=array('v' => (int)$r['marks']);
 $temp[]=array('v' => (float)$r['time']);
 $rows[]=array('c'=>$temp);
// $i++;
 }
 $table['rows']=$rows;
 header('Content-type: application/json');
 $jsonTable=json_encode($table);
 echo $jsonTable;
 
 
?>
 