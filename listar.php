<?php
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "http://api.ababeen.com/api/images.php?q=laptop");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$result = curl_exec($ch);

curl_close($ch);
 $result = json_decode($result, true);
 print_r($result);


 ?>
