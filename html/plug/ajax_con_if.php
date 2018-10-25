<?php 
$pagename = "sport346456s";
$arrData = $_REQUEST;
require("./config.php");//여기서 $pagename때문에 $arrData 초기화됨
//db 테이블 만들때 index key 설정 해서 select query 할때 속도 증가
		// 로그인 2차 검증

		$DataArr = Array();

		$DataArr['leagueidx'] = $arrData['leagueidx'];
		$DataArr['useridx'] = $arrData['useridx'];

	if($arrData['onoff'] == "on"){//ajax onoff 받아서 insert delete 구분 (햇던건대생각못함)
		$db->in($DataArr, "favorites");
		header("Access-Control-Allow-Origin: *");
		header('Content-Type: application/json');
		$arrResult = setResultArray(1, 1, "즐겨찾기가 등록 되었습니다.");//?? 리저트,코드,메세지
		die(json_encode($arrResult));
		exit;
	}else if($arrData['onoff'] == "off"){
		$query = "DELETE FROM `favorites` WHERE `leagueidx`='".$DataArr['leagueidx']."'";
		$db->sq($query);
		header("Access-Control-Allow-Origin: *");
		header('Content-Type: application/json');
		$arrResult = setResultArray(1, 2, "즐겨찾기가 삭제 되었습니다.");
		die(json_encode($arrResult));
		exit;
	}
?>