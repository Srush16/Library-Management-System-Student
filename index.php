<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		LIBRARY MANAGEMENT SYSTEM
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<style type="text/css">
		nav
{
    float:right;
    word-spacing: 30px;
}
nav li
{
    display: inline-block;
    line-height: 100px;
}
	</style>
</head>
<body>
<div class="wrapper">
<header>
	<div class="logo">
	<img src="images/ooooooo.png"></div>

	<?php
            if(isset($_SESSION['login_user']))
            {?>
            <ul class="nav navbar-nav navbar-right">
	<nav>
		<ul>
			<li><a href="indexx.php">HOME</a></li>
			<li><a href="books.php">BOOKS</a></li>
			<li><a href="logout.php">LOGOUT</a></li>
			<li><a href="feedback.php">FEEDBACK</a></li>
				

		</ul>
	</nav>

	
	<?php
}
else
{?>
	  <nav>
		<ul>
			<li><a href="indexx.php">HOME</a></li>
			<li><a href="books.php">BOOKS</a></li>
			<li><a href="student_login.php">STUDENT-LOGIN</a></li>
			<li><a href="feedback.php">FEEDBACK</a></li>
				

		</ul>
	</nav>
	<?php
}
?>	
</header>
<section>
	<div class="sec_img">
	<br><br><br>
	<div class="box">
		<br><br><br>
		<h1 style="text-align: center;font-size: 55px;"> Keep Calm</h1><br><br>
		<h1 style="text-align: center;font-size: 45px;"> And</h1><br><br>
		<h1 style="text-align: center;font-size: 45px;"> Read a book</h1><br>
	</div>
	</div>
</section>
 </div>
 <?php
 include "footer.php";
 ?>
</body>
</html>