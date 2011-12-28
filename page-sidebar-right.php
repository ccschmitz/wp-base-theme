<?php
/**
 * Page Template: Sidebar Right
 */
?>

<?php get_header(); ?>

	<div class="content left">
		<?php get_template_part( 'loop' ); ?>
	</div>

	<aside class="sidebar right">
		<?php get_sidebar(); ?>
	</aside>
	
<?php get_footer(); ?>