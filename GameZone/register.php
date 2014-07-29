<?php

require 'core.php';
require 'conn.php';
if(!loggedin())
{

//echo 'register';
if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['firstname'])&&isset($_POST['lastname']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$password_again=$_POST['password_again'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$password_hash=md5($password);
if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($lastname))
{
if($password!=$password_again)
{
echo '<br>'.'password do not match ! please enter same password'.'<br><br>';

}
else
{
$query="SELECT username FROM mytable WHERE username='$username'";
$query_run=mysql_query($query);
if(mysql_num_rows($query_run)==1)
{
echo "username already exists";

}
else
{

$query= "INSERT INTO `mytable`(`id`, `username`, `password`, `firstname`, `lastname`) VALUES ('','$username','$password_hash','$firstname','$lastname')";
if($query_run=mysql_query($query))
{
//echo 'hello';
?><br><br><a href="indexlogin.php">--->GO BACK TO LOGIN PAGE<---</a><br><br>

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


}
else
{

echo "<script  type='text/javascript'>\n";
echo "alert('MUST FILL ALL FIELDS plzz!!!!');\n";
echo "</script>";
echo "<script>";
echo 'x=prompt (“Enter ur name”, “ ”);';
echo "document.write(“Good Morning  “+x)";
echo "</script>";



}
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/register.css"/>
</head>


<div id="header">
<img src="nen.jpg">
</div>
<hr>
<body>



<div id="mainbody">
<div id="mainbodypart">
<script type="text/javascript">
function change()
{
doucument.form.text.style.backgroundColor="#2f7220";
}

</script>
<div id="head"><font align="center" size="4"  color="#2f7220"style="italic" align="center">Register here...<br>Please fill all details..</font></div>

<div id="box">
<table cellspacing="4" cellpadding="15" align="center">
<form action="register.php" method="POST">
<tr><th>USERNAME :</th><td><input type="text" name="username" value="<?php if(isset($username)){ echo $username;}?>" ></td></tr>
<tr><th>PASSWORD :</th><td><input type="password" name="password"></td></tr>
<tr><th>PASSWORD AGAIN :</th><td><input type="password" name="password_again"></td></tr>
<tr><th>FIRSTNAME :</th><td><input type="text" name="firstname" value="<?php if(isset($firstname)){ echo $firstname;}?>" ></td></tr>
<tr><th>LASTNAME :</th><td><input type="text" name="lastname" value="<?php if(isset($lastname)){echo $lastname;}?>" ></td></tr>
<tr><th><input type="submit" value="register"><input type="reset" value="reset"></th></tr>
</form>
</table>
</div>
</div>
<br>

</div>





<div id="foot">
<font color="black" size="3" align="center" leftmargin="30px"><b>Copyright &copy.All rights reserved.</b></font>
</div>
<?php
}
else if(loggedin())
{

echo 'you\'r already register and logged in !!';
}

?>