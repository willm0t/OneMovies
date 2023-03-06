<!DOCTYPE html>
<html>
<head>
<!-- bootstrap4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  
	<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Titolo del sito 	-->
	<title>OneMovies
	</title>

	<style>
	/* Make the image fully responsive */
	.carousel-inner img {
		width: 100%;
		height: 100%;
	}
	
	h2 {
		font-family: 'Footlight MT Light';
		font-size: 34pt;
		font-weight: 700;
		font-style: italic;
		text-align:center;
	}
	
	h3 {
		font-family: 'Brush Script Std Medium';
		font-size: 24pt;
		text-align:center;
	}
	
	h1 {
		font-family: 'Old English Text MT';
		font-size: 44pt;
		text-align:center;
	}
	.footer {
		text-align:center;
		color: white;
		background-color: black;
	}
	
<!-- NAVBAR style -->
/* navbar */
.navbar-nav {
    background-color: #000000;
    border-color: #000000;
}

.navbar-nav .navbar-brand:hover,
.navbar-nav .navbar-brand:focus {
    color: #fcfc00;
}
/* Link */
.navbar-nav .navbar-nav > li > a {
    color: #ffffff;
}
.navbar-nav .navbar-nav > li > a:hover,
.navbar-nav .navbar-nav > li > a:focus {
    color: #ffffff;
	background-color: #000000;
}

	
</style>
	

<link rel="shortcut icon" type="image/x-icon" href="C:\Users\rober\Desktop\OneMovies website\logo.png" />
	
	
	
</head>	

<body>

