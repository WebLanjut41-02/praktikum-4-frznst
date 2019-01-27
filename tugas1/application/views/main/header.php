<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo base_url()?>aset/img/favicon.png" type="image/png">
	<title>Satner Portfolio</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>aset/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url()?>aset/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>aset/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>aset/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>aset/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url()?>aset/vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="<?php echo base_url()?>aset/css/style.css">
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="<?php echo base_url()?>aset/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item <?php if($this->uri->segment(1)=="home"||$this->uri->segment(1)=="") echo "active" ?> "><a class="nav-link" href="<?php echo base_url()?>home">Home</a></li>
							<li class="nav-item <?php if($this->uri->segment(1)=="foto") echo "active" ?>"><a class="nav-link" href="<?php echo base_url()?>foto">Foto Pribadi</a></li>
							<li class="nav-item <?php if($this->uri->segment(1)== "komentar"||$this->uri->segment(1)=="reply-komentar") echo "active" ?>"><a class="nav-link" href="<?php echo base_url()?>komentar">Komentar</a></li>
							<li class="nav-item <?php if($this->uri->segment(1)=="portofolio") echo "active" ?>"><a class="nav-link" href="<?php echo base_url()?>portofolio">Portofolio</a></li>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->