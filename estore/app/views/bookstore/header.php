<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= $data['page_title'] ?> | E Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="<?= ASSETS . THEME ?>css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="<?= ASSETS . THEME ?>css/style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="<?= ASSETS . THEME ?>font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="<?= ASSETS . THEME ?>font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	  <!-- Favicons -->
    <link rel="shortcut icon" href="<?= ASSETS . THEME ?>ico/favicon.ico">
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>	
				<a class="active" href="index"> <span class="icon-home"></span> Home</a> 
				<?php if(isset($data['user_data'])): ?>
						<a href="<?=ROOT?>profile"><span class="icon-user"></span> <?=	$data['user_data']->name ?> </a>
				<?php endif; ?>	
				<a href="register"><span class="icon-edit"></span> Free Register </a> 
				<a href="contact"><span class="icon-envelope"></span> Contact us</a>
				<a href="cart"><span class="icon-shopping-cart"></span> 2 Item(s) - <span class="badge badge-warning"> $448.42</span></a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="index"><span>Twitter Bootstrap ecommerce template</span> 
		<img src="<?= ASSETS .THEME ?>img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
	</a>
	</h1>
	</div>
	<div class="span4">
	</div>
	<div class="span4 alignR">
	<p><br> <strong> Support (24/7) :  0800 1234 678 </strong><br><br></p>
	<span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>
	<span class="btn btn-warning btn-mini">$</span>
	<span class="btn btn-mini">&pound;</span>
	<span class="btn btn-mini">&euro;</span>
	</div>
</div>
</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class="active"><a href="index">Home	</a></li>
			  <li class=""><a href="list-view">List View</a></li>
			  <li class=""><a href="grid-view">Grid View</a></li>
			  <li class=""><a href="three-col">Three Column</a></li>
			  <li class=""><a href="four-col">Four Column</a></li>
			  <li class=""><a href="general">General Content</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">
			<li class="btn-block">
				<?php if(isset($data['user_data'])): ?>
					<a href="logout"><span class="icon-lock"></span> Logout </a>
			  <?php else: ?>
					<a href="login"><span class="icon-lock"></span> Login </a>
			  <?php endif; ?>	
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="shopBtn btn-block">Sign in</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>