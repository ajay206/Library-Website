<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Department Library
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
</style>
</head>


<body style="padding-right: 0px;margin-right: 0px;">
	<div class="wrapper">
		<header style="width: 1530px;">
		<div class="logo">
			<h1><a href="index.php"><img src="images/logo.jpg" style="width: 80%; height: 100%; float: left; opacity:1;"></a></h1>
		</div>

		<?php
		if(isset($_SESSION['login_ad']))
		{
			?>
				<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="books.php">BOOKS</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
							<ul>
								<li><a href="index.php">HOME</a></li>
								<li><a href="books.php">BOOKS</a></li>
								<li><a href="admin_login.php">LOGIN</a></li>
							</ul>
						</nav>
		<?php
		}
			
		?>

			
		</header>
		<section>
		<div class="sec_img" style="background-image: url(images/lim.jpg);width: 1530px;">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">Welcome to library</h1><br><br>
				<h1 style="text-align: center;font-size: 25px;">Opens at: 08:30 am</h1><br>
				<h1 style="text-align: center;font-size: 25px;">Closes at: 06:30 pm</h1><br>
			</div>
		</div>
		</section>
		

	</div>
	<?php  

		include "footer.php";
	?>
</body>
</html>