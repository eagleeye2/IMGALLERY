<?php

session_start();

if(isset($_SESSION['username']))
{
require_once('connection.php');
if(isset($_POST['submit']))
{
	
	$img_name=$_POST['img_name'];
	

	$file_name=$_FILES['file']['name'];
	
	$tmp=$_FILES['file']['tmp_name'];
	$file_type=$_FILES['file']['type'];
	
		$piece=explode("/",$file_type);
		$type=$piece[0];
	if($type=='image'){
	$path='upload1/'.$file_name;
	
			$sql1="select * from category where cat_name='$img_name'";
			$rs=mysql_query($sql1);
			//$row=mysql_fetch_array($rs);
			 $a=mysql_num_rows($rs);	
			 //print_r($a);
			if($a==0)
			{
				$sql="insert into category values (NULL,'$img_name','$path')";
				$r=mysql_query($sql);
				move_uploaded_file($tmp,$path);	
				$msg='<strong>Category added Successfully..!!</strong>';
			}
			else
				$msg='<strong>Category name is already exists...!!</strong>';
	}
	else
	
		$msg='<strong>File type should be image..!!</strong>';

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
 
  
  var cat1=document.getElementById("current").value;
  var cat2=document.getElementById("fileField").value;
  
   if(cat1==" " || cat1.length==0)
  {
   document.getElementById("catname").innerHTML="Category Name is Empty!!";
   return false;
   }
  
  if(cat2==" " || cat2.length==0)
  {
  	document.getElementById("catname").innerHTML="";
   document.getElementById("catname").innerHTML="";
  document.getElementById("catname1").innerHTML="No image selected!!";
  return false;
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
	<?php
}
else
{
header('location:adlogin.php');
}

?>
</div>
</div>
<div id="row2">
<div id="col11">
<div id="menu">
<div class="b1"><a href="addcat.php" >Add Category</a></div>
  <div class="b1"><a href="viewcat.php">View Category</a></div>
  <div class="b1"><a href="add_image.php">Add Image</a></div>
  <div class="b1"><a href="viewcat1.php">View Images</a></div>
  <div class="b1"><a href="ad_feedback.php">Feedback</a></div>
  <div class="b1"><a href="changpass.php">Change Password</a></div></div></div>
<div id="col12">

		<div id="chng">Add Category </div>
                <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return doValidate()">
                        <table width="425" border="0" cellpadding="10">
                  <tr>
                    <td width="154">Category Name</td>
                    <td width="225">
                    <input name="img_name" type="text" id="current"  style="border:1px thin #000000;background-color:#CCCCCC;color:#000000;height:20px;" size="30"/> <label id="catname" style="color:#FF0000"></label>  </td>
                  </tr>
                  <tr>
                    <td>Category Image</td>
                    <td><input type="file" name="file" id="fileField" /><label id="catname1" style="color:#FF0000"></label></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><div align="center">
                      <input type="submit" name="submit" id="button" value="Add" style="background-color:#CCCCCC;color:#000000;height:30px;width:60px; border-radius:5px 5px 5px 5px; border:2px solid #999999; font-family:Calibri;font-size:20px;" />
                    </div></td>
                  </tr>
                </table>
               <div style="margin-left:80px;>"<label id="msg" ><font color="#FF0000" size="-1"><?php if(isset($msg)) echo $msg; ?></font>
                    </label> </div>
      </form>
</div></div></div>
</body>
</html>
