<?php 
//ini_set('error_reporting', E_ALL);
include "conf.php";
//print_r($db1_constant);
$db1=new Database($db1_constant);

$db2=new Database($db2_constant);

	$db1->query('SELECT * FROM users');
	$r = $db1->single();
	echo $r['username'].'-';

	$db2->query('SELECT * FROM ibf_members order by member_id');
	$r = $db2->single();
	echo $r['name'];
	//echo"sss";
?>