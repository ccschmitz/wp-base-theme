<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		
		<h1>Search results for &ldquo;<?php echo $s; ?>&rdquo;</h1>

		<?php while (have_posts()) : the_post(); ?>
		
			<?php get_template_part( 'loop', 'feed' ); ?>

		<?php endwhile; ?>
		
		<?php if (show_posts_nav()) : ?>
		
		<nav>
			<ul>
				<li><?php next_posts_link('&laquo; Previous page') ?></li>
				<li><?php previous_posts_link('Next page &raquo;') ?></li>
			</ul>
		</nav>
		
		<?php endif; ?>
		
	<?php else : ?>
		
		<h1>Nothing found for &ldquo;<?php echo $s; ?>&rdquo;</h1>

		<?php get_search_form(); ?>
		
	<?php endif; ?>
	
	<?php get_sidebar(); ?>
	
<?php get_footer(); ?>
