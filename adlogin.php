
<?php
session_start();
  if(isset($_SESSION['username']))
		{	
			session_destroy();
			header('Location:adlogin.php');
		}
		
	else
	{
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
		$msg= 'access denied';
	}
	
	

}}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin_login</title>

<style>

#main
{
width:900px;
height:500px;

background-image:url(images.jpeg);

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
height:320px;
//background-color:#FF79BC;
margin-top:-40px;
margin-bottom:10px;
padding-top:10px;
}

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
 
   var username=document.getElementById("username").value;
   var password=document.getElementById("password").value;
   if(username==" " || username.length==0)
  	{
   		document.getElementById("user").innerHTML=" Username is Empty!!";
	    document.getElementById("user").style.color="Red";
        return false;
   	}
   
   if(password==" " || password.length==0)
  	{   
	    document.getElementById("user").innerHTML="";
   		document.getElementById("pass").innerHTML=" Password is Empty!!";
	    document.getElementById("pass").style.color="Red";
		return false;
   	}
}
</script>
</head>

<body>
<div id="main">
<div style="height:30px; width:30px; margin-left:800px; margin-top:-100px;"><a href="home_gal.php"><img src="img/h2.jpg" height="30" width="30"  /></a></div>
<div id="login">
	<!-- <div id="header" align="center"><i>Admin Login</i></div>
    <div id="username" align="center"><input type="text" name="username" placeholder="username" size="60" style="border:2px solid #000000;background-color:#CCCCCC;color:#000000;height:30px;"/></div>
    <div id="password" align="center">
      <input name="password" type="password" style="border:2px solid #000000;background-color:#CCCCCC;color:#000000;height:30px;" size="60"  placeholder="password" />
    </div>
    <div id="btn">
    	<div style=" height:35px;width:100px; float:left;"><input type="button" name="login" value="Login >" style="background-color:#CCCCCC;color:#000000;height:30px;width:90px; border-radius:5px 5px 5px 5px; border:2px solid #999999; font-family:Calibri;font-size:20px;"/></div>
        <div style="margin-left:200px;height:35px;width:200px;margin-top:-30px; float:left;"><a href="#" >Forgot Password?</a></div>
    </div>
-->
   <div id="header"><form id="form1" name="form1" method="post" action="" onSubmit="return doValidate()">
   
    <table width="400" border="0" cellpadding="2" style="margin-top:20px; margin-left:90px;">
      <tr>
        <td height="64" ><div align="center" style="font-size:50px;color:#000000;"><font face="Monotype Corsiva">Admin Login</font></div></td>
        </tr>
      <tr>
        <td width="300" height="70" ><input type="text" name="username" id="username" placeholder="enter username" size="60" style="border:2px solid #000000;background-color:#CCCCCC;color:#000000;height:30px;"/>
         <label id="user" style="color:#FF0000"></label> </td>
        </tr>
      <tr>
        <td width="300" height="60" ><input name="password" type="password" id="password" style="border:2px solid #000000;background-color:#CCCCCC;color:#000000;height:30px;" size="60"  placeholder="enter password" />
         <label id="pass" style="color:#FF0000"></label> </td>
        </tr>
        <tr>
        <td width="300" height="75" ><div style=" height:35px;width:100px; float:left;"><input type="submit" name="submit" id="submit" value="Login >>"  style="<!--background-color:#FFCCFF;-->color:#000000;height:30px;width:90px; border-radius:5px 5px 5px 5px; border:2px solid #999999; font-family:Calibri;font-size:20px; "/></div>
        <div style="margin-left:200px;height:35px;width:200px;margin-top:-30px; float:left;"><a href="ad_for.php" >Forgot Password?</a></div></td>
        </tr>
    </table>
    <label id="msg"><font color="#FF0000" size="+1"><?php if(isset($msg)) echo $msg; ?></label>    </form>
    </div>
</div>
</div>
</body>
</html>


