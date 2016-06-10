<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sophie Dereymaeker</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!--Font-->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>



	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="shortcut icon" href="ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

	<style>
		/* http://jsfiddle.net/ivanarvizu/JS6JV/16/ */
		#carousel-example-generic {
			margin: 20px auto;
			width: 400px;
		}

		#carousel-custom {
			margin: 20px auto;
			width: 80%;
		}
		#carousel-custom .carousel-indicators {
			margin: 10px 0 0;
			overflow: auto;
			position: static;
			text-align: left;
			white-space: nowrap;
			width: 100%;
		}
		#carousel-custom .carousel-indicators li {
			background-color: transparent;
			-webkit-border-radius: 0;
			border-radius: 0;
			display: inline-block;
			height: auto;
			margin: 0 !important;
			width: auto;
		}
		#carousel-custom .carousel-indicators li img {
			display: block;
			opacity: 0.5;
		}
		#carousel-custom .carousel-indicators li.active img {
			opacity: 1;
		}
		#carousel-custom .carousel-indicators li:hover img {
			opacity: 0.75;
		}
		#carousel-custom .carousel-outer {
			position: relative;
		}
	</style>


	<!-- SCRIPT
    ============================================================-->
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>$(document).ready(function() {
		$(".mCustomScrollbar").mCustomScrollbar({axis:"x"});
	});</script>

</head>
<body>
<!--HEADER ROW-->
<div id="header-row">
	<div class="container">
		<div class="row">
			<!-- MAIN NAVIGATION -->
			<div class="span12">
				<div class="navbar">
					<div class="navbar-inner">
						<a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							<ul class="nav">
								<li class="active"><a href="index.html">Accueil</a></li>
								<li><a href="conseil.php">Conseillère en image</a></li>
								<li><a href="creation.php">Créations & Customisations</a></li>
								<li><a href="peinture.php">Peintures</a></li>
								<li><a href="contact.php">Contact</a></li>

							</ul>
						</div>

					</div>
				</div>
			</div>
			<!-- MAIN NAVIGATION -->
		</div>
	</div>
</div>
<!-- /HEADER ROW -->


<div class="container">
	<h1>Artiste-Peintre</h1>
	<!--Carousel
    ==================================================-->
	<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
		<div class='carousel-outer'>
			<!-- Wrapper for slides -->
			<div class='carousel-inner'>
				<div class='item active'>
					<img src='img01.jpg' alt='' />
				</div>
				<div class='item'>
					<img src='img02.jpg' alt='' />
				</div>
				<div class='item'>
					<img src='img03.jpg' alt='' />
				</div>

				<div class='item'>
					<img src='img04.jpg' alt='' />
				</div>
				<div class='item'>
					<img src='img05.jpg' alt='' />
				</div>
				<div class='item'>
					<img src='img02.jpg' alt='' />
				</div>
				<div class='item'>
					<img src='img03.jpg' alt='' />
				</div>

				<div class='item'>
					<img src='img04.jpg' alt='' />
				</div>
				<div class='item'>
					<img src='img05.jpg' alt='' />
				</div>
			</div>

			<!-- Controls -->
			<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
				<span class='glyphicon glyphicon-chevron-left'></span>
			</a>
			<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
				<span class='glyphicon glyphicon-chevron-right'></span>
			</a>
		</div>

		<!-- Indicators -->
		<ol class='carousel-indicators mCustomScrollbar'>
			<li data-target='#carousel-custom' data-slide-to='0' class='active'><img width="90" src='img01.jpg' alt='' /></li>
			<li data-target='#carousel-custom' data-slide-to='1'><img width="90" src='img02.jpg' alt='' /></li>
			<li data-target='#carousel-custom' data-slide-to='2'><img width="90" src='img03.jpg' alt='' /></li>
			<li data-target='#carousel-custom' data-slide-to='3'><img width="90" src='img04.jpg' alt='' /></li>
			<li data-target='#carousel-custom' data-slide-to='4'><img width="90" src='img05.jpg' alt='' /></li>
			<li data-target='#carousel-custom' data-slide-to='5'><img width="90" src='img02.jpg' alt='' /></li>
			<li data-target='#carousel-custom' data-slide-to='6'><img width="90" src='img03.jpg' alt='' /></li>
			<li data-target='#carousel-custom' data-slide-to='7'><img width="90" src='img04.jpg' alt='' /></li>
			<li data-target='#carousel-custom' data-slide-to='8'><img width="90" src='img05.jpg' alt='' /></li>
		</ol>
	</div>
</div>
<!-- /Carousel -->


<!--Footer
==========================-->

<footer>
	<div class="container">
		<div class="row">
			<div class="span6">Sophie Dereymaeker<br>
				<small>Créatrice de styles</small>
			</div>
			<div class="span6">
				<div class="social pull-right">
					<a href="#"><img src="img/social/dribbble.png" alt=""></a>
					<a href="#"><img src="img/social/twitter.png" alt=""></a>
					<a href="#"><img src="img/social/dribbble.png" alt=""></a>
					<a href="#"><img src="img/social/rss.png" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</footer>

<!--/.Footer-->

</body>
</html>