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



		<div class="dropdown" style="margin-left:80%" >

		<span class="dropdown-toggle fa fa-envelope-o logo-avatar" data-toggle="dropdown"><span style="margin-left:-40px;margin-top:-25px" class="badge">12</span></span>&nbsp;&nbsp;&nbsp;&nbsp;
		   <ul class="dropdown-menu" style="margin-left:-20%">
			 <li>
				 <a href="#"> <img style="width:20%" src="https://thumb7.shutterstock.com/display_pic_with_logo/3067298/502432927/stock-photo-original-oil-painting-on-canvas-beautiful-multicolored-peacock-modern-art-502432927.jpg" alt="">
					&nbsp;&nbsp;
				<b> Ikriama </b>
			 	</a>
			 </li>
		   </ul>
	    </div>

		<div class="dropdown" style="margin-left:83%;margin-top:-27px">
		  <span class="dropdown-toggle fa fa-user-o logo-avatar" data-toggle="dropdown"></span>
		  <ul class="dropdown-menu">
		    <li><a href="?p=profile">Profile</a></li>
		    <li><a href="?p=profile">Pengaturan</a></li>
		    <li><a href="#">Log Out</a></li>
		  </ul>

		</div>
		<div class="dropdown-mobile">
			<span class="dropdown-toggle fa fa-bars logo-avatar" data-toggle="dropdown"></span>
			<ul class="dropdown-menu" >
			  <li><a href="home.html" class="menu-control"><span class="fa fa-home"></span>&nbsp; Home</a></li>
			  <li><a href="?p=group" class="menu-control"><span class="fa fa-child"></span>&nbsp; Group</a></li>
			  <li><a href="?p=anak" class="menu-control"><span class="fa fa-child"></span>&nbsp; Anak</a></li>
			  <li><a href="?p=arcive" class="menu-control"><span class="fa fa-file-archive-o"></span>&nbsp; Arsip</a></li>
      		  <li class="divider"></li>
			  <li><a href="?p=profile" class="menu-control"><span class="fa fa-user"></span>&nbsp; profil</a></li>
			  <li><a href="?p=profile" class="menu-control"><span class="fa fa-gears"></span>&nbsp; Pengaturan</a></li>
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
			<a href="/" class="menu-control"><br>Home</a>
		</p>
		<p class="fa fa-user-o bb">
			<a href="?p=profile" class="menu-control"><br>Profil</a>
		</p>
		<p class="fa fa-users bb">
			<a href="?p=group" class="menu-control"><br>Group</a>
		</p>
		<p class="fa fa-child bb">
			<a href="?p=anak" class="menu-control"><br>Anak</a>
		</p>
		<p class="fa fa-file-archive-o bb">
			<a href="?p=arcive" class="menu-control"><br>Arsip</a>
		</p>
		<p class="fa fa-gears bb">
			<a href="?p=profile" class="menu-control"><br>Pengaturan</a>
		</p>

		<div class="clean"></div>

	</ul>
</div>
<div class="container">
	<div class="main">

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

	<div class="footer">
		<h4>&copy; licence <a href=""> MIT School </a></h4>
	</div>

</div>



</body>
</html>
