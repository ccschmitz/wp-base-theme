<?php get_header(); ?>

	<div class="eight columns">
		<?php get_template_part( 'loop', 'blog' ); ?>
	</div>

	<div class="four columns">
		<?php get_sidebar( 'blog' ); ?>
	</div>

<?php get_footer(); ?>