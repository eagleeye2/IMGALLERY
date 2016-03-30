<?php
$username='root';
$password='';
$server='localhost';
$database_name='image_gallary';
$link=mysql_connect($server,$username,$password);
$r=mysql_select_db($database_name);
/*if($r)
{
	echo 'connected';
}
else
{
	echo 'disconnected';
}
*/
?>