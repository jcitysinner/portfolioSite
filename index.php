<?php 

	get_header(); 

?>


<section class="main">
<nav id="blogNav">
	<ul class="mobileOnly mobileMenu">
		<li><a href="#" id="bMenu">MENU</a></li>
		<li><a href="#" id="bSidebar">SIDEBAR</a></li>
	</ul>
	<?php 
		wp_nav_menu( array(
			'theme_location' => 'blog-menu'
		) ); 

	?>
</nav>
<?php 

	get_sidebar(); 

?>
<div class="blogContent">
<?php 
	$args = array(
	   'caller_get_posts' => 1,  // Don't show stickies at top
	   'category__not_in' => 12,
	);
	query_posts($args);
	if ( have_posts() ) :

		while ( have_posts() ) :

			the_post(); ?>

			<article>
				<a href="<?php the_permalink(); ?>"><h1 class="theTitle"><?php the_title(); ?></h1></a>

				

				<div class='meta'>
					<span class="author">
						Written by <?php the_author(); ?>
					</span>
					<span class="date">
						on <?php the_time( 'F j, Y' ); ?>
					</span>
				</div>
				<div class="content">
					<?php the_content(); ?>
				</div>
			</article>

		<?php 

		endwhile; 

	?>

	<?php 

		next_posts_link(); 

		previous_posts_link(); 

	?>

<?php 

	else: 

?>

	<strong>No posts found.</strong>

<?php 

	endif; 

?>
</div>
</section>
<?php 

	get_footer(); 

?>