<?php

session_start();
include_once "db_connect.php";
$mysqli = new mysqli("localhost","root","","db_forum1") or die("TEST");
$stmt = $mysqli->prepare("SELECT * FROM tb_posts");
$stmt->execute();
$stmt->bind_result($sPost,$iUserid);
$data = [];

while($row = $stmt->fetch()){
	$data[] = array(
		"sPost"=>$sPost,
		"iUserid"=>$iUserid
	);
}

?>


<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">

  <meta name="theme-color" content="#fafafa">
	<meta name="viewport" content="width=device-width, initialscale=1">
	
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
</head>

<body>

	<header class="header">
  <a href="index.html" class="logo">AceTutor</a>
		<input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a href="homein.html">Home</a></li>
    <li><a href="forumin.html" class="clicked">Forum</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</header>
	
	<div class="row">
  <div class="leftcolumn">
    <div class="clear card">
      <h2>GENERAL ENQUIRES</h2>
      <h5>Posted by <div class="name">Derp</div>, 07-12-2019<a class="clear btn_edit" href="#"></a></h5>
		<a class="btn_delete" href="#"></a>
      <div class="postcon1" ><div class="postcon2"><p>May I know are all tutors local or foreigners? This is my first time here, please reply to my post asap. Thank you so much!</p></div></div>
 <a class="btn_read" href="#">Read more</a>
    </div>
    <div class="clear card">
      <h2>TECHNICAL SUPPORT</h2>
      <h5>Posted by <div class="name">Derp</div>, 07-12-2019<a class="clear btn_edit" href="#"></a></h5>
		<a class="btn_delete" href="#"></a>
      <div class="postcon1"><div class="postcon2"><p>My transaction went through for booking of first lesson but my bank account shows I had paid double of the price. Kindly assist me please.</p></div></div><a class="btn_read" href="#">Read more</a>
      
    </div>
	  
	  <?php
	  foreach($data as $key=>$val):
	  ?>
	  
	  <div class="clear card">
      <h2>FEEDBACKS</h2>
		  <!-- appear the person name that post the forum -->
      <h5>Posted by <div class="name"><?=$val["iUserid"]?></div>, 07-12-2019<a class="clear btn_edit" href="#"></a></h5>
		<a class="btn_delete" href="#"></a>
		  <!-- appear data post -->
      <div class="postcon1"><div class="postcon2"><p><?=$val["sPost"]?></p></div></div><a class="btn_read" href="#">Read more</a>
      
    </div>
	  <?php
	  endforeach;
	  ?>
	  
  </div>
  <div class="rightcolumn">
    <div class="clear card">
      <h2>About Me</h2>
      <img class="proimg" src="img/stud3.jpg" alt="student2"><div class="about">
      <p>Name: Sottie</p><p>Role: Tutor</p><p>Highest Qualification: Degree</p><p>Age: 30</p></div>
    </div>
	  

	<div class="clear"></div>
    <div class="card">
      <h3>Categories</h3>
		<a class="btn_cata" href="#">General Enquires</a><br>
		<a class="btn_cata" href="#">Technical Support</a><br>
		<a class="btn_cata" href="#">Feedbacks</a>
    </div>
	  
</div>
		
		
		<div class="row">
		  <h3>Create Post</h3>
	  <form action="insertpost.php" method="post">
		  <div class="row">
	   <div class="lab">
        <label for="name">Name</label>
      </div>
			
	  <div class="inp">
        <input type="text" id="iUserid" name="iUserid" placeholder="Your name..">
			  </div>
		  </div>

				  <div class="row">
	  <div class="lab">
        <label for="desc">Inquiry</label>
      </div>
      <div class="inp">
        <textarea id="sPost" name="sPost" placeholder="Write something.." style="height:200px"></textarea>
      </div>
					  </div>
			  <div class="row">
	  <input type="submit" value="Submit">
				  </div>
	  </form>
</div>
	</div>
<footer class="footer">
	
	<img src="img/facebook.png" alt="fb">
	<img src="img/instagram.png" alt="ig">
	<img src="img/google-plus.png" alt="gmail">
	<p>Copyright &#169; Meihui 2019</p>
	
	</footer>
	
</body>
