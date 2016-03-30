
<?php
session_start();
if(isset($_SESSION['username']))
{
require_once('connection.php');

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$name=$_GET['name'];
	$image=$_GET['image'];
	
}

if(isset($_POST['submit']))
{
	echo $name=$_POST['name'];
	
	echo $image;
	
    //$image=$_POST['imgname1'];
	
	
	//$img_name=$_POST['img_name'];
	

	 $file_name=$_FILES['file']['name'];
	 $file=$_FILES['file'];
	 print_r($file);
	$tmp=$_FILES['file']['tmp_name'];
	
	echo $file_type=$_FILES['file']['type'];
	
		$piece=explode("/",$file_type);
		 $type=$piece[0];
		 
		 
		 
		 
		 
 if($type=="")
{



$sql11="update category set cat_name='$name' where cat_id=$id";
	
	$r11=mysql_query($sql11);
	//$r1=mysql_query($sql1);
	if($r11)
	header('Location:viewcat.php');
	else
	$msg= '<strong>Error in Updation!!!</strong>';

}

else if($type=='image')
			{
			
			$path='upload1/'.$file_name;
			
			$r=move_uploaded_file($tmp,$path);
			
			
			$msg= '<strong>File Uploaded Successfully</strong>';
			$sql="update category set cat_img='$path' where cat_id=$id"; 
			mysql_query($sql);	
			
			
			
			
		$sql1="update category set cat_name='$name' where cat_id=$id";
	
	$r1=mysql_query($sql1);
	//$r1=mysql_query($sql1);
	if($r1)
	header('Location:viewcat.php');
	else
	$msg= '<strong>Error in Updation!!!</strong>';
	
	}
	 


else
{
echo 'dff';
	$msg= '<strong>File type should be image!!!</strong>';
	}
	
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
margin-top:5px;
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
  
 
 
  
   if(cat1==" " || cat1.length==0)
  {
   document.getElementById("catname").innerHTML="Category Name is Empty!!";
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

		<div id="chng">Edit Category</div>
                <form  method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return doValidate()">
                        <table width="425" border="0" cellpadding="10">
                  <tr>
                    <td height="135" colspan="2" align="center"><img src="<?php  echo $image; ?>" width="200" height="100" id="img" /><input type="file" name="file" id="file"  /></td>
                    </tr>
                  
                  <tr>
                    <td>Category Name</td>
                    <td><input name="name" type="text" id="current"  style="border:1px thin #000000;background-color:#CCCCCC;color:#000000;height:20px;" size="30" value="<?php echo $name; ?>"/>
                    
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"><div align="center">
                      <input type="submit" name="submit" id="button" value="Edit" style="background-color:#CCCCCC;color:#000000;height:30px;width:160px; border-radius:5px 5px 5px 5px; border:2px solid #999999; font-family:Calibri;font-size:20px;" />
                    </div>
                     <label id="sub" style="color:#FF0000"></label></td></td>
                    </tr>
                </table>
               <div style="margin-left:80px;>"<label id="msg" ><font color="#FF0000" size="-1"><?php if(isset($msg)) echo $msg; ?></font>
                    </label> 
      </form>
</div></div></div>
</body>
</html>
