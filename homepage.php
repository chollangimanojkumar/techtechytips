<?php
session_start();
if(isset($_SESSION['username']))
{
    $point=$_SESSION['username'];
    $urladd="logout.php";
    $npoint="LOGOUT";
}
else 
{
    $point="LOGIN";
    $urladd="loginform.html";
    $npoint="LOGIN";
}
?>
<!DOCTYPE html/css>
<html>
<head>
	<title>hompage</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body id="body">
	
	
	
		<div id="heading" class="heading">
			<p align="center"><font size="7" style="color: orange"><i><b>TECH-TIPS-TWEAKS</b></i></font></p>
		</div>
		<div id="mySidebar" class="sidebar">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="https://www.Youtube.com">Youtube</a>
		  <a href="rules.html">Rules</a>
		  <a href="contactus.html">Contact us</a>
		</div>
		<div id="main">
		  <div class="navbar">
				<k class="#menu"><button class="openbtn" onclick="openNav()">&#9776;</button></k>
			  <a class="active" href="">Home</a>
			  <a href="https://www.news.google.com">News</a>
			  <a href="forum.html">Forum</a>
			  <a href="about.html">About</a>
              <div style="float: right;">
                    <div class="dropdown">
                        <a href="<?php echo $urladd ?>" id="login" onmouseover="document.getElementById('login').innerHTML='<?php echo $npoint?>'" onmouseleave="document.getElementById('login').innerHTML='<?php echo $point?>'"><?php echo $point ?></a>
			  
                        <!--<a href="loginform.html" id="login" onmouseover="document.getElementById('login').innerHTML='</?php echo $point?>'" onmouseleave="document.getElementById('login').innerHTML='</?php echo $point?>'"></?php echo $point ?></a>-->
			                   <a onclick=""><img src="search.png" width="25" height="20"></a>
                                <a onclick="darkToggle()"><img src="darktoggle.png" width="25" height="20" ></a>
                    </div>
			    </div>
		</div><h4><marquee behaviour="scroll" scrollamount="20">*!alert!* for new tech tricks everyweek follow instagram @techtipstweaks</marquee></h4>

			<div class="divrow" style="padding-left:16px">
				<div class="divcol">
				  	<div class="col1" style="float:left; width: 50%; padding-top: 60px">
				  		<a href="android.html"><img src="android.png" height="320" width="320" class="center" style="border: 2px solid green"></a>
				  		<p align="center"><font style="color: white";  id="text1">ANDROID</font></p>
				  	</div>
				  </div>
				<div class="divcol">
				  	<div clas="col2" style="padding-top: 60px">
				  		<a href="windows.html"><img src="windows5.png" height="320" width="320" class="right" style="border:2px solid orange; padding: 10px;"></a>
				  		<p align="center"><font style="color: white";  id="text">WINDOWS</font></p>
				  	</div>
				 </div>
				 <div class="divcol">
				  	<div class="col1" style="float:left; width: 50%; padding-top: 60px">
				  		<a href="cybersecurity.html"><img src="cybersecurity.png" height="320" width="320" class="center" style="border: 2px solid green; padding: 10px;"></a>
				  		<p align="center"><font style="color: white";  id="text2">CYBER-SECURITY</font></p>
				  	</div>
				  </div>
				  <div class="divcol">
				  	<div clas="col2" style="padding-top: 60px">
				  		<a href="games.html"><img src="pubg.png" height="320" width="320" class="right" style="border:2px solid orange; padding: 10px;"></a>
				  		<p align="center"><font style="color: white";  id="text3">GAMES</font></p>
				  	</div>
				 </div>
			</div>






		</div>
			
</body>
<script type="text/javascript" src="homepage.js">

</script>
</html>
