<?php
 include('lib/config.php');
 $email=mysql_real_escape_string($_POST['user']);
 $rs=mysql_query("select * from geo");
 $rows=array();
 $table=array();
 $table['cols']=array( 
    array('label' => 'Country', 'type' => 'string'),
    array('label' => 'Marks', 'type' => 'number')
	);
	$rows=array();
	//$i=0;
 while($r=mysql_fetch_assoc($rs)){
 $temp=array();
 //$temp[]=array('v' => (int)$i);
 $temp[]=array('v' => (string)$r['country']);
 $temp[]=array('v' => (int)$r['cmarks']);
 $rows[]=array('c'=>$temp);
// $i++;
 }
 $table['rows']=$rows;
 header('Content-type: application/json');
 $jsonTable=json_encode($table);
 echo $jsonTable;
 
 
?>
 