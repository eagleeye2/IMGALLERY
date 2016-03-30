<?php
  session_start();
  
if(isset($_POST['submit']))
{
	require_once('connection.php');
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query="select * from admin ";
	$query=$query."where username='$username' and ";
	$query=$query." password='$password'";
	
	$rs=mysql_query($query);
	 
	$num=mysql_num_rows($rs);
	
	

	if($num>0)
	{
		 $_SESSION['username']=$username;
		header('Location:ad_home.php');
	}
	else
	{
		$flag=1;
	}
	
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>
#main{
width:900px;
height:500px;
background-image:url(img/images.jpeg);

background-repeat:no-repeat;
//background-attachment:fixed;
padding-top:200px;
margin:auto;
}

#login{

width:600px;
height:350px;
background-color:#FFFFFF;
margin-left:150px;
margin-top:10px;
}

#header{
width:600px;
height:80px;
//background-color:#00CC99;
font-family:"Monotype Corsiva";
font-size:50px;
color:#000000;
margin-bottom:10px;
padding-top:10px;}
#username{
width:600px;
height:80px;
//background-color:#3333FF;}
#password{
width:600px;
height:80px;
//background-color:#66CC99;}
#btn{
width:385px;
height:70px;
//background-color:#000099;
//margin-top:10px;
margin-left:105px;
margin-right:100px;}
a{
text-decoration:none;
color:#000000;
font-size:20px;
font-family:Calibri;}
a:hover{
color:#408080;}

</style>

<script type="text/javascript">
 function doValidate()
 {
 
  var user=document.getElementById("username").value;
  var pass=document.getElementById("password").value;
   
  if(user==" " || user.length==0)
  {
   //alert("username is empty");
   document.getElementById("catname").innerHTML="Username is empty!!";
   return false;
   }
 
 	
	if(pass==" " || pass.length==0)
  {
   //alert("password is empty");
   document.getElementById("catname").innerHTML="";
   document.getElementById("catname1").innerHTML="password is empty!!";
   return false;
   }
  
  
   
 }
</script>

</head>

<body>
<div id="main">
<div style="height:30px; width:30px; margin-left:800px; margin-top:-100px;"><a href="home_gal.php"><img src="img/h2.jpg" height="30" width="30"  /></a></div>
<div id="login">
	<div id="header" align="center"><i>Admin Login</i></div>
	<form id="f1" method="post" action="" name="form1" onSubmit="return doValidate();">
    <div id="username" align="center"><input type="text" name="username" placeholder="username" size="60" style="border:2px solid #000000;background-color:#CCCCCC;color:#000000;height:30px;"/></div><label id="catname" style="color:#FF0000"></label>
    <div id="password" align="center">
      <input name="password" type="password" style="border:2px solid #000000;background-color:#CCCCCC;color:#000000;height:30px;" size="60"  placeholder="password" />
    </div><label id="catname1" style="color:#FF0000"></label>
    <div id="btn">
    	<div style=" height:35px;width:100px; float:left;"><input type="submit" name="submit" value="Login >" style="background-color:#CCCCCC;color:#000000;height:30px;width:90px; border-radius:5px 5px 5px 5px; border:2px solid #999999; font-family:Calibri;font-size:20px;"/></div>
        <div style="margin-left:200px;height:35px;width:200px;margin-top:-30px; float:left;"><a href="ad_forgot.php" >Forgot Password?</a></div>
    </div>
    <div style="margin-left:50px;>"<label id="msg" ><font color="#FF0000" size="+2"><?php if(isset($msg)) echo $msg; ?></font>
                    </label> </div>
</form>


</div></div>
</body>
</html>
