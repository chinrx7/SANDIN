<?php
$flowfile = fopen("flow.txt","r") or die("Unable to open file");
echo fge($flowfile);
fclose($flowfile);
?>