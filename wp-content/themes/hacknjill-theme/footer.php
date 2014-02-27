<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>

  <footer>
   
	<!-- Begin footer bottom -->
	<div class="footer_container row">
		<div class="wrap">
			<div class="gototop twocol">
				<p class="foottext" style="margin-bottom:0;"><a href="#navigation" rel="nofollow">Top of Page</a></p>
			</div>
			<div class="threecol"></div>
			<div class="sevencol last">
				<p class="foottext">Copyright &copy; 2013  Alexandra White &middot; Custom Theme for <a href="http://wordpress.org/" title="WordPress">WordPress</a></p>
			</div>
		</div><!-- end .wrap -->
	</div><!-- end .footer_container -->
   </div><!--! end of #container -->
  </footer>

  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>js/vendor/jquery-1.8.0.min.js"><\/script>')</script>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/js/plugins.js"></script>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/js/main.js"></script>

			   
  <?php wp_footer(); ?>

</body>
</html>