
<?php 
session_start();
	if(isset($_SESSION['username']))
{

	require_once('connection.php');
$qu='select * from feedback';
$rs=mysql_query($qu);

$a=mysql_num_rows($rs);	
			 //print_r($a);
			if($a!=0)
			{
	if(isset($_GET['id']))
{
	$id=$_GET['id'];

   $sql="delete from feedback where fid=$id";
	
	$r=mysql_query($sql);
	
	if($r)
	header('Location:ad_feedback.php');


}


}
else
 $msg='No feedback';


 

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
<div id="col12" style="overflow:scroll; border:thick #726E6D solid ; border-radius:5px 5px 5px 5px;">
<div id="ss">  
		
  
  <?php
  while($row=mysql_fetch_row($rs))
  {?>
  			<div class="l2" style="border-bottom-color:#000;border-bottom-style:dashed;border-bottom-width:thin;">
  	    	<div style="height:20px; width:300px;  float:left;margin-top:10px;margin-left:10px; " ><label><font color="#21BECB" style="font-family:Calibri; font-size:16px "><?php echo $row[1]; ?></font></label> </div>
	<div style="height:40px; width:300px;  float:left;margin-top:10px;margin-left:10px;"><label><font color="#000" style="font-family:'times New Roman';font-size:16px; "><?php echo $row[2]; ?> </font></label><label><font color="#FF0000" style="font-family:'times New Roman';font-size:16px; "><a href="ad_feedback.php?id=<?php echo $row[0]; ?>"> Delete</a></font> </label></div>
    
  		</div>
    	
  
<?php } 


?>

  </div>

<div style="margin-left:50px;>"<label id="msg" ><font color="#FF0000" size="+2"><?php if(isset($msg)) echo $msg; ?></font>
                    </label> </div>  




</div></div></div>
</body>
</html>
