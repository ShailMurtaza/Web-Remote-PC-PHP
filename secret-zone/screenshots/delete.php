<?php
	$namee=$_GET['namee'];
	$out=shell_exec("del captured\\".$namee." /f /s /q");
	echo $out
	#"""header("Location: scree.html");"""
?>