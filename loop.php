<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>
			<header>
				<h1><?php the_title(); ?></h1>
			</header>

			<?php the_content(); ?>

			<footer>
				<p><?php wp_link_pages( 'before=<div class="post-page-links">Page:&after=</div>' ); ?></p>
			</footer>
		</article>
		
	<?php endwhile; ?>

<?php else : ?>

	<?php get_template_part( 'no-results' ); ?>

<?php endif; ?>