<?php

require 'core.php';
require 'conn.php';

if(loggedin())
{

$firstname = getuserfield('firstname');
$lastname=getuserfield('lastname');
echo '</br>'.'<font size="6" color="green">WELCOME</font>'.'<font size="5" color="green"> &nbsp   '.$firstname.'</font>'.'<font size="5" color="green">&nbsp'.$lastname .'&nbsp</font>';
?>
<html>
<head>
<link rel="stylesheet" href="css/indexlogin.css" type="text/css">
<div id="d">
<div id="img"><img src="nen.jpg" align="center"></div></div>
<body >

</body >


<div id="frame">

<font size="6"><i>GET your source codes here..</i></font></br>
<ul>
<li><a href="sortingscodes.html" color="black" style="text-decoration:none"><font size="4" color="green"><b>sortings</i></b></font></br></br></br></li>
<li><a href="Applicationscodes.html"color="black" style="text-decoration:none"><font size="4" color="green"><b>Applications codes</i></b></font></br></br></br></li>
<li><a href="ADTcodes.html" color="black"><font size="4" style="text-decoration:none"><font size="4" color="green"><b>ADTcodes</i></b></font></br></br></br></li>
<li><a href="Algorithmscodes.html" color="black"><font size="4" style="text-decoration:none"><font size="4" color="green"><b>Algorithms codes</b><i></i></b></font></br></li>



</div>
<form action="logout.php">
<div id="log"><input type="submit" value="log out"></div>
</form>
</html>
<?php
}
else
{
include 'user_login.php';
}
?>



</head>
