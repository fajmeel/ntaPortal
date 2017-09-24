<?php
$connect=mysql_connect("localhost","root","") or die ("could not Connect".mysql_error());
mysql_select_db("nta",$connect) or die ("database not selected" .mysql_error());
?>
