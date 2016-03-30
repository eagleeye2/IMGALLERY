<?php
	if(isset($_POST['signin']))
	{
		header('location:home_gal.php');
	
	}
	
	else if(isset($_POST['signup']))
	{
		header('location:signup.php');
	
	}
	require_once('connection.php');
	$sql1="select *from seq_ques";
	$rs1=mysql_query($sql1);
	
	 if(isset($_POST['submit']))
	{
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$ques=$_POST['seqques'];
		$ans=$_POST['answer'];
		$sql="select * from signup where username='$username'";
		//print_r($sql);
		$r=mysql_query($sql);
		//print_r($r);
		//$row1=mysql_fetch_array($r);
		//print_r($row1);
		$no=mysql_num_rows($r);
		//var_dump($no);
		if($no<=0)
		{
		 $query="insert into signup value(NULL,'$username','$email',$phone,'$password','$ques','$ans')";
			
			$rs=mysql_query($query);
			
				
			$query1="insert into signin value(NULL,'$username','$password')";
			
			$rs1=mysql_query($query1);
			
				//echo 'inserted';
				$msg='You are succesfully registered';
			
				
		}		
		else
		 	$msg='username is already presnt';
	}
	

?>


<html>
<head>
<link rel="stylesheet" href="home_gal.css" type="text/css">

