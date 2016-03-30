<?php
  session_start();

	require_once('connection.php');
	
	if(isset($_POST['submit']))
	{
		$pass=$_POST['new'];
		$cpass=$_POST['confirm'];
		
		 $sql="update admin set password='$pass' where username='admin'"; 
		 $rs=mysql_query($sql);
		header('Location:adlogin.php');
		
	}

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
 function doValidate()
 {
 
  var pass=document.getElementById("new").value;
  var cpass=document.getElementById("confirm").value;
   
  if(pass==" " || pass.length==0)
  {
   //alert("username is empty");
   document.getElementById("catname").innerHTML="please enter new password!!";
   return false;
   }
 
 	
	if(cpass==" " || cpass.length==0)
  {
   //alert("password is empty");
   	 document.getElementById("catname").innerHTML="";

   document.getElementById("catname1").innerHTML="Re-enter new password!!";
   return false;
   }
  if(pass!=cpass)
  {
    document.getElementById("catname").innerHTML="";
document.getElementById("catname1").innerHTML="";

   document.getElementById("catname1").innerHTML="Newpassword & Confirm Password should be same";
   return false;
   }
  
   if(pass.length<8)
  {
  	document.getElementById("catname").innerHTML="";
document.getElementById("catname1").innerHTML="";
document.getElementById("catname1").innerHTML="";

   document.getElementById("catname").innerHTML="Password is too short";
   return false;
   }
   if(pass.length>12)
  {
  	document.getElementById("catname").innerHTML="";
document.getElementById("catname1").innerHTML="";
document.getElementById("catname1").innerHTML="";
document.getElementById("catname").innerHTML="";
   document.getElementById("catname").innerHTML="Password is too long";
   return false;
   }
  
   
 }
</script>

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
height:300px;
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
height:60px;
//background-color:#3333FF;}
#password{
width:600px;
height:60px;
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
</head>

<body>
<div id="main">

<div id="login">
	<div id="header" align="center"><i>Forgot Password</i></div>
	<form id="f2" method="post" action="" onSubmit="return doValidate();">

	
	<div id="username" ><input type="text" name="new" placeholder="enter new password" size="30" style="border:2px solid #726E6D;     background-color:#F7F7F7;color:#726E6D;height:25px; margin-left:200px;" id="username1" /><label id="catname" style="color:#FF0000"></label> </div>
	
	<div id="password">
      <input name="confirm" type="password" style="border:2px solid #726E6D;background-color:#F7F7F7;color:#726E6D;height:25px;margin-left:200px;" size="30"  placeholder="Re-enter new password" id="password1" /><label id="catname1" style="color:#FF0000"></label>
    </div>
	
	
	
	<div id="btn">
    
    <div style="margin-left:20px;height:35px;width:100px; float:left;"><a href="ad_for.php" > << Back </a></div>
    	<input type="submit" name="submit" value="save" style="background-color:#726E6D;color:#FFF;height:25px;width:70px; border-radius:5px 5px 5px 5px; border:2px solid #999999; font-family:Calibri;font-size:16px;margin-left:300px;margin-top:-30px;" />
	</div>
	
	</form> 


</div></div>
</body>
</html>
