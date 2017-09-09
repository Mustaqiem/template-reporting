<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporting</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php include 'asset/img-modal.php'; ?>
	<link rel="stylesheet" href="style.css">
</head>
<body>


<div class="header-fix">
	<div class="logo">
		<img src="logo-black.png" alt="">

		<div class="dropdown">

  		  <a href="#">
			  <span class="dropdown-toggle fa fa-envelope-o logo-avatar" data-toggle="dropdown"></span>&nbsp;&nbsp;&nbsp;&nbsp;
		  </a>
		  <span class="dropdown-toggle fa fa-user-o logo-avatar" data-toggle="dropdown"></span>
		  <ul class="dropdown-menu">
		    <li><a href="#">Profile</a></li>
		    <li><a href="#">Pengaturan</a></li>
		    <li><a href="#">Log Out</a></li>
		  </ul>

		</div>
		<div class="dropdown-mobile">
			<span class="dropdown-toggle fa fa-bars logo-avatar" data-toggle="dropdown"></span>
			<ul class="dropdown-menu" >
			  <li><a href="home.html" class="menu-control"><span class="fa fa-home"></span>&nbsp; Home</a></li>
			  <li><a href="home.html" class="menu-control"><span class="fa fa-user-o"></span>&nbsp; Profil</a></li>
			  <li><a href="home.html" class="menu-control"><span class="fa fa-child"></span>&nbsp; Group</a></li>
			  <li><a href="home.html" class="menu-control"><span class="fa fa-child"></span>&nbsp; Anak</a></li>
			  <li><a href="home.html" class="menu-control"><span class="fa fa-file-archive-o"></span>&nbsp; Arsip</a></li>
			  <li><a href="home.html" class="menu-control"><span class="fa fa-gears"></span>&nbsp; Pengaturan</a></li>
			  <li><a href="home.html" class="menu-control"><span class="fa fa-sign-out"></span>&nbsp; Sign out</a></li>
			  <li></li>
		  </ul>
		</div>

	</div>
</div>
<br><br><br>

<div class="menu-top">
	<ul class="menu-group">
		<p class="fa fa-home bb">
			<a href="home.html" class="menu-control"><br>Home</a>
		</p>
		<p class="fa fa-user-o bb">
			<a href="home.html" class="menu-control"><br>Profil</a>
		</p>
		<p class="fa fa-users bb">
			<a href="home.html" class="menu-control"><br>Group</a>
		</p>
		<p class="fa fa-child bb">
			<a href="home.html" class="menu-control"><br>Anak</a>
		</p>
		<p class="fa fa-file-archive-o bb">
			<a href="home.html" class="menu-control"><br>Arsip</a>
		</p>
		<p class="fa fa-gears bb">
			<a href="home.html" class="menu-control"><br>Pengaturan</a>
		</p>

		<div class="clean"></div>

	</ul>
</div>
<div class="container">
	<!-- <div class="header">
		<h1>App reporting</h1>
	</div> -->

	<div class="main">

		<div class="middle">
			<!-- Lopping in here. in to class middle -->
				<?php
				$p = isset($_GET['p'])?$_GET['p']:'';
				if ($p) {
					include $p.'.php';
				}else {
					include 'beranda.php';
				}
				?>
			<!-- =============== -->

		</div>

	</div>

	<div class="footer">
		<h4>&copy; licence <a href=""> MIT School </a></h4>
	</div>

</div>
</body>
</html>
