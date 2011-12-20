			</div><!-- #main  -->

			<footer id="footer">
				<p class="copyright"><?php echo of_get_option( 'footer_copyright' ); ?></p>
			</footer>
		</div><!-- #container -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>!window.jQuery && document.write('<script src="<?php bloginfo( 'template_url' ); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
		
		<script src="<?php bloginfo( 'template_url' ); ?>/js/script.js?v=1"></script>

		<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

		<!-- BEGIN: wp_footer() -->
		<?php wp_footer(); ?>
		<!-- END: wp_footer() -->

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