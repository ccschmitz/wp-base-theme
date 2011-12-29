<?php 
/**
 * This template file is for the homepage of the blog. Usually a feed of article previews.
 **/
?>

<?php get_header(); ?>

	<div class="eight columns">
		<?php get_template_part( 'loop', 'feed' ); ?>
	</div>

	<div class="four columns">
		<?php get_sidebar( 'blog' ); ?>
	</div>
	
<?php get_footer(); ?>