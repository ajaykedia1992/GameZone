<?php
require 'conn.php';
require 'core.php';
if(loggedin())
{
@$a=$_POST['a'];
if(!empty($a))
{
@$email=getuserfield("email");
mysql_query("DELETE FROM signup where email='$email'");
session_destroy();
header('Location: login.php');
}
}
?>
<html>
<head>
<style>

</style>
</head>
<body style="height:640px;
padding:0;
	margin:0;
	background:url(a1.jpg);
        background-color:black;
        background-size:cover;
	background-repeat:no-repeat;
	background-attachment:fixed;">
<center><div id="box1" style="background-color:black;color:darkblack;margin-top:300px;width:910;height:200px;opacity:0.6;background:url('a1.jpg');font-size:25px;border-radius:10px;border:10 solid;">
<br><br><br><center><form action="deleteaccount.php" method="post" >
<input type="checkbox" name='a' value='1'><b><strong>Are you sure want to delete this account</strong></b>
<input type="submit" name="Delete" value="  Delete  " style="border-radius:10px;"></center>
</div></center>
</body>
</html>