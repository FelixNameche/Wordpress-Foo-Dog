<!DOCTYPE html>
<html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Les Grosses Teubes" />
    <!--
    <link rel="stylesheet" href="style.css"  type="text/css">
  -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
  <title>FooDogs</title>
</head>
<body>
<header class="header">
    <div class="headertop">
		<div class="header-title">
			<h1>FooDog</h1>
		</div>
		<div class="header-social">
			<ul>
				<li><a href="https://www.facebook.com" target=_blank><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
				<li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
		<div class="header-links">
      <?php wp_nav_menu() ?>
      <!--
			<ul>
				<li><a href="index.php/page-nutrition">NUTRITION</a></li>
				<li><a href="page-wellness.php">WELLNESS</a></li>
				<li><a href="page-lifestyle.php">LIFESTYLE</a></li>
				<li><a href="page-community.php">COMMUNITY</a></li>
			</ul>
    -->
      <hr>
		</div>
    </div>
</header>
