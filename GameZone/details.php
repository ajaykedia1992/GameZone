<?php
require 'conn.php';
require 'core.php';
@$a=$_POST['t1'];
@$b=$_POST['t2'];
@$c=$_POST['r1'];
@$d=$_POST['t3'];
@$e=$_POST['t4'];
@$f=$_POST['p1'];
mysql_query("INSERT INTO signup VALUES('$a','$b','$c','$d','$e','$f')");

echo "<h2>You have Signed Up Successfully!</h2></hr>";

?>