<div class="container">
	<div id="main" style="text-align:center;">

	</div>
	
	<nav class="navbar navbar-expand-sm bg-dark navbar-nav justify-content-center">
		<ul class="navbar-nav">
			<li class="nav-item">
			  <a class="nav-link" href="#ALLSHOWS">All Shows</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#YOUTUBE">YouTube</a>
			</li>
				<li class="nav-item">
			  <a class="nav-link" href="#DAILYMOTION">DailyMotion</a>
			</li>
				<li class="nav-item">
			  <a class="nav-link" href="#NETFLIX">Netflix</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#AMAZONVIDEO">Amazon Video</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#DISNEYPLUS">Disney Plus</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#REVIEWS">Reviews</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#LOGIN">Login</a>
			</li>
		</ul>
	</nav>
	<br>
	<hr style="height:1px;border-width:0;background-color:black"></br>

	<div>
		<h1>OneMovies <img src="C:\Users\rober\Desktop\UNIVERSITY\COMP5022 - Innovative Product Development\coursework\OneMovies website\logo.png" style="max-width:20%; height:auto;"/></h1>
		<h2>An all inclusive streaming and downloading platform that supports video content from all the websites you love.</h2> <br>
		<hr style="height:1px;border-width:0;background-color:black"></br> </br>
	</div>
	
	<!-- slideshow -->
	<div id="demo" class="carousel slide" data-ride="carousel" data-interval="2500">

		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
			<li data-target="#demo" data-slide-to="3"></li>
			<li data-target="#demo" data-slide-to="4"></li>
			<li data-target="#demo" data-slide-to="5"></li>
		</ul>
	  
		<!-- The slideshow -->
		<div class="carousel-inner">

			<div class="carousel-item active">
				<img src="https://i.insider.com/5dc47f123afd37518905aba6?width=700" width="900" height="400">
			</div>
			<div class="carousel-item">
			  <img src="https://i.insider.com/5dcac22f7eece57e8d352d6d?width=700" width="900" height="400">
			</div>
			<div class="carousel-item">
				<img src="https://kinsta.com/wp-content/uploads/2020/03/dailymotion.png" width="900" height="400">
			</div>
			<div class="carousel-item">
				<img src="https://cdn.mos.cms.futurecdn.net/yYAwGNkXjtN4un5UyPyhP6.jpg" width="900" height="400">
			</div>
		
		</div>
	  
		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
		 </br><hr style="height:1px;border-width:0;background-color:black"></br> </br>
	<!-- slideshow end -->

	
	<div id="ALLSHOWS" style="text-align:center;">
		<h2>All Shows</h2>
		<br>
		<div class="row">
			<div class="col-4">
		<img src="https://media.gq.com/photos/5df5a3794e7a380009b83bbd/16:9/w_2560%2Cc_limit/BestShows.jpg" alt="All Shows" style="max-width:100%; height:auto;"/>
	
			</div>
			<div class="col-8" style="text-align: justify;">
			  <input type="text" placeholder="Search..." >
			  
			  <br> <br/>
				<p class="call">Type in the title of a movie, we will take care of the rest!</p>
		
			</div>
		</div>
		<br><hr style="height:1px;border-width:0;background-color:black"><br>
		
	</div>
	
	<div id="YOUTUBE" style="text-align:center;">
		<h2 style="text-align:center;">YouTube</h2>
		<br>
		<br>
		<div class="row">
			<div class="col-4">
			<iframe style="max-width:100%; height:auto;" src="https://www.youtube.com/embed/_9oueEOX2tI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<!-- <img src="C:\Users\rober\Desktop\youtube.png" alt="YouTube" style="max-width:100%; height:auto;"/> -->
			<form action="" method="post">
    			    <button name="Button1" value="Add to List">Add to List</button>
			</form>
			<?php
			$dbServername = "localhost";
			$dbUsername = "root";
			$dbPassword = "backdoor";
			$dbName = "onemovies";
			$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
			if(isset($_POST['Button1'])){
			$sql = "UPDATE user SET video_list=CONCAT(video_list,', ',0) WHERE user_id=0";
			mysqli_query($conn, $sql);
			}
			mysqli_close($conn);
			?>
			</div>
			<div class="col-8" style="text-align: justify;">
			  <input type="text" placeholder="Search...">
			 <br> <br/>
				<p class="call">Search for your favorite movies on YouTube</p>
			</div>
		</div>
	<br><hr style="height:1px;border-width:0;background-color:black"></br>
    </div>
		
	<div id="DAILYMOTION" style="text-align:center;">
		<h2>Daily Motion</h2>
		<br>
		<br>
		<div class="row">
			<div class="col-4">
			<iframe style="max-width:100%; height:auto;" frameborder="0" type="text/html" src="https://www.dailymotion.com/embed/video/x6yhbne" width="100%" height="100%" allowfullscreen title="Dailymotion Video Player" > </iframe>
			<form action="" method="post">
    			    <button name="Button2" value="Add to List">Add to List</button>
			</form>
			<?php
			$dbServername = "localhost";
			$dbUsername = "root";
			$dbPassword = "backdoor";
			$dbName = "onemovies";
			$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
			if(isset($_POST['Button2'])){
			$sql = "UPDATE user SET video_list=CONCAT(video_list,', ',1) WHERE user_id=0";
			mysqli_query($conn, $sql);
			}
			mysqli_close($conn);
			?>
			</div>
			<div class="col-8" style="text-align: justify;">
			  <input type="text" placeholder="Search...">
			  <br> <br/>
				<p class="call">Did you find what you were looking for? If not, try on the next source!</p>
			</div>
		</div>
	<br><hr style="height:1px;border-width:0;background-color:black"></br>
    </div>
	
	<div id="NETFLIX" style="text-align:center;">
		<h2>Netflix</h2>
		<br>
		<br>
		<div class="row">
			<div class="col-4">
				<img src="https://i.pcmag.com/imagery/reviews/05cItXL96l4LE9n02WfDR0h-5..v1582751026.png" alt="Netflix" style="max-width:100%; height:auto;"/>
			</div>
			<div class="col-8" style="text-align: justify;">
			  <input type="text" placeholder="Search...">
			  <br> <br/>
				<p class="call">Nexflix's movies now available for free on our website</p>
			</div>
		</div>
		<br><hr style="height:1px;border-width:0;background-color:black"></br>
    </div>
		
	<div id="AMAZONVIDEO" style="text-align:center;">
		<h2>Amazon Video </h2>
		<br>
		<br>
		<div class="row">
			<div class="col-4">
				<img src="data:image/png;base64,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" alt="Amazon" style="max-width:100%; height:auto;"/>
			</div>
			<div class="col-8" style="text-align: justify;">
			  <input type="text" placeholder="Search...">
			  <br> <br/>
				<p class="call">All movies from Amazon Prime Video now available here!</p>

			</div>
		</div>
		</div></br></br>
	</div>	
		<br><hr style="height:1px;border-width:0;background-color:black"></br>

	
	<div id="DISNEYPLUS" style="text-align:center;">
	<h2>Disney Plus</h2>
	<br>
		<br>
		<div class="row">
			<div class="col-4">
				<img src="https://media.comicbook.com/2018/11/disney-plus-logo-1143358.jpeg" alt="Disney Plus" style="max-width:100%; height:auto;"/>
			</div>
			<div class="col-8" style="text-align: justify;">
			  <input type="text" placeholder="Search...">
			  <br> <br/>
				<p class="call">Search for your favorite movie available on Disney Plus </p>

			</div>
		</div>
	<br><hr style="height:1px;border-width:0;background-color:black"></br>
    </div>
	<div id="REVIEWS" style="text-align:center;">
		<h2>Reviews</h2>
		<br>
		<br>
 <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  margin: 0 auto; /* Center website */
  max-width: 800px; /* Max width */
  padding: 20px;
}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
</style>
</head>
<body>

