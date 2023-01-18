<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Rider Plastics</title>  
	<meta name="description" content="Rider Plastics" />
	<meta name="keywords" content="Plastic, Utah Plastic, Injection Molding, Utah Injection Molding" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/external.js"></script>
	<script type="text/javascript" src="js/sifr/sifr.js"></script>
	<script type="text/javascript" src="js/sifr/sifr-debug.js" ></script>
	<script type="text/javascript" src="js/sifr/sifr-config.js" ></script>
	<script type="text/javascript" src="js/library/cycle.js"></script>
	<script type="text/javascript">// for the image scroller on the home page //
	$(document).ready(function(){
		$('#home_pics')
		.cycle({
			fx:     'fade',
			speed:  'slow',
			timeout: 3000,
			pager:  '#sections',
			pagerAnchorBuilder: function(idx, slide) {
				// return selector string for existing anchor
				return '#sections li:eq(' + idx + ') a';
			}
		})
	});
	</script>
	<link rel="stylesheet" type="text/css" href="css/sifr.css" />	
	<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie7.css" /><![endif]-->
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="css/ie6.css" />
		<script type="text/javascript" src="js/jquery.minmax.js"></script>
		<script type="text/javascript" src="js/belated.png.js"></script>
		<script>
			DD_belatedPNG.fix('.curve_top, .curve_bottom, .middle, .content, ul.nav li.active');
			/* string argument can be any CSS selector */
			/* using .png_bg example is unnecessary */
			/* change it to what suits you! */
		</script>
	<![endif]-->
</head>
<body>
<div class="head">
	<div class="logo"></div> <!-- .logo -->
	<div class="contact_info">
		150 West Stratford Ave (2565 South)<br />
		Salt Lake City, UT 84115-3031<br />
		<span class="green">801-487-2214</span>
	</div> <!-- .contact_info -->
</div> <!-- .head -->
<div class="wrap">
	<ul class="nav">
		<li class="active"><a href="#">home page</a></li>
		<li><a href="our_process.php">our process</a></li>
		<!-- <li><a href="#">our products</a></li> -->
		<li><a href="contact.php">contact us</a></li>
	</ul> <!-- .nav -->
	<div class="curve_top"></div>
	<div class="middle">
		<div class="content">
			<div class="holder">
				<h2>Your Trusted Source for Injection Molding since 1948</h2>
				<p>
					This commitment to maintaining strict quality control over each phase of your project, may mean lead time is extended.  In the long-run, this could save you hundreds of hours in frustration and thousands of dollars in costs of poor quality products.
				</p>
				<p>
					Rider Plastics uses the latest versions of Solid Works and SURFCAM to design and digitally machine your mold. Rider Plastics is a member of the Better Business Bureau. 
				</p>
				
				<div id="home_pics">
					<img src="img/content/prod-2.png" alt="prod one" />
					<img src="img/content/prod-4.png" alt="prod one" />
					<img src="img/content/prod-3.png" alt="prod one" />
					<img src="img/content/prod-5.png" alt="prod one" />
					<img src="img/content/prod-6.png" alt="prod one" />
				</div> <!-- #home_pics -->
				<div id="sections">
					<ul>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul> <!-- .name -->
				</div> <!-- #sections -->
			</div> <!-- .holder -->
		</div> <!-- .content -->
	</div> <!-- .middle -->
	<div class="curve_bottom"></div>
</div> <!-- .wrap -->
<div class="footer">
	<p class="left">
		<a href="index.php">home page</a> | <a href="our_process.php">our process</a> | <!--<a href="#">our products</a> |--> <a href="contact.php">contact us</a><br /> 
		<a href="#"><img src="img/content/logo-surfcam.gif" alt="Surfcam" /></a><a href="#"><img src="img/content/logo-solidworks.gif" alt="Solidworks" /></a><br />
		Mold Designs developed using SURFCAM and SolidWorks
	</p>
	<p class="right">
		&copy; copyright 2009 Rider Plastics
	</p>
</div> <!-- .footer -->



<?php include("inc/foot.php"); ?>