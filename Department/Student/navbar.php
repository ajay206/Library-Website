<?php
  include "connection.php";
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="navs.css">
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
    <input id="mi4" type="radio" name="tab" class="mitems">
    <label for="mi4" class="tab"><a href="feedback.php">Feedback</a></label>
</div>
<?php
}
?>
</body>
</html>