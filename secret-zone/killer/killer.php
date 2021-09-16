<?php
$pidkill=$_GET['pid'];

$out=shell_exec('taskkill /F /PID '.$pidkill);

//$out=shell_exec('msg *'.' '.'Your computer is going to shutdown in '.$username.' seconds Ha ha ha ! from shail');
//echo '<pre>'.$out.$username.'</pre>';
//echo '<pre>'.$username.'</pre>';
//echo '<pre>'.'Computer will shutdown in '.$username.' seconds'.'</pre>';
header("Location: tasklist.php"); 
?>
