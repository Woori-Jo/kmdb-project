


<?php
$ch = curl_init();
$url = 'http://api.koreafilm.or.kr/openapi-data2/wisenut/search_api/search_json2.jsp';
$queryParams = [
   'collection' => 'kmdb_new2',
   'nation' => '대한민국',
   'ServiceKey' => '58R1EJUD14R0JHTZ55Q4',
   'val001' => '2018',
   'val002' => '01',
];


$url .= '?' . http_build_query($queryParams);


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$response = curl_exec($ch);


if ($response === FALSE) {
   echo 'cURL Error: ' . curl_error($ch);
}


curl_close($ch);


// var_dump($response);
echo $response
?>


