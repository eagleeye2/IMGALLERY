<?php
  
	session_start();
	require_once('connection.php');
	
	if(isset($_POST['submit']))
	{
		$name=$_POST['username'];
		$flag=0;
		$sql="select * from admin";
		$r=mysql_query($sql);
		
		while($row=mysql_fetch_array($r))
		{
			if($name==$row[1])
			{
				$flag=1;
			
			}
			
			
			
		
		}
		
		if($flag==1)
		{
		$_SESSION['username']=$name;
		
		//header('Location:ad_forgot.php');
		}
		else
		$msg= 'invalid username';	
	}

 ?>


 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
 function doValidate()
 {
 
 var user=document.getElementById("new").value;
  //var pass=document.getElementById("password2").value;
   
  if(user==" " || user.length==0)
  {
   //alert("username is empty");
      //document.getElementById("msg").innerHTML="";

   document.getElementById("catname").innerHTML="please enter your username!!";
   return false;
   }
   
 }
 function doValidate1()
 {
 
// var user=document.getElementById("new").value;
  var pass=document.getElementById("password2").value;
   
 
   if(pass==" " || pass.length==0)
  {
   //alert("username is empty");
      //document.getElementById("msg").innerHTML="";
      //document.getElementById("catname").innerHTML="";

   document.getElementById("catname1").innerHTML="please enter your answer!!";
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
	
    <?php 
	if(isset($_SESSION['username']))
		{
			$use=$_SESSION['username'];
			$s="select seq_ques from admin where username='$use'";
			$sr=mysql_query($s);
			$row=mysql_fetch_array($sr);
			if(isset($_POST['submit']))
			{
		$ans=$_POST['confirm'];
		$flag=0;
		echo $sql="select * from admin where username='$use'";
		$r=mysql_query($sql);
		
		while($row=mysql_fetch_array($r))
		{
			//print_r($row);
			if($ans==$row[4])
			{
				$flag=1;
			
			}
			
			
			
		
		}
		
		if($flag==1)
		{
		$_SESSION['username']=$name;
		
		header('Location:ad_forgot.php');
		}
		else
				header('Location:ad_for.php');

		$msg= 'invalid username';	
	}
			?>
            <div id="header" align="center"><i>Forgot Password</i></div>
                <form id="f3" method="post" action="" onSubmit="return doValidate1();">

            <div id="username" ><input type="text" name="username" value="<?php if(isset($row[0])) echo $row[0]; ?>" size="30" style="border:2px solid #726E6D;     background-color:#F7F7F7;color:#726E6D;height:25px; margin-left:200px;" id="new1" />	
 </div>
 
 <div id="password">
      <input name="confirm" type="password" style="border:2px solid #726E6D;background-color:#F7F7F7;color:#726E6D;height:25px;margin-left:200px;" size="30"  id="password2" /><label id="catname1" style="color:#FF0000"></label>
    </div>
    
    <div style="margin-left:20px;height:35px;width:100px; float:left;"><a href="adlogin.php" > << Back </a></div>
    	<input type="submit" name="submit" value="submit" style="background-color:#726E6D;color:#FFF;height:25px;width:70px; border-radius:5px 5px 5px 5px; border:2px solid #999999; font-family:Calibri;font-size:16px;margin-left:300px;margin-top:-30px;" />
	<label id="msg" style="color:#FF0000"><?php if(isset($msg)) echo $msg; ?></label>
    
    </form>
    </div>

		<?php
		
		

		}
	 else {
	?>            <div id="header" align="center"><i>Forgot Password</i></div>

    	<form id="f2" method="post" action="" onSubmit="return doValidate();">

	
	<div id="username" ><input type="text" name="username" placeholder="enter username" size="30" style="border:2px solid #726E6D;     background-color:#F7F7F7;color:#726E6D;height:25px; margin-left:200px;" id="new" />	<label id="catname" style="color:#FF0000"></label>	<label id="msg" style="color:#FF0000"><?php if(isset($msg)) echo $msg; ?></label>
 </div>
	
	
	
	
	<div id="btn">
    
    <div style="margin-left:20px;height:35px;width:100px; float:left;"><a href="adlogin.php" > << Back </a></div>
    	<input type="submit" name="submit" value="submit" style="background-color:#726E6D;color:#FFF;height:25px;width:70px; border-radius:5px 5px 5px 5px; border:2px solid #999999; font-family:Calibri;font-size:16px;margin-left:300px;margin-top:-30px;" />
	</div>
	
	</form> 
</div>
<?php
} ?>
</div>
</div>
</body>
</html>
