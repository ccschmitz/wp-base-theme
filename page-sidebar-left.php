<?php
/**
 * Template Name: Sidebar Left
 */
?>

<?php get_header(); ?>

	<div class="four columns">
		<?php get_sidebar(); ?>
	</div>

	<div class="eight columns">
		<?php get_template_part( 'loop' ); ?>
	</div>
	
<?php get_footer(); ?>