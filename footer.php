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
	<!-- Javascript Stylesheet -->
      <script src="http://searsino.com/wp-content/themes/portfoliov2/js/global-min.js"></script>

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

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-61245834-1', 'auto');
	  ga('send', 'pageview');

	</script>

<?php wp_footer(); ?>

</body>
</html>
