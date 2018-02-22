<?php
$txt = file_get_contents('http://735b07e66e5c.sn.mynetname.net:8080/flow.txt');

echo "flow1";
$txtspt = explode(",",$txt);
echo $txtspt[0];
?>