<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package slresponsive
 */
?>
	<div class="row page">
		<div class="twelve columns">
		<?php the_title( '<h1 class="twelve columns page_heading">', '</h1>' ); ?>
		<div class="post_meta">
			<span class="edit"><i class="icon-pencil"></i><?php edit_post_link( __( 'Edit', 'slresponsive' ), '<span class="edit-link">', '</span>' ); ?></span>
		</div>
		<?php the_content(); ?>
	</div>
</div>
