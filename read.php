<?php
$txt = file_get_contents('http://735b07e66e5c.sn.mynetname.net:8080/flow.txt');
$flow = explode(",",$txt);
echo "flow1 " + $flow[0] + "\r\n";
echo "flow2 " + $flow[1] + "\r\n";
echo "flow3 " + $flow[2] + "\r\n";
?>