<script type="text/javascript">
 function doValidate()
 {
 
  
  var username=document.getElementById("username").value;
  var email=document.getElementById("email").value;
  var phone=document.getElementById("phone").value;
  var password=document.getElementById("password").value;
    var ques=document.getElementById("ques").value;

  var ans=document.getElementById("ans").value;

  var name_exp=/^[a-zA-Z]+$/;
  var email_exp=/^\w+@[a-zA-Z0-9_.]+?\.[a-zA-Z]{2,3}$/;
  var num_exp=/^[0-9]+$/;
  
   if(username==" " || username.length==0)
  {
   //alert("Username Name is Empty!!");
    document.getElementById("msg").innerHTML="";
  document.getElementById("username1").innerHTML="username is Empty!!";
   return false;
   }
   
   if(username.match(name_exp)==null)
   {
   		//alert("Username Name should contain only alphabates!!");
		    document.getElementById("msg").innerHTML="";

		document.getElementById("username1").innerHTML="Username Name should contain only alphabates!!";
   return false;
   }
   
   if(email==" " || email.length==0)
  {
  	//alert("email Name is Empty!!");
	    document.getElementById("msg").innerHTML="";

	 document.getElementById("username1").innerHTML="";
	  document.getElementById("username1").innerHTML="";
	 document.getElementById("email1").innerHTML="email is Empty!!";
  
   
   return false;
   }
    if(email.match(email_exp)==null)
   {
   		//alert("Email id must be a valid id..!!!");
		    document.getElementById("msg").innerHTML="";

		document.getElementById("username1").innerHTML="";
	  document.getElementById("username1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  
		 document.getElementById("email1").innerHTML="Email id must be a valid id..!!!";
   return false;
   }
   
   if(phone==" " || phone.length==0)
  {
  	//alert("phone Name is Empty!!");
	    document.getElementById("msg").innerHTML="";

	document.getElementById("username1").innerHTML="";
	  document.getElementById("username1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	 document.getElementById("phone1").innerHTML="phone number is Empty!!";
   
   return false;
   }
   
   if(phone.length!=10)
  {
  	//alert("Phone no must contain 10 digits..!!");
	    document.getElementById("msg").innerHTML="";

	document.getElementById("username1").innerHTML="";
	  document.getElementById("username1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("phone1").innerHTML="";
   	 document.getElementById("phone1").innerHTML="Phone no must contain 10 digits..!!";
   return false;
   }
   
   if(phone.match(num_exp)==null)
   {
   		//alert("Phone number must contain only digits..!!!");
		    document.getElementById("msg").innerHTML="";

		document.getElementById("username1").innerHTML="";
	  document.getElementById("username1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("phone1").innerHTML="";
	  document.getElementById("phone1").innerHTML="";
		 document.getElementById("phone1").innerHTML="Phone number must contain only digits..!!!";
   return false;
   }
   
   if(password==" " || password.length==0)
  {
  	//alert("Password is Empty!!");
	    document.getElementById("msg").innerHTML="";

	document.getElementById("username1").innerHTML="";
	  document.getElementById("username1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("phone1").innerHTML="";
	  document.getElementById("phone1").innerHTML="";
	 document.getElementById("phone1").innerHTML=""; 
   	 document.getElementById("password1").innerHTML="password is Empty!!";
   return false;
   }
   
   
   if(password.length<8)
  {
      document.getElementById("msg").innerHTML="";

   //alert("password length must be 8-12 characters..!!! ");
   document.getElementById("username1").innerHTML="";
	  document.getElementById("username1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("phone1").innerHTML="";
	  document.getElementById("phone1").innerHTML="";
	 document.getElementById("phone1").innerHTML="";
	 document.getElementById("password1").innerHTML="";
    document.getElementById("password1").innerHTML="password length must be 8-12 characters..!!!";
   return false;
   }
   if(password.length>12)
  {
  // alert("password length must be 8-12 characters..!!! ");
      document.getElementById("msg").innerHTML="";

  document.getElementById("username1").innerHTML="";
	  document.getElementById("username1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("phone1").innerHTML="";
	  document.getElementById("phone1").innerHTML="";
	 document.getElementById("phone1").innerHTML="";
	 document.getElementById("password1").innerHTML="";
	 document.getElementById("password1").innerHTML="";
   document.getElementById("password1").innerHTML="password length must be 8-12 characters..!!!";
   return false;
   }
  
  if(ques=='--select security question--')
  {
  	document.getElementById("msg").innerHTML="";

  document.getElementById("username1").innerHTML="";
	  document.getElementById("username1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("phone1").innerHTML="";
	  document.getElementById("phone1").innerHTML="";
	 document.getElementById("phone1").innerHTML="";
	 document.getElementById("password1").innerHTML="";
	 document.getElementById("password1").innerHTML="";	
	 	 document.getElementById("password1").innerHTML="";	
	 document.getElementById("ques").innerHTML="select security question";	

  }
   if(ans==" " || ans.length==0)
  {
  	document.getElementById("msg").innerHTML="";

  document.getElementById("username1").innerHTML="";
	  document.getElementById("username1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("email1").innerHTML="";
	  document.getElementById("phone1").innerHTML="";
	  document.getElementById("phone1").innerHTML="";
	 document.getElementById("phone1").innerHTML="";
	 document.getElementById("password1").innerHTML="";
	 document.getElementById("password1").innerHTML="";	
	 document.getElementById("password1").innerHTML="";	
	 document.getElementById("ques").innerHTML="";
	 	
	 document.getElementById("ans").innerHTML="enter security answer";	

  }
  
</script>


		<!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
    <script type="text/javascript" src=" jssor.core.js"></script>
    <script type="text/javascript" src=" jssor.utils.js"></script>
    <script type="text/javascript" src=" jssor.slider.js"></script>
    <script>

        jQuery(document).ready(function ($) {

            var _SlideshowTransitions = [
            //Fade in L
                {$Duration: 1200, $During: { $Left: [0.3, 0.7] }, $FlyDirection: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2 }
            //Fade out R
                , { $Duration: 1200, $SlideOut: true, $FlyDirection: 2, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2 }
            //Fade in R
                , { $Duration: 1200, $During: { $Left: [0.3, 0.7] }, $FlyDirection: 2, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2 }
            //Fade out L
                , { $Duration: 1200, $SlideOut: true, $FlyDirection: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2 }

            //Fade in T
                , { $Duration: 1200, $During: { $Top: [0.3, 0.7] }, $FlyDirection: 4, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleVertical: 0.3, $Opacity: 2 }
            //Fade out B
                , { $Duration: 1200, $SlideOut: true, $FlyDirection: 8, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleVertical: 0.3, $Opacity: 2 }
            //Fade in B
                , { $Duration: 1200, $During: { $Top: [0.3, 0.7] }, $FlyDirection: 8, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleVertical: 0.3, $Opacity: 2 }
            //Fade out T
                , { $Duration: 1200, $SlideOut: true, $FlyDirection: 4, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleVertical: 0.3, $Opacity: 2 }

            //Fade in LR
                , { $Duration: 1200, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $FlyDirection: 1, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2 }
            //Fade out LR
                , { $Duration: 1200, $Cols: 2, $SlideOut: true, $FlyDirection: 1, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2 }
            //Fade in TB
                , { $Duration: 1200, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $FlyDirection: 4, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleVertical: 0.3, $Opacity: 2 }
            //Fade out TB
                , { $Duration: 1200, $Rows: 2, $SlideOut: true, $FlyDirection: 4, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleVertical: 0.3, $Opacity: 2 }

            //Fade in LR Chess
                , { $Duration: 1200, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $FlyDirection: 4, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleVertical: 0.3, $Opacity: 2 }
            //Fade out LR Chess
                , { $Duration: 1200, $Cols: 2, $SlideOut: true, $FlyDirection: 8, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleVertical: 0.3, $Opacity: 2 }
            //Fade in TB Chess
                , { $Duration: 1200, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $FlyDirection: 1, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2 }
            //Fade out TB Chess
                , { $Duration: 1200, $Rows: 2, $SlideOut: true, $FlyDirection: 2, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2 }

            //Fade in Corners
                , { $Duration: 1200, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $FlyDirection: 5, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $ScaleVertical: 0.3, $Opacity: 2 }
            //Fade out Corners
                , { $Duration: 1200, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $FlyDirection: 5, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $ScaleVertical: 0.3, $Opacity: 2 }

            //Fade Clip in H
                , { $Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out H
                , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip in V
                , { $Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out V
                , { $Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
                ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //Specifies default duration (swipe) for slide in milliseconds

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                },

                $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2 ,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 360                          //[Optional] The offset position to park thumbnail
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$SetScaleWidth(Math.max(Math.min(parentWidth, 550), 100));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>



</head>





<body>
<div id="main" style="background-image:url(img/a.jpg);" >
<div id="header">
<div id="h1"></div>
<div id="h2">
		<a href="home_gal.php"><img src="img/h2.jpg" height="20" width="20" /></a>
        <a href="contactus.php"><img src="img/c1.jpg" height="20" width="20" style="margin-left:3px;"/></a>
       <a href="adlogin.php"> <img src="images.jpg" height="20" width="20" style="margin-left:3px;"/></a>

</div>
</div>
<div id="title">
<font color="#FAEBD7" size="+6"><i><b><font color="#21BECB">I</font>mage <font color="#21BECB">G</font>allery</b></i></font> 
</div> 
<div id="logout"></div>
<div id="mid">
<div id="menu">

<div class="m1" style="margin-left:4px;"><a href="home_gal.php">Home </a></div>
<div class="m1"><a href="aboutus.php">About Us </a></div>
<div class="m1"><a href="category.php">Gallery </a></div>
<div class="m1"><a href="contactus.php">Contact Us </a></div>
<div class="m1"><a href="viewfeed.php">Feedback </a></div>

</div>
<div id="slide">
<div id="slider">
		    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 550px;
        height: 400px; background: #191919; overflow: hidden;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 550px; height: 300px; overflow: hidden;">
            <div>
                <img u="image" src="alila/01.jpg" />
                <img u="thumb" src="alila/thumb-01.jpg" />
            </div>
            <div>
                <img u="image" src="alila/02.jpg" />
                <img u="thumb" src="alila/thumb-02.jpg" />
            </div>
            <div>
                <img u="image" src="alila/03.jpg" />
                <img u="thumb" src="alila/thumb-03.jpg" />
            </div>
            <div>
                <img u="image" src="alila/04.jpg" />
                <img u="thumb" src="alila/thumb-04.jpg" />
            </div>
            <div>
                <img u="image" src="alila/05.jpg" />
                <img u="thumb" src="alila/thumb-05.jpg" />
            </div>
            <div>
                <img u="image" src="alila/06.jpg" />
                <img u="thumb" src="alila/thumb-06.jpg" />
            </div>
            <div>
                <img u="image" src="alila/07.jpg" />
                <img u="thumb" src="alila/thumb-07.jpg" />
            </div>
            <div>
                <img u="image" src="alila/08.jpg" />
                <img u="thumb" src="alila/thumb-08.jpg" />
            </div>
            <div>
                <img u="image" src="alila/09.jpg" />
                <img u="thumb" src="alila/thumb-09.jpg" />
            </div>
            <div>
                <img u="image" src="alila/10.jpg" />
                <img u="thumb" src="alila/thumb-10.jpg" />
            </div>
            
            <div>
                <img u="image" src="alila/11.jpg" />
                <img u="thumb" src="alila/thumb-11.jpg" />
            </div>
            <div>
                <img u="image" src="alila/12.jpg" />
                <img u="thumb" src="alila/thumb-12.jpg" />
            </div>
        </div>
        
        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l              (normal)
            .jssora05r              (normal)
            .jssora05l:hover        (normal mouseover)
            .jssora05r:hover        (normal mouseover)
            .jssora05ldn            (mousedown)
            .jssora05rdn            (mousedown)
            */
            .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(a17.png) no-repeat;
                overflow:hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05ldn { background-position: -250px -40px; }
            .jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        
        <!-- Thumbnail Navigator Skin Begin -->
        <div u="thumbnavigator" class="jssort01" style="position: absolute; width:550px; height: 70px; left:0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <style>
                /* jssor slider thumbnail navigator skin 01 css */
                /*
                .jssort01 .p           (normal)
                .jssort01 .p:hover     (normal mouseover)
                .jssort01 .pav           (active)
                .jssort01 .pav:hover     (active mouseover)
                .jssort01 .pdn           (mousedown)
                */
                .jssort01 .w {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                }

                .jssort01 .c {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 98px;

                    height: 68px;
                    border: #000 2px solid;
                }

                .jssort01 .p:hover .c, .jssort01 .pav:hover .c, .jssort01 .pav .c {
                    background: url(t01.png) center center;
                    border-width: 0px;
                    top: 2px;
                    left: 2px;
                    width: 98px;
                    height: 68px;
                }

                .jssort01 .p:hover .c, .jssort01 .pav:hover .c {
                    top: 0px;
                    left: 0px;
                    width: 90px;
                    height: 70px;
                    border: #fff 1px solid;
                }
            </style>
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 92px; height: 72px; top: 0; left: 0;">
                    <div class=w><thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate></div>
                    <div class=c>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Thumbnail Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">slideshow</a>
    </div>
    <!-- Jssor Slider End -->



</div>

	<div id="login">
    
	<div id="aa">
    <form id="form1" method="post" >
	  <label>
	  <input name="signin" type="submit" id="signin" value="Sign-In" style="background-color:#FFF;color:#000;height:25px;width:70px; border-radius:5px 5px 0px 0px; border:2px solid #999999; font-family:Calibri;font-size:16px; margin-left:20px; margin-top:5px;"> 
	  </label>
	  <label>
	  <input name="signup" type="submit" id="signup" value="Sign-Up" style="background-color:#726E6D;color:#FFF;height:25px;width:70px; border-radius:5px 5px 0px 0px; border:2px solid #999999; font-family:Calibri;font-size:16px; margin-left:5px; margin-top:5px;">
	  </label>
      </form>
	</div>
    
	<div id="ss" style="border:thick #726E6D solid ; border-radius:5px 5px 5px 5px;" >
    <form id="form2" method="post" onSubmit="return doValidate()">
	<table width="311" height="247" style="margin-top:30px">
  <tr>
    <td width="70" height="34"> <font color="#FFF"  style="font-family:Calibri; font-size:16px;">Username</font></td>
    <td width="221"><input type="text" name="username" id="username" placeholder="username" size="30" style="border:2px solid #726E6D; margin-left:-2px; margin-top:-5px;    background-color:#F7F7F7;color:#726E6D;height:25px;" /><label id="username1" style="color:#FF0000;"></label></td>
  </tr>
  <tr>
     <td width="70" height="34"> <font color="#FFF"  style="font-family:Calibri;font-size:16px; ">Email Id</font></td>
    <td width="221"><input type="text" name="email" id="email" placeholder="email id" size="30" style="border:2px solid #726E6D;     background-color:#F7F7F7;color:#726E6D;height:25px;margin-left:-2px; margin-top:-5px;" /><label id="email1" style="color:#FF0000"></label>  </td>
  </tr>
   <tr>
    <td height="44"> <font color="#FFF"  style="font-family:Calibri;font-size:16px; ">Phone No</font></td>
    <td><input type="text" name="phone" id="phone" placeholder="phone no" size="30" style="border:2px solid #726E6D;     background-color:#F7F7F7;color:#726E6D;height:25px;margin-left:-2px; margin-top:-5px;" /> <label id="phone1" style="color:#FF0000"></label> </td>
  </tr>
  <tr>
    <td height="35"> <font color="#FFF"  style="font-family:Calibri;font-size:16px; ">Password</font></td>
    <td><input name="password" type="password" id="password" style="border:2px solid #726E6D;margin-left:-2px; margin-top:-5px; background-color:#F7F7F7;color:#726E6D;height:25px;" size="30"  placeholder="password" /><label id="password1" style="color:#FF0000"></label>

  </tr>
  <tr>
    <td height="40"> <font color="#FFF"  style="font-family:Calibri;font-size:16px; ">security question</font></td>
    <td><select name="seqques" id="ques" ><option value="--select security question--">--select security question--</option><?php while ($row=mysql_fetch_array($rs1)){?><option value="<?php echo $row[1]?>"><?php echo $row[1]?> </option> <?php } ?></select><label id="ques" style="color:#FF0000"></label>

  </tr>
  <tr>
    <td height="40"> <font color="#FFF"  style="font-family:Calibri;font-size:16px; ">security answer</font></td>
    <td><input name="answer" type="text" id="ans" style="border:2px solid #726E6D;margin-left:-2px; margin-top:-5px; background-color:#F7F7F7;color:#726E6D;height:25px;" size="30"  placeholder="security answer" /><label id="ans" style="color:#FF0000"></label>

  </tr>

</table>

  <label id="msg" style="color:#FF0000"><?php if(isset($msg)) echo $msg; ?></label>	

	<div id="btn"  style="margin-top:-2px;">
    	<input type="submit" name="submit" value="Sign Up" style="background-color:#726E6D;color:#FFF;height:25px;width:70px; border-radius:5px 5px 5px 5px; border:2px solid #999999; font-family:Calibri;font-size:16px;" />
	</div>
    </form>
	</div>
	

</div>
<div id="content" >

<div id="c1"align="center"><font color="#FFF" size="+1" style="font-family:"Monotype Corsiva" ">Image Gallery is a online web portal for pictures classified into various categories.</font></br>
<font color="#21BECB" size="+1" style="font-family:"Monotype Corsiva" "><u>Take a quick tour</u></br></font>
 </div>        		
 <div id="c2">
 <font color="#21BECB" size="+1" style="font-family:Calibri ">Most Popular Images</font>
 
 </div>       
 <div id="c3">
 <div class="pic"><img src="photography/003.jpg" height="100px" width="150px"/></div> 
 <div class="pic"><img src="photography/007.jpg" height="100px" width="150px"/></div> 
 <div class="pic"><img src="photography/005.jpg" height="100px" width="150px"/></div> 
 <div class="pic"><img src="photography/002.jpg" height="100px" width="150px"/></div> 


 </div>             
</div>

<div id="footer"><div style="float:left;"><font color="#FFF" size="+1" style="font-family:Calibri "><i>Codex Infosolution Pvt. Ltd.</i></font></div>

		<div style=" margin-left:780px; margin-top:-25px;float:left;">
        		<a href="#"><img src="img/soc-icon-1.png"/></a>
					<a href="#"><img src="img/soc-icon-2.png"/></a>
					<a href="#"><img src="img/soc-icon-3.png"/> </a>
        
        </div>
</div>
</div>
</div>


</body>
</html>