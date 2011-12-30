<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="date"><time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'F jS, Y' ); ?> &bull; Posted in <?php the_category( ', ' ); ?></time></p>
				<?php if ( has_post_thumbnail() ) : ?>
					<?php echo the_post_thumbnail( '' ); ?>
				<?php endif; ?>
			</header>
			
			<?php the_excerpt(); ?>
			<p><a class="post-link" href="<?php the_permalink(); ?>">&gt;&gt; Continue Reading</a></p>

			<footer>
				<?php wp_link_pages( 'before=<div class="post-page-links">Page:&after=</div>' ); ?>
				<?php if ( has_tag() ) : ?>
				<nav>
					<ul>
						<li><?php the_tags( ' &bull; Tagged with ', ', ', '' ); ?></li>
					</ul>
				</nav>
				<?php endif; ?>
			</footer>
		</article>

	<?php endwhile; ?>
	<?php if ( show_posts_nav() ) : ?>

	<nav id="pagination">
		<ul>
			<li class="previous"><?php next_posts_link( '&laquo; Previous' ) ?></li>
			<li class="next"><?php previous_posts_link( 'Next &raquo;' ) ?></li>
		</ul>
	</nav>

	<?php endif; ?>

<?php else : ?>

	<?php get_template_part( 'no-results' ); ?>

<?php endif; ?>