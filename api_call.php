<?php
$id=$_GET['id'];
$url="https://reqres.in/api/users/".$id;
$ch = curl_init();
$curlConfig = array(
    CURLOPT_URL            => $url,
    CURLOPT_HTTPGET           => true,
    CURLOPT_RETURNTRANSFER => true,
    
);
curl_setopt_array($ch, $curlConfig);
$result = curl_exec($ch);
curl_close($ch);
$res=json_decode($result,true);
if($res==null){
    echo 'email not found'; 
}
else{
    $data=$res['data'];
    $email=$data['email'];
    echo $email;
}
