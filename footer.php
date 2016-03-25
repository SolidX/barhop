    <!-- Scripts -->
    <script type="text/javascript" src="<?php echo theme_url('assets/js/credit.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo theme_url('assets/js/color.js'); ?>"></script>
	<?php 
		$ga_key = site_meta("google_analytics", '');
		if ($ga_key):
	?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', '<?php echo $ga_key; ?>', 'auto');
		  ga('send', 'pageview');
		</script>
	<?php endif; ?>
  </body>
</html>