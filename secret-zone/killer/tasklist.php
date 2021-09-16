<?php
$out=shell_exec('tasklist');
echo '<pre>'.$out.'</pre>';
?>

<html>
	<body>
	<form action="killer.php" method="get">
	<input type="number" name="pid" placeholder="Enter pid">
	<input type="submit" value="Kill" style="height:40"></form>
	</body>
	</html>
