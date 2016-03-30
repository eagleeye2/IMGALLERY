<?php

	session_start();

	if(isset($_POST['feed']))
	{
		header('location:feedback1.php');
	
	}
	
	else if(isset($_POST['viewfeed']))
	{
		header('location:feedback2.php');
	
	}
	else if(isset($_POST['signout']))
	{
		header('location:home_gal.php');
	
	}



	
	require_once('connection.php');
$qu='select * from feedback';
$rs=mysql_query($qu);




?>

<html>
<head>
<link rel="stylesheet" href="home_gal.css" type="text/css">
<style>
.l2
{
	width:300px;
	height:100px;
	//background-color:#CC99CC;
	margin-left:5px;
	margin-top:10px;
	
		float:left;	

}

</style>
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
<div id="logout">
<?php

if(isset($_SESSION['user']))
{
?><font color="#21BECB" size="+1"><i><b>Welcome <?php echo $_SESSION['user']; ?></b></i></font> 
	<a href="logout1.php">Logout</a>
	<?php
}
else
{
$f=1;}

?>
</div> 
<div id="mid">
<div id="menu">

<div class="m1" style="margin-left:4px;"><a href="home_gal.php">Home </a></div>
<div class="m1"><a href="aboutus.php">About Us </a></div>
<div class="m1"><a href="category.php">Gallery </a></div>
<div class="m1"><a href="contactus.php">Contact Us </a></div>
<div class="m1"><a href="feedback1.php">Feedback </a></div>

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
    
    
		
		


    
    
    
	<div id="aa"><form id="form1" method="post">
	 
     <label>
	  <input name="feed" type="submit" id="feed" value="Feedback" style="background-color:#726E6D;color:#FFF;height:25px;width:70px; border-radius:5px 5px 0px 0px; border:2px solid #999999; font-family:Calibri;font-size:16px; margin-left:20px; margin-top:5px;">
	  </label>
	  <label>
	  <label>
	  <input name="viewfeed" type="submit" id="viewfeed" value="View All" style="background-color:#726E6D;color:#FFF;height:25px;width:70px; border-radius:5px 5px 0px 0px; border:2px solid #999999; font-family:Calibri;font-size:16px; margin-left:5px; margin-top:5px;">
	  </label>
      </form>
	</div> 
	<div id="ss" style="border:thick #726E6D solid ;overflow:scroll;  border-radius:5px 5px 5px 5px;" >
		
  
  <?php
  while($row=mysql_fetch_row($rs))
  {?>
  			<div class="l2" style="border-bottom-color:#CCCCCC;border-bottom-style:dashed;border-bottom-width:thin;">
  	    	<div style="height:20px; width:300px;  float:left;margin-top:10px;margin-left:10px; " ><label><font color="#21BECB" style="font-family:Calibri; font-size:16px "><?php echo $row[1]; ?></font></label> </div>
	<div style="height:40px; width:300px;  float:left;margin-top:10px;margin-left:10px;"><label><font color="#FFF" style="font-family:'times New Roman';font-size:16px; "><?php echo $row[2]; ?></font></label></div>
  		</div>
    	
  
<?php } ?>

  </div>
    
	</div>
    
	

</div>
<div id="content" >

<div id="c1"align="center"><font color="#FFF" size="+1" style="font-family:"Monotype Corsiva" ">Image Gallery is a online web portal for pictures classified into various categories.</font></br>
<a href="category.php"><font color="#21BECB" size="+1" style="font-family:"Monotype Corsiva" "> <u>Take a quick tour</u></br></font></a>
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
        		<a href="www.twitter.com"><img src="img/soc-icon-1.png"/></a>
					<a href="www.facebook.com"><img src="img/soc-icon-2.png"/></a>
					<a href="www.instagram.com"><img src="img/soc-icon-3.png"/> </a>
        
        </div>
</div>
</div>
</div>

</body>
</html>