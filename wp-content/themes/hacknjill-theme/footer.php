<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
</div></div>
  <footer id="bottomfooter">
	  <!-- Begin footer bottom -->
		<div class="footer_container row">
				<div class="gototop twocol">
					<p class="foottext" style="margin-bottom:0;"><a href="#navigation" rel="nofollow">Top of Page</a></p>
				</div>
				<div class="threecol"></div>
				<div class="sevencol last">
					<?php wp_nav_menu(); ?>
				</div>
		</div><!-- end .footer_container -->
 </footer>

  <!-- Javascript at the bottom for fast page loading -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
   <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bpopup.min.js"></script>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/js/plugins.js"></script>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/js/main.js"></script>

			   
  <?php wp_footer(); ?>

</body>
</html>