<?php
include 'conn.php';
include 'core.php';
if(loggedin())
{@$email=getuserfield($email);
$name=getuserfield('firstname');

echo "<div id='welcome'><font size=3><b>Welcome &nbsp;<strong>".$name."</strong></b></font></div>";
}
@$a=$_POST['a'];
if($a && !empty($a))
{
if(loggedin())
{

mysql_query("DELETE email from signup WHERE email='$email'");

}
}

?>

<html>
<head>
<title> CastleClash </title>
 <link href="main.css" rel="stylesheet" type="text/css" />
<style>
#welcome
{	z-index:1;
position:absolute;
margin-top:135px;
margin-left:980px;
}
#up
{
position:absolute;
margin-left:1050px;
margin-top:-460px;
}
#up1
{
position:absolute;
margin-left:1120px;
margin-top:-460px;
}

.c1
{color:black;
font-size:18;
font-family:verdana;
}


</style>
</head>
<body bgcolor="grey" align="center" style="margin-top:-120px;">
  <div id="header">
            <!-- logo -->
            <a href="#" id="logo"><img src="images/logo.png"></a>

            <!-- extra top links -->
           

            <!-- navigation menu -->
            <div id="navmenu">
                <nav id="menu" style="z-index:-1;">
                    <ul>
                        <li class="active"><a href="index.php">Home</a>
                           
                        </li>
                        <li><a href="SnapShots.html">Snapshots</a>
                           
                        </li>
                        <li><a href="Guide.html">Guide</a>
                            
                        </li>
                        <li><a href="Tutorial.html">Tutorial</a>
                           
                        </li>
                        <li><a href="Faq.html">FAQ</a></li>
                      
                           
                        </li>
						   
                        <li><a href="#">Settings</a>
						 <ul>
                                <li><a href="update.php"><span class="icon elem0"></span>Change Password</a></li>
                                <li><a href="deleteaccount.php"><span class="icon elem0"></span>Delete Account</a></li>
                                <li><a href="login.php"><span class="icon elem0"></span>Logout</a></li>
                                
                            </ul>
						</li>
                    </ul>
                </nav>

                <!-- search form -->
                <div id="search" style="margin-right:200px;">
                   <h2><font style="font-family:castellar;">CastleClash</font></h2>
                </div>
            </div>
        </div>

        <footer>
            <h2><u><a href="PrivacyPolicy.html">Privacy Policy</a></u>/<u><a href="CopyRight.html">Copy Right</a></u>/<u>
<a href="ReportBug.html">Report Bug</a></u></h2>
        </footer>
<img class="img1" src="CastleClash8.jpg" style="margin-left:-800px;border-radius:25px;z-index:-1;margin-top:50px;">
<a href="https://play.google.com/store/apps/details?id=com.igg.castleclash"><img class="img2" src="Download.jpg" style="width:160px;height:50px;margin-top:450px;opacity:0.8;margin-left:300px;position:absolute;"</a>


<center><div id="box1">
<h1 class="c1" align="center" style="color:white;"><u> Other games by IGG Developer:</u> </h1>
<a href="https://play.google.com/store/apps/details?id=com.igg.pokerdeluxe"><img class="img3" src="a.jpg"style="border-radius:25px;z-index:-1;opactiy:0.7;"></a>
<a href="https://play.google.com/store/apps/details?id=com.igg.bzbee.slotsdeluxe"><img class="img3" src="b.jpg"style="border-radius:25px;z-index:-1;"></a>
<a href="https://play.google.com/store/apps/details?id=com.igg.clash_of_lords"><img class="img3" src="c.jpg"style="border-radius:25px;z-index:-1;"></a>
<a href="https://play.google.com/store/apps/details?id=com.igg.heroes_monsters"><img class="img3" src="d.jpg"style="border-radius:25px;z-index:-1;"></a>
<br></div></center>


</body>

<?php

?>

</html>




<!-- <a href="http://www.google.com"><img src="http://www.google.com/intl/en_ALL/images/logo.gif"/></a> -->