<?php
  include 'connection.php';
  include 'footer.php';
  session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styless.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Library </title>
	<h1><a href="index.php"><img src="images/logo.jpg" style="width: 30%; height: 100%; float: left; opacity:1; "></a></h1>
	
</head>
<body>
	<a href="index.php" id="home">HOME</a>
 <?php
    if (isset($_SESSION['login_user']))
    { 
        ?>
 <div class="menu">
    <input id="mi5" type="radio" name="tab" class="mitems">
    <label for="mi5" class="tab" ><a href="books.php">Books</a></label>
    <input id="mi3" type="radio" name="tab" class="mitems">
    <label for="mi3" class="tab"><a href="logout.php" style="color: black;">Logout<img src="images/loglogo.jpg"></a></label>
    <input id="mi6" type="radio" name="tab" class="mitems">
    <label for="mi6" class="tab" ><a href="http://localhost/Department/admin/">Admin</a></label>
    <input id="mi4" type="radio" name="tab" class="mitems">
    <label for="mi4" class="tab"><a href="feedback.php">Feedback</a></label>
    <a href="profile.php"><img src="images/prof.jpg"></a>
    <?php
   echo "Hi, ".$_SESSION['login_user'];
    ?>
</div>
<?php
}
else {
    ?>
    <div class="menu">
    <input id="mi5" type="radio" name="tab" class="mitems">
    <label for="mi5" class="tab" ><a href="books.php">Books</a></label>
    <input id="mi3" type="radio" name="tab" class="mitems">
    <label for="mi3" class="tab"><a href="stlogin.php" style="color: black;">Login<img src="images/loglogo.jpg"></a></label>
    <input id="mi6" type="radio" name="tab" class="mitems">
    <label for="mi6" class="tab" ><a href="http://localhost/Department/admin/">Admin</a></label>
    <input id="mi4" type="radio" name="tab" class="mitems">
    <label for="mi4" class="tab"><a href="feedback.php">Feedback</a></label>
</div>
<?php
}
?>

<section id="p6">
	<div id="time">
	<p style="color: yellow;">Welcome to Department Library</p><br>
	<p>Opens : 08:30 am</p><br>
	<p>Closes : 06:30 pm</p><br>
</div>
</section>
<section id="p1">
	<div class="slidershow middle top" style="width: 1100px;height: 550px;margin-left: 220px;">

      <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <div class="slide s1">
          <img src="images/lin.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/lim.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/dl2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/dl3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/limma.jpg" alt="">
        </div>
      </div>

      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
      </div>
    </div>
</section>
<section id="p4" style="top: 1500px;">
	<h2>ABOUT US</h2>
	<div class="about" style="top: 1570px;">
	
			<div class="card" style="margin: 0px 50px;">
				<img src="images/1.jpg"><br>
				<p style="text-align: center;padding: 40px 10px;">KONDETI AJAY KUMAR<br>TEAM LEADER</p>
			</div>
			<div class="card" style="margin: 0px 50px;">
				<img src="images/1.jpg"><br>
				<p style="text-align: center;padding: 40px 10px;">SHAIK AMAAN PARVEZ<br>TEAM MEMBER</p>
			</div>
			<div class="card" style="margin: 0px 50px;">
				<img src="images/1.jpg"><br>
				<p style="text-align: center;padding: 40px 20px;">A NITISH KUMAR<br>TEAM MEMBER</p>
			</div>
		</div>
</section>
</body>
</html>