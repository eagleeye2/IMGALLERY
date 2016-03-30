
<?php
session_start();
if(isset($_SESSION['username']))
{
require_once('connection.php');
if(isset($_GET['name']))
{
	
	$name=$_GET['name'];
	}
	

 $qu="select * from images where cat_name='$name'";
 $rs=mysql_query($qu);
 
//print_r($rs);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="viewimg.css" type="text/css">
<style>
table{
margin-top:30px;
margin-left:70px;}

#chng{
width:150px;
height:40px;
//background-color:#0000FF;
margin-top:20px;
margin-left:180px;
font-family:Calibri;
font-size:24px;
padding-left:50px;}
</style>
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
  <div class="b1"><a href="changpass.php">Change Password</a></div></div>
</div>  
<div id="col12" style="overflow:scroll;">

		<div id="chng">Images</div>
		<div id="c1">
			<?php
			$num=mysql_num_rows($rs);
if($num==0)
$msg='No images in this category';
else
{
			 while($row=mysql_fetch_array($rs))
			 {
			?>
		<div class="c">
	<div class="c11"><img src="<?php echo $row[2]; ?>" height="110px" width="160px" hspace="5px" vspace="5px" /></div>
		<div class="c22">
		<div class="h1" align="center"><?php echo $row[1]; ?></div>
		<div class="h2" align="center"><a href="edit_image.php?id=<?php echo $row[0]; ?>&name=<?php echo $row[1]; ?>&catname=<?php echo $row[3]; ?>&image=<?php echo $row[2];?>">Edit</a></div>
		<div class="h3"><a href="ad_deleteimg.php?id=<?php echo $row[0]; ?> ">X</a>
		</div>		
		</div>
		</div><?php }	}	
		 ?>
		
		
		
		<div style="margin-left:50px;>"<label id="msg" ><font color="#FF0000" size="+2"><?php if(isset($msg)) echo $msg; ?></font>
                    </label> </div>  
		
    </div>
</div>
</div>
</div>
</body>
</html>
