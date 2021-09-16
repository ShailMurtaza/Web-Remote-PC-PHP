<?php
$namee=$_GET['nam'];
$out=shell_exec('sha.exe '.$namee);
header("location: http://192.168.0.10/php-command-executions/secret-zone/screenshots/scree.html");
?>