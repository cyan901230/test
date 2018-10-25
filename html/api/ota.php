

<?php
$aa=$_POST['con'];
  $client_id = "QU_vCUAFzgKiyLNhtO7i";
  $client_secret = "QUyCwTk87D";
  $aa="안녕하세여";
  $encText = urlencode($aa);
  $url = "https://openapi.naver.com/v1/search/errata.json?query=".$encText;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, $is_post);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $headers = array();
  $headers[] = "X-Naver-Client-Id: ".$client_id;
  $headers[] = "X-Naver-Client-Secret: ".$client_secret;
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $response = curl_exec ($ch);
  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close ($ch);
$obj=json_decode($response, true);
    echo $obj[errata];

  
?>