<?php if ( have_posts() ) : ?>
	<?php if ( is_category() ) : ?>
		<h2>Archive for the &ldquo;<?php single_cat_title(); ?>&rdquo; category</h2>
 	<?php elseif ( is_tag() ) : ?>
		<h2>Posts Tagged &ldquo;<?php single_tag_title(); ?>&rdquo;</h2>
	<?php elseif ( is_day() ) : ?>
		<h2>Archive for <?php the_time( 'F jS, Y' ); ?></h2>
	<?php elseif ( is_month() ) : ?>
		<h2>Archive for <?php the_time( 'F, Y' ); ?></h2>
	<?php elseif ( is_year() ) : ?>
		<h2 class="pagetitle">Archive for <?php the_time( 'Y' ); ?></h2>
	<?php elseif ( is_author() ) : ?>
		<h2 class="pagetitle">Author Archive</h2>
	<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
		<h2>Blog Archives</h2>
 	<?php endif; ?>

	<?php while ( have_posts() ) : the_post(); ?>
	
		<section id="archive-<?php the_ID(); ?>" <?php post_class(); ?>>

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
		
		</section>
	
	<?php endwhile; ?>

	<?php if ( show_posts_nav() ) : ?>
	
		<nav class="post-navigation">
			<ul>
				<li><?php next_posts_link('&laquo; Previous page') ?></li>
				<li><?php previous_posts_link('Next page &raquo;') ?></li>
			</ul>
		</nav>
	
	<?php endif; ?>

<?php else : ?>

	<p>There are no posts.</p>
	<p>Try searching:</p>

	<?php get_search_form(); ?>

<?php endif; ?>