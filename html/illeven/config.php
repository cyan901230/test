<?php
class db{

   var $conn;

   function __construct( $name="common" ){
      $dbName = $this->getDatabaseName( $name );

      $arrConf = $this->setConfig( $name );
      if(!$arrConf[1]) return false;

      $this->conn = mysqli_connect($arrConf[0], $arrConf[1], $arrConf[2], false);
      mysqli_select_db($this->conn, $dbName);

      mysqli_query($this->conn, "SET NAMES utf8") or die(mysqli_error($this->conn));
      //mysqli_query($this->conn, "SET NAMES utf8") or die();

   }

   function sel($dbname){
      mysqli_select_db($dbname, $this->conn);
   }

   function getDatabaseName( $nm ){
//      $_nm = "";
      switch( $nm ){
         case "common" :
            $_nm = "cyan";
         break;
         case "inplay" :
            $_nm = "inplay";
         break;
         case "compass" :
            $_nm = "homepage";
         break;
         case "inplaylog" :
            $_nm = "inplaylog";
         break;
      }
      return $_nm;
   }

   function setConfig( $nm ){
      $conf = trim("localhost@@cyan@@shot9012");
    	$arrConf = explode("@@", $conf);
      return $arrConf;
   }

   function close(){
      if($this->conn){
         @mysqli_close($this->conn);
      }
   }

   //일반퀴리
   function q($sql){
      //$result = mysqli_query($sql) or die("<script>alert('DataBase error.');document.location.href='/';</script>");
      $var = Null;
      $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
      //$result = mysqli_query($this->conn, $sql) or die();
      if(!$result){
         return $var;
      }
      $i=0;
      while ($row = mysqli_fetch_assoc($result)){

         $var[$i++] = $row;
      }
      mysqli_free_result($result);
      return $var;
   }
   
	function qlogin($arrs, $dbname){
		$sql="SELECT * FROM $dbname WHERE email='$arrs[email]' AND pass='$arrs[pass]'";
		$result = mysqli_query($this->conn, $sql);
		$data = mysqli_fetch_array($result);
		return $data;
	}

   //퀴리 한줄만 얻기
   function ql($sql){
      $data=$this->q($sql);
      if(!$data) return false;
      $data2=$data[0];
      return $data2;
   }

   //저장용 퀴리
   function sq($sql){
      //$result=mysqli_query($sql) or die("<script>alert('DataBase error.');document.location.href='/';</script>");
      $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
      //$result = mysqli_query($this->conn, $sql) or die();
      return true;
   }

   //한개의 값만 얻어오기
   function qo($sql){
      $data=$this->ql($sql);
      $value = Null;
      if($data)
         list($key, $value) = each($data);
      //print_r($sql);
      return $value;
   }

   //데이타 넣기
   function in($arr, $dbname){
      foreach($arr as $key=>$val){

         //$filed[]=($val == Null) ? "`$key` = null" : "`$key` = '".str_replace("'", "\'", $val)."'";
         $filed[]=($val === Null || $val == "") ? "`$key` = default" : "`$key` = '".addslashes(stripslashes($val))."'";
      }
      $view=join(",", $filed);
      //if($where) $where=" where " . $where;
      $sql="insert into $dbname set $view";    //sql문 생성
      //echo $sql;

      $data=$this->sq($sql);
   }

   //데이타 업데이트
   function up($arr, $dbname, $where){
      foreach($arr as $key=>$val){
         //$val = ($val == Null) ? Null : str_replace("'", "\'", $val);
         $val = ($val === Null || $val == "") ? Null : addslashes($val);
         $filed[]=($val === Null) ? "`$key` = default" : "`$key` = '".$val."'";

      }
      $view=join(",", $filed);
      if($where) $where=" where " . $where;
      $sql="UPDATE $dbname set $view $where";    //sql문 생성
      $data=$this->sq($sql);
   }

   //데이타 수정하기 up=up+1 이 되게
   function up2($dbname, $arr, $where=''){
      foreach($arr as $key=>$val){
         if( (!find_str($val, "+") && !find_str($val, "-") && !find_str($val, "*") ) && is_string($val)){
            $val="'".$val."'";
         }
         $filed[]="$key = '$val'";
      }
      $view=join(",", $filed);
      if($where) $where=" where " . $where;
      $sql="update $dbname set $view $where";    //sql문 생성
      $data=$this->sq($sql);

      return $data;
   }

   //최근 auto_increment 값
   function auto(){
      $sql="select LAST_INSERT_ID()";
      $val=$this->qo($sql);
      return $val;
   }

   //에러 첵킹
   function error($info){
      if (DB::isError($info)){
         if($this->debug){
            //mysqlerror($info->getDebugInfo());
         }else{
            //mysqlerror("DB 에러");
         }
      }
   }

   function autoUpdate($board_data, $table_name, $where=Null, $str_header="put_", $tailnum=0){
      $arr_fields = array_keys($board_data);
      for($i=0;$i<sizeof($arr_fields);$i++){
         if(!strstr($arr_fields[$i],$str_header)){
            continue;
         }
         $table_field_name = str_replace($str_header,"",$arr_fields[$i]);

         if($tailnum != 0){
            $len = strlen($tailnum);

            if(substr($table_field_name, strlen($table_field_name) - $len) != $tailnum){
               continue;
            }
            else{
               $table_field_name = substr($table_field_name, 0, strlen($table_field_name) - $len);
            }
         }
         $up[$table_field_name] = ($board_data[$arr_fields[$i]] === null || $board_data[$arr_fields[$i]] == "") ? null : stripslashes($board_data[$arr_fields[$i]]);
         //$up[$table_field_name] = stripslashes($board_data[$arr_fields[$i]]);
      }

      if($where == Null){
         return $this->in($up,$table_name);
      }
      else{
         return $this->up($up,$table_name,$where);
      }
   }
}

$db = new db;
?>
