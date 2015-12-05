<?php
 include('lib/config.php');
 $email=mysql_real_escape_string($_POST['user']);
 $rs=mysql_query("select * from hit");
 $rows=array();
 $table=array();
 $table['cols']=array( 
    array('label' => 'Question ID', 'type' => 'number'),
    array('label' => 'Frqeuncy', 'type' => 'number')
	);
	$rows=array();
	//$i=0;
 while($r=mysql_fetch_assoc($rs)){
 $temp=array();
 //$temp[]=array('v' => (int)$i);
 $temp[]=array('v' => (int)$r['qid']);
 $temp[]=array('v' => (float)$r['count']);
 $rows[]=array('c'=>$temp);
// $i++;
 }
 $table['rows']=$rows;
 header('Content-type: application/json');
 $jsonTable=json_encode($table);
 echo $jsonTable;
 
 
?>
 