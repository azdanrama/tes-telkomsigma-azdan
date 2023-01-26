
	<?php
		error_reporting(0);
        $b=$data->row_array();
        $url=base_url().'artikel/'.$b['tulisan_slug'];
	    $img=base_url().'assets/images/'.$b['tulisan_gambar'];
	    $title=$b['tulisan_judul'];
	    $author=$b['tulisan_author'];
	    $date=$b['tanggal'];
	    $kategori=$b['tulisan_kategori_nama'];
	    $deskripsi=strip_tags($b['tulisan_isi']);
	    $isi=$b['tulisan_isi'];
	    $views=$b['tulisan_views'];
	    $rating=$b['tulisan_rating'];
    ?>
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Azdan Vila Ramadhani" />

	<meta property="fb:app_id" content="966242223397117" />
    <meta property="og:locale" content="id_id" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $title;?>" />
    <meta property="og:description" content="<?php echo $deskripsi;?>" />
    <meta property="og:url" content="<?php echo $url?>" />
    <meta property="og:site_name" content="mfikri.com" />

    <meta property="article:section" content="<?php echo $author;?>" />
    <meta property="og:image" content="<?php echo $img?>" />
    <meta property="og:image:width" content="460" />
    <meta property="og:image:height" content="440" />
		<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicontelkom.png'?>">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
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

	<link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url().'theme/js/modernizr-2.6.2.min.js'?>"></script>

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
						<li class="active"><a href="<?php echo base_url().'artikel'?>">Information</a></li>
						<li><a href="<?php echo base_url().'gallery'?>">Gallery</a></li>
						<li><a href="<?php echo base_url().'kontak'?>">Contact Us</a></li>
						<li class="cta"><a href="<?php echo base_url().'administrator'?>">Sign In</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>


	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?php echo base_url().'theme/images/news-more.jpg'?>);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>


	<div class="fh5co-pricing">
		<div class="container">


			<div class="row">

					<div class="col-md-8">
						<h1 style="margin-bottom:0px;"><a href="<?php echo $url;?>"><?php echo $title;?></a></h1>
						<small><em>Posted by: <?php echo $author;?> | <?php echo $date;?> | Category: <?php echo $kategori;?> | <?php echo $views;?> views | Rate: <?php echo $rating;?></em></small>
							<figure>
								<img src="<?php echo $img;?>" alt="" class="img-responsive">
							</figure>
							<?php echo $isi;?>
								<?php if($rate->num_rows()>0):?>

								<?php else:?>
								<div class="alert alert-success">
									<strong>Apakah pendapat Anda tentang artikel ini?</strong><br/><br/>
									<a class="btn btn-sm" href="<?php echo base_url().'blog/good/'.$b['tulisan_slug'];?>" title="Good"><i class="fa fa-smile-o fa-2x"></i></a>
									<a class="btn btn-sm" href="<?php echo base_url().'blog/like/'.$b['tulisan_slug'];?>" title="Like"><i class="fa fa-thumbs-o-up fa-2x"></i></a>
									<a class="btn btn-sm" href="<?php echo base_url().'blog/love/'.$b['tulisan_slug'];?>" title="Love"><i class="fa fa-heart-o fa-2x"></i></a>
									<a class="btn btn-sm" href="<?php echo base_url().'blog/genius/'.$b['tulisan_slug'];?>" title="Genius"><i class="fa fa-lightbulb-o fa-2x"></i></a>
								</div>
								<?php endif;?>
					</div>



					<div class="col-md-4">
						<form class="search_form" action="<?php echo base_url().'blog/search'?>" method="post">
							<input type="text" name="xfilter" class="form-control" placeholder="Search" required>
							<button type="submit" id="btncari"></button>
						</form>
						<br/>

						<h4>CATEGORIES</h4>
						<div style="border-bottom: 1px #ccc solid;margin-top:-20px;margin-bottom:20px;"></div>
						<ul class="list-unstyled">
						<?php foreach($kat->result() as $i):?>
							<li><a href="<?php echo base_url().'blog/kategori/'.$i->kategori_id;?>"><?php echo $i->kategori_nama.' ('.$i->jml.')';?></a></li>
						<?php endforeach;?>
						</ul>
						<br/>
						<h4>POPULAR ARTICLES</h4>
						<div style="border-bottom: 1px #ccc solid;margin-top:-20px;margin-bottom:20px;"></div>
						<?php foreach ($populer->result() as $row) : ?>
						<div class="media">
							<div class="media-left">
								<a href="<?php echo base_url().'artikel/'.$row->tulisan_slug;?>">
									<img class="media-object" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" width="90">
								</a>
							</div>
							<div class="media-body">
								<h4 class="media-heading"><a href="<?php echo base_url().'artikel/'.$row->tulisan_slug;?>"><?php echo $row->tulisan_judul;?></a></h4>
								<span><small><i>by: <?php echo $row->tulisan_author;?> | <?php echo $row->tanggal;?></i></small></span>
							</div>
						</div>
						<?php endforeach;?>

						<br/>

						<h4>LATEST ARTICLES</h4>
						<div style="border-bottom: 1px #ccc solid;margin-top:-20px;margin-bottom:20px;"></div>
						<?php foreach ($terbaru->result() as $row) : ?>
						<div class="media">
							<div class="media-left">
								<a href="<?php echo base_url().'artikel/'.$row->tulisan_slug;?>">
									<img class="media-object" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" width="90">
								</a>
							</div>
							<div class="media-body">
								<h4 class="media-heading"><a href="<?php echo base_url().'artikel/'.$row->tulisan_slug;?>"><?php echo $row->tulisan_judul;?></a></h4>
								<span><small><i>by: <?php echo $row->tulisan_author;?> | <?php echo $row->tanggal;?></i></small></span>
							</div>
						</div>
						<?php endforeach;?>

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
	<!-- Easy PieChart -->
	<script src="<?php echo base_url().'theme/js/jquery.easypiechart.min.js'?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url().'theme/js/jquery.flexslider-min.js'?>"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url().'theme/js/jquery.stellar.min.js'?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url().'theme/js/main.js'?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#btncari').hide();
		});
	</script>
	<script>
        jQuery(document).ready(function($) {
          $('.popup2').click(function(event) {
            var width  = 575,
                height = 400,
                left   = ($(window).width()  - width)  / 2,
                top    = ($(window).height() - height) / 2,
                url    = this.href,
                opts   = 'status=1' +
                         ',width='  + width  +
                         ',height=' + height +
                         ',top='    + top    +
                         ',left='   + left;
            window.open(url, 'facebook', opts);
            return false;
          });
        });
	</script>

	</body>
</html>
