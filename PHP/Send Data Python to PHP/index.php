<?php
$string = file_get_contents("data.json");
$json_a = json_decode($string, true);
echo $json_a['age']; # Note that 'fruit' doesn't work:
                     # PHP Notice:  Array to string conversion in /var/www/html/JSONtest.php on line 4
                     # Array
?>