<span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>

</body>

		
		<br><hr style="height:1px;border-width:0;background-color:black"></br>
	</div>
	
	<div id="LOGIN" style="text-align:center;">
		<h2>Login</h2>
		<br>
			<br>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>

		<br> <hr style="height:1px;border-width:0;background-color:black"></br>
		
	<div class="footer">
		<br>
		<footer>&copy2022  Roberta Stendardo | Rob Willmot | Jack O'Regan |  |  Oxford Brookes University  |  Agile Project</footer>
		<br>

	</div>
	
</div>
	
<!-- Go up button  -->
<script type="text/javascript" >
var scrolltotop={   
    setting: {startline:100, scrollto: 0, scrollduration:1000, fadeduration:[500, 100]},
    controlHTML: '<img src="https://lh4.googleusercontent.com/-ObQOyipBToY/T4aIVL3dhsI/AAAAAAAAXgk/RIeESqo-UZg/s48/gotop6.png" />',
    controlattrs: {offsetx:15, offsety:15},
    anchorkeyword: '#top',
    state: {isvisible:false, shouldvisible:false},
    scrollup:function(){
        if (!this.cssfixedsupport)
            this.$control.css({opacity:0})
        var dest=isNaN(this.setting.scrollto)? this.setting.scrollto : parseInt(this.setting.scrollto)
        if (typeof dest=="string" && jQuery('#'+dest).length==1)
            dest=jQuery('#'+dest).offset().top
        else
            dest=0
        this.$body.animate({scrollTop: dest}, this.setting.scrollduration);
    },
    keepfixed:function(){
        var $window=jQuery(window)
        var controlx=$window.scrollLeft() + $window.width() - this.$control.width() - this.controlattrs.offsetx
        var controly=$window.scrollTop() + $window.height() - this.$control.height() - this.controlattrs.offsety
        this.$control.css({left:controlx+'px', top:controly+'px'})
    },
    togglecontrol:function(){
        var scrolltop=jQuery(window).scrollTop()
        if (!this.cssfixedsupport)
            this.keepfixed()
        this.state.shouldvisible=(scrolltop>=this.setting.startline)? true : false
        if (this.state.shouldvisible && !this.state.isvisible){
            this.$control.stop().animate({opacity:1}, this.setting.fadeduration[0])
            this.state.isvisible=true
        }
        else if (this.state.shouldvisible==false && this.state.isvisible){
            this.$control.stop().animate({opacity:0}, this.setting.fadeduration[1])
            this.state.isvisible=false
        }
    },  
    init:function(){
        jQuery(document).ready(function($){
            var mainobj=scrolltotop
            var iebrws=document.all
            mainobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest
            mainobj.$body=(window.opera)? (document.compatMode=="CSS1Compat"? $('html') : $('body')) : $('html,body')
            mainobj.$control=$('<div id="topcontrol">'+mainobj.controlHTML+'</div>')
                .css({position:mainobj.cssfixedsupport? 'fixed' : 'absolute', bottom:mainobj.controlattrs.offsety, right:mainobj.controlattrs.offsetx, opacity:0, cursor:'pointer'})
                .attr({title:'Scroll Back to Top'})
                .click(function(){mainobj.scrollup(); return false})
                .appendTo('body')
            if (document.all && !window.XMLHttpRequest && mainobj.$control.text()!='')
                mainobj.$control.css({width:mainobj.$control.width()})
            mainobj.togglecontrol()
            $('a[href="' + mainobj.anchorkeyword +'"]').click(function(){
                mainobj.scrollup()
                return false
            })
            $(window).bind('scroll resize', function(e){
                mainobj.togglecontrol()
            })
        })
    }
}
scrolltotop.init()
</script>



</body>
</html>