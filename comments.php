<div id="comments" class="comments-area">
	<h1 class="commentSectionTitle">Comments</h1>
	<?php if ( have_comments() ) : ?>
		<?php wp_list_comments() ?>
	<?php endif; // have_comments() ?>
	<div id="commentForm" class="commentForm">
		<?php comment_form() ?>
	</div>

</div><!-- #comments -->