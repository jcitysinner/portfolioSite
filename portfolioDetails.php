<?php
/*
 * Template Name: My Custom Page
 * Description: A Page Template with a darker design.
 */

// Code to display Page goes here...

get_header(); 

?>

<section class="main">
	<h1>PORTFOLIO</h1>

	<?php
    	while ( have_posts() ) : the_post(); ?> 
    	<div class="mainContent">
    		<div class="detailContent">
		    	<h1><?php the_title() ?></h1>
		    	<div class="detailHero"><?php the_post_thumbnail() ?></div>
		        <div><?php the_content(); ?></div>
	    	</div>
    	</div>
    <?php endwhile; ?>
</section>

<?php 

	get_footer(); 

?>