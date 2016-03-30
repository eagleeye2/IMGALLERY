
<?php 
	session_start();
	if(isset($_SESSION['username']))
{
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="ad_home.css" type="text/css">
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
<div id="col12" style="background-color:#CCCCCC; ">
			<div style="margin-top:50px; margin-left:10px;" ><font color="#000" size="+1" style="font-family:"Monotype Corsiva" ">
	    Image Gallery is an online web portal which aims to provide user with the images of various different categories. User can view the images and can also download them once registered.
	    </font></div>
</div></div></div>
</body>
</html>
