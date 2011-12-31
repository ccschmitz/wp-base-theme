			</div><!-- #main  -->

			<footer id="footer" class="row">
				<p class="copyright"><?php echo of_get_option( 'footer_copyright' ); ?></p>
			</footer>
		</div><!-- #container -->

		<!-- BEGIN: wp_footer() -->
		<?php wp_footer(); ?>
		<!-- END: wp_footer() -->

		<!-- Local jQuery fallback if it doesn't load from the CDN -->
		<script>window.jQuery || document.write('<script src="<?php bloginfo( 'template_directory' ); ?>js/libs/jquery-1.7.1.min.js"><\/script>')</script>

		<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

		<!-- Google Analytics -->
		<script>
			var _gaq=[['_setAccount','<?php echo of_get_option("google_analytics"); ?>'],['_trackPageview']];
			(function(d,t){
				var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
				g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
				s.parentNode.insertBefore(g,s)
			}(document,'script'));
		</script>

	</body>
</html>