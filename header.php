<!DOCTYPE HTML>
<html>
	<head>
		<?php 
			wp_head(); 

		?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/favicon.png"> 
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, minimumscale=1.0, maximum-scale=1.0" />

		<script>
			//GOOGLE ANALYTICS

		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-50008622-1', 'jessesinfield.com');
		  ga('send', 'pageview');

		</script>
		
	</head>
	<body>
		<div class="wrapper">
			
			<header class="mainHeader">
				<a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php bloginfo('template_directory');?>/images/Logo.png"></a>
				<div class="social">
					<a href="https://twitter.com/jcitysinner"><img class="twitter socialIcon" src="<?php bloginfo('template_directory');?>/images/twitter.png"></a>
					<a href="http://www.linkedin.com/pub/jesse-sinfield/90/3a4/213"><img class="linkedIn socialIcon" src="<?php bloginfo('template_directory');?>/images/linkedin.png"></a>
					<a href="https://github.com/jcitysinner"><img class="github socialIcon" src="<?php bloginfo('template_directory');?>/images/github.png"></a>
				</div>
				<img id="navButton" class="navButton mobileOnly" src="<?php bloginfo('template_directory');?>/images/menu.svg">
				<nav id="mainNav">
					<?php 
						wp_nav_menu( array(
							'theme_location' => 'main-menu'
						) ); 

					?>
				</nav>
			</header>