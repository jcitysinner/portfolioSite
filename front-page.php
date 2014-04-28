<?php 

	get_header(); 

?>


<section class="main">
	<div class="bannerBlack">
		<div class="bannerBlue">
			<div class="bannerBlack2">
				<h2>A <span class="bannerBold">Front End Developer</span> for an <span class="bannerBold">Up Front World</span></h2>
			</div>
		</div>
	</div>
	<div class="blog" id="blog">
		<a href="<?php echo get_permalink( 77 ); ?>"><h3>Blog</h3></a>
		<?php 
	$args = array(
	   'caller_get_posts' => 1,  
	   'posts_per_page' => 3,    
	   'category__not_in' => 12,
	);
	query_posts($args);
	if ( have_posts() ) :

		while ( have_posts() ) :

			the_post(); ?>

				<article><h4 class="theTitle"><?php the_title(); ?></h4>
				<p><?php echo substr(get_the_excerpt(), 0,150); ?>...</p>
				<a href="<?php the_permalink(); ?>" class="readMore" >Read More</a></article>
				

				
			

		<?php 

		endwhile; 

	?>


<?php 

	else: 

?>

	<strong>No posts found.</strong>

<?php 

	endif; 

?>
	</div>
	<div class="twitter">
		<a class="twitter-timeline" height="460" href="https://twitter.com/jcitysinner" data-widget-id="319854222457835522">Tweets by @jcitysinner</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


	</div>
</section>
<?php 

	get_footer(); 

?>