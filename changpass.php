<?php 
	session_start();
	require_once('connection.php');
	if(isset($_SESSION['username']))
{
	if(isset($_POST['submit']))
	{	$current=$_POST['current'];
		 $new=$_POST['new'];
		$confirm=$_POST['confirm'];
		$query="select *  from admin";
		$r=mysql_query($query);
		$row=mysql_fetch_array($r);
		if($current==$row[2])
		{
		 $sql="update admin set password=$new where id='1'"; 
		 $rs=mysql_query($sql);
		if($rs)
		{	session_destroy();
			header('Location:adlogin.php');
		}
		else
			$msg= 'error in updation';
		//print_r($rs);
		}
		else 
		$msg= 'current password is not matched..!!!';
	
	}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="ad_home.css" type="text/css">
<style>
table{
margin-top:30px;
margin-left:70px;}

#chng{
width:200px;
height:50px;
//background-color:#0000FF;
margin-top:20px;
margin-left:180px;
font-family:Calibri;
font-size:24px;}
</style>


<script type="text/javascript">
 function doValidate()
 {
 
  var pass=document.getElementById("new").value;
  var cpass=document.getElementById("confirm").value;
   var cat1=document.getElementById("current").value;
  
  if(cat1==" " || cat1.length==0)
  {
  	  	document.getElementById("msg").innerHTML="";

   document.getElementById("catname").innerHTML=" Password is Empty!!";
   return false;
   }
   
    if(pass==" " || pass.length==0)
  {
  	  	document.getElementById("msg").innerHTML="";

  	document.getElementById("catname").innerHTML="";
   document.getElementById("newpass").innerHTML=" Password is Empty!!";
   return false;
   }
 
  
  
   if(pass.length<8)
  {
  	  	document.getElementById("msg").innerHTML="";

  	 document.getElementById("catname").innerHTML="";
	  document.getElementById("newpass").innerHTML="";
	  //document.getElementById("confirmpass").innerHTML="";
	  
   document.getElementById("newpass").innerHTML="Password should contain 8-12 characters";
   return false;
   }
   if(pass.length>12)
  {
  	  	document.getElementById("msg").innerHTML="";

  	document.getElementById("catname").innerHTML="";
	  //document.getElementById("confirmpass").innerHTML="";
	  //document.getElementById("confirmpass").innerHTML="";
	   document.getElementById("newpass").innerHTML="";
   document.getElementById("newpass").innerHTML="Password should contain 8-12 characters";
   return false;
   }
   
    if(cpass==" " || cpass.length==0)
  {
  	  	document.getElementById("msg").innerHTML="";

  	document.getElementById("catname").innerHTML="";
	document.getElementById("newpass").innerHTML="";
   document.getElementById("confirmpass").innerHTML=" Password is Empty!!";
   return false;
   }
   
   if(pass!=cpass)
  {
  	  	document.getElementById("msg").innerHTML="";

  	 document.getElementById("catname").innerHTML="";
	 document.getElementById("newpass").innerHTML="";
   document.getElementById("confirmpass").innerHTML="Newpassword & Confirm Password should be same";
   return false;
   }
   else
   {
     document.getElementById("sub").innerHTML="Form submitted";
   }
  }
</script>

</head>

<body>
<div id="main">
<div id="row1">
<div id="welcome">Welcome <?php echo $_SESSION['username']; ?></div>

<div id="logout">
	<a href="logout.php">Logout</a>
	<?php }
else
{
header('location:adlogin.php');
} ?>
</div>
</div>
<div id="row2">
<div id="col11">
<div id="menu">
<div class="b1"><a href="addcat.php" >Add Category</a></div>
  <div class="b1"><a href="viewcat.php">View Category</a></div>
  <div class="b1"><a href="add_image.php">Add Image</a></div>
  <div class="b1"><a href="viewimg.php">View Images</a></div>
  <div class="b1"><a href="ad_feedback.php">Feedback</a></div>
  <div class="b1"><a href="changpass.php">Change Password</a></div></div></div>
<div id="col12">

		<div id="chng">Change Password </div>
                <form id="form1" name="form1" method="post" action="" onSubmit="return doValidate()">
                        <table width="425" border="0" cellpadding="10">
                  <tr>
                    <td width="154">Current Password</td>
                    <td width="225">
                    <input name="current" type="password" id="current"  style="border:1px thin #000000;background-color:#CCCCCC;color:#000000;height:20px;" size="30"/>   <label id="catname" style="color:#FF0000"></label>  </td> </td>
                  </tr>
                  <tr>
                    <td>New Password</td>
                    <td><input name="new" type="password" id="new" style="border:1px thin #000000;background-color:#CCCCCC;color:#000000;height:20px;" size="30"/>
                    <label id="newpass" style="color:#FF0000"></label>
                    </td>
                  </tr>
                  <tr>
                    <td>Confirm Password</td>
                    <td><input name="confirm" type="password" id="confirm" style="border:1px thin #000000;background-color:#CCCCCC;color:#000000;height:20px;" size="30" />
                     <label id="confirmpass" style="color:#FF0000"></label>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"><div align="center">
                      <input type="submit" name="submit" id="button" value="Save" style="background-color:#CCCCCC;color:#000000;height:30px;width:80px; border-radius:5px 5px 5px 5px; border:2px solid #999999; font-family:Calibri;font-size:20px;" />
                    </div>
                    <label id="sub" style="color:#FF0000"></label></td>
                    </tr>
                </table>
               <div style="margin-left:80px;>"<label id="msg" ><font color="#FF0000" size="-1"><?php if(isset($msg)) echo $msg; ?></font>
                    </label> </div> 
                </form>
</div></div></div>
</body>
</html>
