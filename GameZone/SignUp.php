<?php
require 'conn.php';
require 'core.php';

if(!loggedin())
{

//echo 'register';
if(isset($_POST['t1'])&&isset($_POST['t2'])&&isset($_POST['r1'])&&isset($_POST['t3'])&&isset($_POST['t4'])&&isset($_POST['p1']))
{ 
$firstname=$_POST['t1'];
$lastname=$_POST['t2'];
$gender=$_POST['r1'];
$gameid=$_POST['t3'];
$emailid=$_POST['t4'];
$password=$_POST['p1'];
if(!empty($firstname)&&!empty($lastname)&&!empty($gender)&&!empty($gameid)&&!empty($emailid)&&!empty($password))
{ 

$query= "INSERT INTO signup VALUES ('','$firstname','$lastname','$gender','$gameid','$emailid','$password')";

if($query_run=mysql_query($query))
{

?><div id="shift"><br><br><a href="login.php">--->GO BACK TO LOGIN PAGE<---</a><br><br></div>

<?php 
header('Location : register_success.php');

}
else
{
echo mysql_error();

echo 'we could not register you !!';
}

}



}

?>
<html>
<head>
<style>
#shift
{
position:absolute;
margin-top:200px;
}
.img1
{height:400;
width:1350;}

.c1
{color:red;
font-size:16;
font-family:verdana;}

.heading
{color:black;
 font-size:25;
 font-family:verdana;}

#a1
{color:green;}

</style>
</head>
<body bgcolor="lightblue">
<img class="img1" src="CastleClash.jpg">
<h1 class="heading" align="center"> Enter the following details </h1>
<form class="c1" align="center" action="signup.php" method="post">
<table align="center">
<tr><td>First Name</td> <td><input type="text" name="t1" size="20"/></td>
</tr>
<tr>
<td>Last Name</td> <td><input type="text" name="t2" size="20"/></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" name="r1" value="male"/>Male
<input type="radio" name="r1" value="female"/>Female</td>
</tr>
<tr><td>Game ID</td> <td><input type="text" name="t3" size="20"/></td>
</tr>
<tr><td>Email ID</td> <td><input type="text" name="t4" size="20"/></td></tr>
<tr><td>Password</td> <td><input type="password" name="p1" size="20"/></td></tr>
<tr>
<td><input type="submit" name="s1" value="SignUp"/></td>
<td><input type="reset" name="re1" value="Reset"/></td>
</tr>
</table>
</form>
<?php
}	
else if(loggedin())
{

echo 'you\'r already register and logged in !!';
}

?>
</body>