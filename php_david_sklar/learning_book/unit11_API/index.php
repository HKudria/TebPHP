<?php
session_start();
$url = 'https://www.php.net/releases/?json';
$getinfo = json_decode(file_get_contents($url));

if(!empty($_SESSION['last_time'])){
  echo "Ostatni raz tytaj bylesz " . $_SESSION['last_time'] . "<br>";
  $_SESSION['last_time'] = date("F j, Y, g:i a");
} else {
  $_SESSION['last_time'] = date("F j, Y, g:i a");
  echo "Wszedlesz na strone pierwszy raz" . "<br>";
}



foreach ($getinfo as $key) {
  // echo "<pre>";
  // print_r($key);
  // echo "</pre>";
  echo $key->date . "<br>";
  echo $key->announcement->English ?? '';
  echo "<hr>";
}

$c = curl_init($url);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$curl = json_decode(curl_exec($c));

echo "<hr><hr>";

foreach ($curl as $key) {
  echo $key->date . "<br>";
  echo $key->announcement->English ?? '';
  echo "<hr>";
}




$params = array('Hkudria' => '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',);
//$url = "https://api.github.com/user" . http_build_query($params);
$url = "https://api.github.com/users/Hkudria";
$c = curl_init($url);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
curl_setopt($c, CURLOPT_USERAGENT,'Hermanski');
echo "<pre>";
print_r(json_decode(curl_exec($c)));
echo "</pre>";
 ?>
