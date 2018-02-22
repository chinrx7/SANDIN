<?php
$txt = file_get_contents('http://735b07e66e5c.sn.mynetname.net:8080/flow.txt');
$flow = explode(",",$txt);
echo "<br>flow1 " + $flow[0];
echo "<br>flow2 " + $flow[1];
echo "<br>flow3 " + $flow[2];
?>