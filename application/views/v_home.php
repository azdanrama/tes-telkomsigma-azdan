<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TELKOMSIGMA | Indonesia Leading & Trusted IT Company</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Azdan Vila Ramadhani" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicontelkom.png'?>">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo base_url().'theme/favicon.ico'?>">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/animate.css'?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/icomoon.css'?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.css'?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/flexslider.css'?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url().'theme/js/modernizr-2.6.2.min.js'?>"></script>
	<?php
            error_reporting(0);
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

        ?>

	</head>
	<body>


	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<a href="<?php echo base_url().''?>"><img src="<?php echo base_url().'assets/images/logotelkom.png'?>"></a>
				<nav role="navigation">
					<ul>
						<li><a href="<?php echo base_url().''?>">Home</a></li>
						<li><a href="<?php echo base_url().'about'?>">About Us</a></li>
						<!-- <li><a href="<?php echo base_url().'portfolio'?>">Portfolio</a></li> -->
						<li><a href="<?php echo base_url().'artikel'?>">Information</a></li>
						<li><a href="<?php echo base_url().'gallery'?>">Gallery</a></li>
						<li><a href="<?php echo base_url().'kontak'?>">Contact Us</a></li>
						<li class="cta"><a href="<?php echo base_url().'administrator'?>">Sign In</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>


	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?php echo base_url().'theme/images/slide1.jpg'?>);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>The Best System Integration Will Ensure Your Work Runs Faster</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?php echo base_url().'theme/images/slide2.jpg'?>);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Highly Secure World Class Data Center</h2>
		   					<!-- <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p> -->
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?php echo base_url().'theme/images/slide3.jpg'?>);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Accelerate Business Transformation With Cloud Platforms</h2>
		   					<!-- <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p> -->
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?php echo base_url().'theme/images/slide4.jpg'?>);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Smart and Trusted Managed Service Solution</h2>
		   					<!-- <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p> -->
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-why-us" class="animate-box">
		<div class="container">
			<div class="row">

				<div class="col-md-3 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'theme/images/detail1_1.png'?>" class="img-responsive"></span>
					<h3>IT Services</h3>
					<p>As the experienced software development provider, Telkomsigma has become a trusted partner to support various industries in improving workflow effectiveness and increase efficiency in every business process.</p>
				</div>
				<div class="col-md-3 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'theme/images/detail1_2.png'?>" class="img-responsive"></span>
					<h3>Data Center</h3>
					<p>Delivering cost effective data center solutions, we enable our clients to focus on their core business. Our solution comprise of many elements, including : colocation, disaster recovery services, data center design & build, managed services, etc.</p>
				</div>
				<div class="col-md-3 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'theme/images/detail1_3.png'?>" class="img-responsive"></span>
					<h3>Cloud Solution</h3>
					<p>As the first cloud computing provider in Indonesia to receive CSA Security, Trust and Assurance Registry Certification combined with extensive network infrastructure, We are able to bring trusted and reliable cloud computing services to our customers.</p>
				</div>
				<div class="col-md-3 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'theme/images/detail1_4.png'?>" class="img-responsive"></span>
					<h3>Digital Services</h3>
					<p>Telkomsigma's digital services are currently focused on developing specific solutions for customers in the digital platform such as IoT, Cyber Security, Big Data Solution, and Immersive Technology.</p>
				</div>
			</div>
		</div>
	</div>


	<div class="fh5co-section-with-image">

		<img src="<?php echo base_url().'theme/images/bgcer.jpg'?>" alt="" class="img-responsive">
		<div class="fh5co-box animate-box">
			<h2>WORLD-CLASS STANDARD</h2>
			<p>To achieve the objective to become a world-class company and to comply with regulations, Telkomsigma believes its business process and operations must be based on world-class standards. Strategic measures must be taken to advance business processes in data centers and other services, that includes human resource skills and competencies.</p>
		</div>

	</div>



	<div id="fh5co-blog" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>LATEST ARTICLES</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
			<?php
				foreach ($post->result_array() as $j) :
					$post_id=$j['tulisan_id'];
					$post_judul=$j['tulisan_judul'];
					$post_isi=$j['tulisan_isi'];
					$post_author=$j['tulisan_author'];
					$post_image=$j['tulisan_gambar'];
					$post_tglpost=$j['tanggal'];
					$post_slug=$j['tulisan_slug'];
			?>
				<div class="col-md-4">
					<a class="fh5co-entry" href="<?php echo base_url().'artikel/'.$post_slug;?>">
						<figure>
						<img src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="" class="img-responsive">
						</figure>
						<div class="fh5co-copy">
							<h3><?php echo $post_judul;?></h3>
							<span class="fh5co-date"><?php echo $post_tglpost.' | '.$post_author;?></span>
							<?php echo limit_words($post_isi,20).'...';?>
						</div>
					</a>
				</div>
				<?php endforeach;?>

				<div class="col-md-12 text-center">
					<p><a href="<?php echo base_url().'artikel'?>" class="btn btn-primary btn-outline with-arrow">View More <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>


	<?php $this->load->view('v_footer');?>
	</div>


	<!-- jQuery -->
	<script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url().'theme/js/jquery.easing.1.3.js'?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url().'theme/js/jquery.waypoints.min.js'?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url().'theme/js/jquery.flexslider-min.js'?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url().'theme/js/main.js'?>"></script>

	</body>
</html>
