<?php 

	get_header(); 

?>


<section class="main">
	<h1>PORTFOLIO</h1>


	<?php
	$isLeft = true;
	query_posts('cat=12');
	while (have_posts()) : the_post(); 
	if ($isLeft == true){ ?> 
		<div class='detailsWhole'>
			<div class='detailsImageLeft'><?php the_post_thumbnail() ?></div>
			<div class='details'>
				<h3><?php the_title() ?></h3>
				<p><?php  the_content() ?></p>
				</div>
			</div> 
		<?php $isLeft = false;
		} elseif($isLeft == false){ ?>
		
			<div class='detailsWhole'>
		
		<div class='details'>
			<h3><?php echo the_title(); ?></h3>
			<p><?php echo the_content(); ?></p>
		</div>
		<div class='detailsImageRight'><?php echo the_post_thumbnail() ?></div>
	</div> <?php 
			$isLeft = true;
		};
		
endwhile; ?>
	


	
	
</section>
<?php 

	get_footer(); 

?>