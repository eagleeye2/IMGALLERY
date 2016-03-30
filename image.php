<?php 
session_start();


require_once('connection.php');
if(isset($_GET['name']))
{
	
	 $name=$_GET['name'];
$qu="select * from images where cat_name='$name'";
$rs=mysql_query($qu);
$a=mysql_num_rows($rs);
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
.cat21
{
	width:380px;
	height:500px;
	//background-color:#996666;
	margin-top:20px;
	margin-left:30px;
	float:left;
}
#mpic
{
	width:380px;
	height:450px;
	//background-color:#9999CC;
	float:left;

}
#caption
{
	width:350px;
	height:30px;
	//background-color:#fff;
	padding-left:30px;
	padding-top:20px;
	float:left;

}
.cat22
{
	width:430px;
	height:450px;
	//background-color:#000;
	margin-top:5px;
	//margin-left:50px;
	float:left;
}	
.img
{
	width:130px;
	height:120px;
	//background-color:#FFFFFF;
	margin-left:5px;
	margin-top:8px;
	float:left;
}


.v
{
	width:290px;
	height:535px;
	//background-color:#33FFFF;
	float:left;
	margin-top:5px;
}

.b
{
	width:290px;
	height:250px;
	//background-color:#FF0000;
	float:left;
}
.b1
{
	width:290px;
	height:230px;
	//background-color:#FF0000;
	float:left;
}
.b2
{
	width:290px;
	height:20px;
	//background-color:#FF0000;
	float:left;
}
.s
{
	width:290px;
	height:130px;
	//background-color:#FFF;
	//margin-top:10px;
	float:left;
}
.s1
{
	width:140px;
	height:130px;
	//background-color:#000;
	//margin-left:5px;
	//margin-top:10px;
	float:left;
}

.s11
{
	width:140px;
	height:110px;
	//background-color:#000;
	//margin-left:5px;
	//margin-top:10px;
	float:left;
}
.s12
{
	width:140px;
	height:20px;
	//background-color:#E0F7FE;
	//margin-left:5px;
	//margin-top:10px;
	float:left;
}
#cat3
{
	width:130px;
	height:30px;
	padding-left:770px;
	//background-color:#CC99FF;
	float:left;
}
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
<script type="text/javascript">
function fun(img)
{

var img1=document.getElementById(img).src;


document.getElementById("myimg").src=img1;
var name1=document.getElementById(img).name;
//alert(img1);
document.getElementById("a1").href=img1;
document.getElementById("a1").name=name1;
//
var c=document.getElementById(img).hspace;
//alert(c);
//document.getElementById("a1").tabindex=c;



}

function count(a)
{

var name1=document.getElementById(a).name;

//var c=document.getElementById(a).tabindex;
//var cu=c++;
//document.getElementById(a).tabindex=cu;
alert(name1);
//document.getElementById("myimg").src=img1;
//var name1=document.getElementById(img).name;

//document.getElementById("a1").href=img1;
//document.getElementById("a1").name=name1;

}

</script>

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
<div id="logout">
<?php
if(isset($_SESSION['user']))
{?>
<font color="#21BECB" size="+1"><i><b>Welcome <?php echo $_SESSION['user']; ?></b></i></font> 
	<a href="logout1.php">Logout</a>
<?php
}	
else
{
//header('location:home_gal.php');
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
<div id="cat1"><font color="#21BECB" size="+2">Images</font> 


</div>
<div id="cat2">

<div class="cat21" style="width:420px;">

	<div class="cat22" style="overflow:scroll;" >
    	<?php
		$i=0;
		if($a>0)
		{
			 while($row=mysql_fetch_array($rs))
			 {
			 
			?>
		<div class="img" >
		<img src="<?php echo $row[2]; ?>"  name="<?php echo $row[0]; ?>" id="<?php echo $i; ?> "  height="120px" width="120px" onClick="fun(this.id)"/>
        
		</div>
		<?php  $i=$i+1; }}
		else
			$msg='No images in this category';

		}
		 ?>
	<div style="margin-left:50px;>"<label id="msg" ><font color="#FFF" size="+2"><?php if(isset($msg)) echo $msg; ?></font>
                    </label> </div>  
	</div>
	
	
</div>
<div class="cat21" >
	<div id="mpic">
		<img id="myimg" src="" height="450px" width="380px"/>	
	</div>
	<div id="caption">
		<label id="a2" ><font color="#21BECB" size="+2"> </font></label>
       <?php
if(isset($_SESSION['user']))
{?> <a href="" id="a1" name="" target="_blank" style="color:#FFFFFF"  onClick="count(this.id)" >download</a>
	
<?php
}	
else
{
//header('location:home_gal.php');
$f=1;
}

?>
        
	</div>	
</div>
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