<?php
include 'conn.php';
include 'core.php';
@$a=$_POST['opass'];
@$b=$_POST['npass'];
@$c=$_POST['cpass'];
if(loggedin())
{
@$name=getuserfield('email');
}
$count=2; $count1=2;
if(!empty($a) && !empty($b) &&!empty($c))
{ 

$result=mysql_query("SELECT * FROM signup WHERE email='$name'");
while($row=mysql_fetch_array($result))
{
if($row['password']!=$a)
{ $count=1;
echo "<div id='match'>password doesn't match with current password..</div>";
}
else
$count=0;
if($b!=$c)
{
$count1=1;
echo "<div id='match'>New Password and Confirm Password aren't match..!!</div>";
}
else
$count1=0;
}

}
if($count==0 && $count1==0)
{

mysql_query("UPDATE signup SET password='$b' where email='$name'");
echo "<div id='match'>Your Password is successfully Changed</div>";

}
?>
<html>
<head>
<style>
#match
{
margin-top:100px;
margin-left:500px;

}
#home
{
margin-top:50px;
}
</style>
<link href="text.css" type="text/css" rel="stylesheet">
</head>
<body>
<center><div id="home"><a href="castleclash.php"><h3>Home</h3></a></div></center>
<div id="box1"><br><br><br><br><br>
<form action="update.php" method="post" style="margin-top:100px;">
<table align="center">
<tr><td><strong style="black;">Old Password</strong></td> <td><input type="password" name="opass" size="20"/></td></tr>
<tr>
<tr><td><strong style="black;">New Password</strong></td> <td><input type="password" name="npass" size="20"/></td></tr>
<tr><td><strong style="black;">Confirm Password </strong></td> <td><input type="password" name="cpass" size="20"/></td></tr>
<tr>
<td><input type="submit" name="update" style="border-radius:10px;"/></td>
<td><input type="reset" name="reset" value="Reset" style="border-radius:10px;"/></td></tr>
</table>
</form>
</div>
</body>
</html>