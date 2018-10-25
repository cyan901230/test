<?
require('./config.php');

$arrs['email']=$_POST['v1'];
$arrs['pass'] =$_POST['v2'];

$row = $db->qlogin($arrs,"user");

$dates = date("Ymd");
$log = "logs";

if($row['idx']){
	$arr['idx']="";
	$arr['wr_1']="success";
	$arr['wr_2']=$_POST[v1];
	$arr['wr_3']=$dates;
	$db->in($arr,$log);
	echo "1";
}else{
	$arr['idx']="";
	$arr['wr_1']="fail";
	$arr['wr_2']=$_POST[v1];
	$arr['wr_3']=$dates;
	$db->in($arr,$log);
	echo "";
}
?>
