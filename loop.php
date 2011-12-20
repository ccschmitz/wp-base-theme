<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
			<header>
				<h1><?php the_title(); ?></h1>
				<!-- TODO: Put in post meta -->
			</header>

			<?php the_content(); ?>

			<footer>
				<?php wp_link_pages('before=<div class="post-page-links">Page:&after=</div>'); ?>
				<!-- TODO: Put in author bio -->
			</footer>
		</div>
		
	<?php endwhile; ?>
<?php endif; ?>