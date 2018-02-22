<?php
$txt = file_get_contents('http://735b07e66e5c.sn.mynetname.net:8080/flow.txt') or die echo("cannote read");

echo "flow1";
echo $txt;
?>