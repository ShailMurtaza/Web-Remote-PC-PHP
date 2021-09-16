<?php
$username=$_GET['time'];

$out=shell_exec('shutdown /s /f /t '.$username);

$out=shell_exec('msg *'.' '.'Your computer is going to shutdown in '.$username.' seconds Ha ha ha ! from shail');

//echo '<pre>'.$out.$username.'</pre>';
//echo '<pre>'.$username.'</pre>';
//echo '<pre>'.'Computer will shutdown in '.$username.' seconds'.'</pre>';
header("Location: index.html"); 
?>
