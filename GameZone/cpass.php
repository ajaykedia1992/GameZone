<?php
include 'conn.php';
include 'core.php';
@$a=$_POST['current'];
@$b=$_POST['new'];
@$c=$_POST['confirm'];
if(loggedin())
{
@$name=getuserfield('username');
}
$count=2; $count1=2;
if(!empty($a) && !empty($b) &&!empty($c))
{ 

$result=mysql_query("SELECT * FROM notregister WHERE username='$name'");
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

mysql_query("UPDATE notregister SET password='$b' where username='$name'");
echo "<div id='match'>Your Password is successfully Changed</div>";

}
?>