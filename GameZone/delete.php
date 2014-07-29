<?php
if(isset($_POST['delete']))
{
$conn = mysql_connect("localhost", "root", "");
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$email = $_POST['email'];

$sql = "DELETE details ".
       "WHERE email = $email" ;

mysql_select_db("castleclash",$conn);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}
?>