<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 */
?>

<?php
	$startYear = 2015;
	$thisYear = date( 'Y' );

	if ($thisYear > $startYear) {
		$copyright = '$startYear . " - " . $thisYear';
	} else {
		$copyright = $startYear;
	}
?>

		<footer>
			<div class="foot-wrap">
				<div class="copyright">
					<p>&copy; <?php echo $copyright; ?>,  James C. Searson | All Rights Reserved</p>
				</div>  <!-- .copyright -->
				<div class="author-note">
					<p>Developed with a Custom Design in mind by <a href="http://searsino.com/">James</a>.</p>
				</div>  <!-- .author-note -->
			</div>  <!-- .foot-wrap -->
		</footer>

	</div>  <!-- .main-container -->


	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
	<!-- Javascript Stylesheet -->
      <script src="<?php echo get_template_directory_uri();?>/js/global-min.js"></script>

      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

      <!-- TYPEKIT -->
	<script>
	  (function(d) {
	    var config = {
	      kitId: 'ajj6lkc',
	      scriptTimeout: 3000
	    },
	    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	  })(document);
	</script>

<?php wp_footer(); ?>

</body>
</html>
