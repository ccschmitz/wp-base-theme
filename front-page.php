<?php get_header(); ?>

	<div class="twelve columns">
		<ul id="slider">
			<?php 
				$args = array( 'post_type' => 'slider' );
				$loop = new WP_Query( $args );
				
				while ( $loop->have_posts() ) : $loop->the_post();
					echo '<li>';
						the_content();
					echo '</li>';
				endwhile;
			?>
		</ul>
		<?php get_template_part( 'loop' ); ?>
	</div>

<?php get_footer(); ?>