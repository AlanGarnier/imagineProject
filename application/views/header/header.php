<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Imagine</title>


	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">

<!--    /* Feuille de style*/-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

<!--    /* Feuille javascript*/-->
    <script src="<?php echo base_url('assets/js/init.js'); ?>"></script>

    <!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark primary-color">

		<!-- Navbar brand -->
		<a class="navbar-brand" href="<?php echo site_url("Welcome")?>">Imagine Connect</a>

		<!-- Collapse button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
				aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Collapsible content -->
		<div class="collapse navbar-collapse" id="basicExampleNav">

			<!-- Links -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link"  href="<?php echo site_url("Welcome")?>">Accueil
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link"  href="<?php echo site_url("Welcome/catalogue")?>">Catalogue
						<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link"  href="<?php echo site_url("Welcome/histoire")?>">Présentation</a>
                    <span class="sr-only">(current)</span></a>
				</li>
                <li class="nav-item">
					<a class="nav-link"  href="<?php echo site_url("Welcome/connect")?>">Connexion</a>
                    <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link"  href="<?php echo site_url("Welcome/register")?>">Inscription</a>
                    <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link"  href="<?php echo site_url("Welcome/contact")?>">Contact</a>
                    <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link"  href="<?php echo site_url("Welcome/monEspace")?>">Mon Espace</a>
                    <span class="sr-only">(current)</span></a>
				</li>

				<!-- Dropdown -->
<!--				<li class="nav-item dropdown">-->
<!--					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"-->
<!--					   aria-haspopup="true" aria-expanded="false">Dropdown</a>-->
<!--					<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">-->
<!--						<a class="dropdown-item" href="#">Action</a>-->
<!--						<a class="dropdown-item" href="#">Another action</a>-->
<!--						<a class="dropdown-item" href="#">Something else here</a>-->
<!--					</div>-->
<!--				</li>-->

			</ul>
			<!-- Links -->

<!--			<form class="form-inline">-->
<!--				<div class="md-form my-0">-->
<!--					<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">-->
<!--				</div>-->
<!--			</form>-->
		</div>
		<!-- Collapsible content -->

	</nav>
	<!--/.Navbar-->
</head>
<body>







