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
	$catname=$_GET['catname'];
	
}

if(isset($_POST['submit']))
{
	echo $name=$_POST['new'];
   echo  $catname=$_POST['current'];
	
	echo $sql="delete from images where img_id=$id";
	
	$r=mysql_query($sql);
	//print_r()
	if($r)
	header('Location:viewcat1.php');
	else
	echo '<strong>Error in Updation!!!</strong>';
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
 
  var image1=document.getElementById("new").value;
  var cat1=document.getElementById("current").value;
  
 
  if(image1==" " || image1.length==0)
  {
   document.getElementById("image").innerHTML="Image Name is Empty!!";
   return false;
   }
  
  else if(cat1==" " || cat1.length==0)
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
  <div class="b1"><a href="add_image.php">Add Gallery</a></div>
  <div class="b1"><a href="viewimg.php">View Gallery</a></div>
  <div class="b1"><a href="changpass.php">Change Password</a></div></div></div>
<div id="col12">

		<div id="chng">Delete Image</div>
                <form  method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return doValidate()">
                        <table width="425" border="0" cellpadding="10">
                  <tr>
                    <td height="135" colspan="2" align="center"><img src="<?php echo $image; ?>" width="200" height="100" /></td>
                    </tr>
                  <tr>
                    <td width="154">Image Name</td>
                    <td width="225"><input name="new" type="text" id="new" style="border:1px thin #000000;background-color:#CCCCCC;color:#000000;height:20px;" size="30" value="<?php echo $name; ?>"/>
                    <label id="image" style="color:#FF0000"></label>
                    </td>
                  </tr>
                  <tr>
                    <td>Category Name</td>
                    <td><input name="current" type="text" id="current"  style="border:1px thin #000000;background-color:#CCCCCC;color:#000000;height:20px;" size="30" value="<?php echo $catname; ?>"/>
                    <label id="catname" style="color:#FF0000"></label>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"><div align="center">
                      <input type="submit" name="submit" id="button" value="Delete Image" style="background-color:#CCCCCC;color:#000000;height:30px;width:160px; border-radius:5px 5px 5px 5px; border:2px solid #999999; font-family:Calibri;font-size:20px;" />
                    </div>
                     <label id="sub" style="color:#FF0000"></label></td></td>
                    </tr>
                </table>
                
      </form>
</div></div></div>
</body>
</html>
