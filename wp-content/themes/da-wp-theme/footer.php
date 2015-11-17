			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		</div>
		<!-- /#container -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

		<!-- CD-Sidebar --></div><!-- /st-content-inner -->
		<!-- CD-Sidebar --></div><!-- /st-content -->
		<!-- CD-Sidebar --></div><!-- /st-pusher -->
		<!-- CD-Sidebar --></div><!-- /st-container -->
		<!-- CD-Sidebar <script src="js/classie.js"></script> -->
		<!-- CD-Sidebar <script src="js/sidebarEffects.js"></script> -->
		<!-- Responsive Menu -->
		<script>
		var nav = responsiveNav(".nav-collapse", { // Selector
			animate: true, // Boolean: Use CSS3 transitions, true or false
			transition: 284, // Integer: Speed of the transition, in milliseconds
			label: "Menu", // String: Label for the navigation toggle
			insert: "before", // String: Insert the toggle before or after the navigation
			customToggle: "", // Selector: Specify the ID of a custom toggle
			closeOnNavClick: true, // Boolean: Close the navigation when one of the links are clicked
			openPos: "relative", // String: Position of the opened nav, relative or static
			navClass: "nav-collapse", // String: Default CSS class. If changed, you need to edit the CSS too!
			navActiveClass: "js-nav-active", // String: Class that is added to  element when nav is active
			jsClass: "js", // String: 'JS enabled' class which is added to  element
			init: function(){}, // Function: Init callback
			open: function(){}, // Function: Open callback
			close: function(){} // Function: Close callback
		});
		</script>

	</body>
</html>
