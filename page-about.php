<?php 

	get_header(); 

?>


<section class="main">
	<h1>ABOUT</h1>
	<div class="mainContent">
		<h2>A <span class="bannerBold">Front End Developer</span> for an <span class="bannerBold">Up Front World</span></h2>
		<div class="leftColumn mainText">

			
			<?php
		    	while ( have_posts() ) : the_post(); ?> 
		        <p><?php the_content(); ?></p>

    <?php endwhile; ?>
			<div class="leftList">
				<h3>Main Skills</h3>
				<ul>
					<li>HTML</li>
					<li>CSS</li>
					<li>javaScript</li>
					<li>jQuery</li>
					<li>PHP</li>
					<li>WordPress</li>
					<li>After Effects</li>
				</ul>
			</div>
			<div class="rightList">
				<h3>Secondary Skills</h3>
				<ul>
					<li>Illustrator</li>
					<li>Photoshop</li>
					<li>Premiere</li>
					<li>Final Cut Pro</li>
					<li>Project Management</li>
					<li>Quality Assurance</li>
					<li>Creative Writing</li>
				</ul>
			</div>
		</div>
		<div class="rightColumn image">
			<img class="me" src="<?php bloginfo('template_directory');?>/images/me.jpg">
		</div>
	</div>
	
</section>
<?php 

	get_footer(); 

?>