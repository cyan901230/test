<?
require('../illeven/config.php');

//echo json_encode($arr)

$favor = "favor";

if(!$_POST['fl']){
	echo "1";
	$arr['idx']="";
	$arr['wr_1']=$_POST['na'];
	$arr['wr_2']="cyan";
	$arr['wr_3']="11";
	$db->in($arr, $favor);
}else{
	echo "2";
	$arr['wr_1']=$_POST['na'];
	$arr['wr_2']="cyan";
	$arr['wr_3']="11";
	$query = "DELETE FROM favor WHERE wr_2='cyan' AND wr_1='$_POST[na]'";
	$row = $db->sq($query);
}

?>
