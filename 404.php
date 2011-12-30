<?php get_header(); ?>

	<article class="twelve columns">

		<h2>Sorry, we can't find the page you are looking for...</h2>
				
		<p>The page you are looking for has been moved, deleted, or possibly never existed in the first place. Here are a few things you can try to find what you are looking for:</p>

		<ul>
			<li>Go back to <a <?php echo isset($_SERVER['HTTP_REFERER']) ? 'href="'. htmlspecialchars( $_SERVER['HTTP_REFERER'] ) .'"' : 'href="#" onclick="history.back(-1); return false;"'; ?>">the page you were on before this</a>.</li>
			<li>Go back to <a href="<?php bloginfo( 'url' ); ?>">the homepage</a>.</li>
			<li><a href="<?php bloginfo( 'admin_email' ); ?>">Send us an email</a> us and we can try to help you.</li>
			<li>Search for what you are looking for with the form below.</li>
		</ul>
		
		<h2>Search</h2>
		<?php get_search_form(); ?>

	</article>

<?php get_footer(); ?>