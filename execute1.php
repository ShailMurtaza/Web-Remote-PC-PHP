<?php
$username=$_GET['time'];


$out=shell_exec('msg * '.$username);

//echo '<pre>'.$out.$username.'</pre>';
//echo '<pre>'.$username.'</pre>';
echo '<pre>'.'Computer will shutdown in '.$username.'seconds'.'</pre>';
header("Location: index.html"); 
?>
