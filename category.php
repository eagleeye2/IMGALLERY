<?php

session_start();


require_once('connection.php');


$qu='select * from category';
$rs=mysql_query($qu);
//echo 'No of records '.$num=mysql_num_rows($rs);


?>


<html>
<head>
<link rel="stylesheet" href="home_gal.css" type="text/css">
<style>

#cat
{
	width:900px;
	height:600px;
	//background-color:#FF99CC;
	float:left;
}
#cat1
{
	width:870px;
	height:30px;
	//background-color:#3399CC;
	float:left;
	padding-left:30px;
}
#cat2
{
	width:900px;
	height:540px;
	//background-color:#FF99CC;
	float:left;
}


#v
{
	width:260px;
	height:270px;
	//background-color:#33FFFF;
	float:left;
	margin-top:2px;
	border-bottom-color:#FFFFFF;
}

#b
{
	width:260px;
	height:200px;
//background-color:#FF0000;
	float:left;
}
#b1
{
	width:290px;
	height:180px;
	//background-color:#FF0000;
	float:left;
}
#b2
{
	width:290px;
	height:30px;
	//background-color:#FF0000;
	float:left;
}
#b2 a{
text-decoration:none;
color:#FFFFFF;}

#footer
{
width:880px;
height:20px;
//background-color:#F5F5F5;
margin-top:10px;
padding-top:10px;
padding-left:20px;
float:left;
}


</style>	

</head>





<body>
<div id="main" style="background-image:url(img/a.jpg);" >
<div id="header">
<div id="h1"></div>
<div id="h2">
		<a href="home_gal.php"><img src="img/h2.jpg" height="20" width="20" /></a>
        <a href="contactus.php"><img src="img/c1.jpg" height="20" width="20" style="margin-left:3px;"/></a>
       <a href="adlogin.php"> <img src="images.jpg" height="20" width="20" style="margin-left:3px;"/></a>

</div>

</div>
<div id="title">
<font color="#FAEBD7" size="+6"><i><b><font color="#21BECB">I</font>mage <font color="#21BECB">G</font>allery</b></i></font> 
</div> 
<div id="logout"><?php
if(isset($_SESSION['user']))
{
?><font color="#21BECB" size="+1"><i><b>Welcome <?php echo $_SESSION['user']; ?></b></i></font> 
	<a href="logout1.php">Logout</a>
<?php
}	
else
{
$f=1;
}

?>
</div> 
<div id="mid">
<div id="menu">

<div class="m1" style="margin-left:4px;"><a href="home_gal.php">Home </a></div>
<div class="m1"><a href="aboutus.php">About Us </a></div>
<div class="m1"><a href="category.php">Gallery </a></div>
<div class="m1"><a href="contactus.php">Contact Us </a></div>
<div class="m1"><a href="feedback2.php">Feedback </a></div>

</div>
<div id="cat">
<div id="cat1"><font color="#21BECB" size="+2">Categories </font> 


</div>
<div id="cat2" style="overflow:scroll;">

	<?php
			 while($row=mysql_fetch_array($rs))
			 {
			?>
<div id="v" style="margin-left:5px ">
	<div id="b" style="margin-left:20px;">
	<div id="b1"><img src="<?php echo $row[2]; ?>" height="180px" width="240px"/></div>
	<div id="b2" align="center"><font color="#FFF" size="+1" style="font-family:Calibri "><a href="image.php?name=<?php echo $row[1]; ?>" >
		<?php echo $row[1]; ?></a></font></div>
	
	</div>
	
</div>



<?php } ?>


</div>


</div>







<div id="footer"><div style="float:left;"><font color="#FFF" size="+1" style="font-family:Calibri "><i>Codex Infosolution Pvt. Ltd.</i></font></div>

		<div style=" margin-left:780px; margin-top:-25px;float:left;">
        		<a href="www.twitter.com"><img src="img/soc-icon-1.png"/></a>
					<a href="www.facebook.com"><img src="img/soc-icon-2.png"/></a>
					<a href="www.instagram.com"><img src="img/soc-icon-3.png"/> </a>
        
        </div>
</div>
</div>
</div>

</body>
</html>