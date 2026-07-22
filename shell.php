<?php
$host = $_GET['host'];
$cmd = "ping -c 1 $host";
echo "<pre>";
system($cmd);
echo "</pre>";
?>
