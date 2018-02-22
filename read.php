<?php
$flowfile = fopen("http://735b07e66e5c.sn.mynetname.net:8080/flow.txt","r") or die("Unable to open file");
echo fge($flowfile);
fclose($flowfile);
?>