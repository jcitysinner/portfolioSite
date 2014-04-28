<?php 

	get_header(); 

?>


<section class="main">
	<h1>CONTACT</h1>
	<div class="mainContent">
		<h2>Let's Chat, I'd love to hear from you!</h2>
		<div class="leftColumn threeCol">
			<h3>Contact Me</h3>
			<?php
		    	while ( have_posts() ) : the_post(); ?> 
		        <div><?php the_content(); ?></div>

    <?php endwhile; ?>
		</div>
		<div class="rightColumn threeCol">
			<h3>Social Networking</h3>
			<div class="socialLinks">
				<a href="https://twitter.com/jcitysinner"><img class="twitter socialIcon" src="<?php bloginfo('template_directory');?>/images/twitter.png"></a>
				<div class="links">
					<h4>Twitter</h4>
					<a href="https://twitter.com/jcitysinner">www.twitter.com/jcitysinner</a>
				</div>
			</div>
			<div class="socialLinks">
				<a href="http://www.linkedin.com/pub/jesse-sinfield/90/3a4/213"><img class="linkedIn socialIcon" src="<?php bloginfo('template_directory');?>/images/linkedin.png"></a>
				<div class="links">
					<h4>LinkedIn</h4>
					<a href="http://www.linkedin.com/pub/jesse-sinfield/90/3a4/213">www.linkedin.ca/jessesinfield</a>
				</div>
			</div>
			<div class="socialLinks">
				<a href="https://github.com/jcitysinner"><img class="github socialIcon" src="<?php bloginfo('template_directory');?>/images/github.png"></a>
				<div class="links">
					<h4>GitHub</h4>
					<a href="https://github.com/jcitysinner">www.github.com/jcitysinner</a>
				</div>
			</div>
		</div>
		
	</div>
	
</section>
<?php 

	get_footer(); 

?>