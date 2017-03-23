<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Libre
 */

?>

	</div><!-- #content -->
    
    

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>

			<div class="footer-widgets clear">

				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>

					<div class="widget-area">

						<?php dynamic_sidebar( 'footer-1' ); ?>

					</div><!-- .widget-area -->

				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>

					<div class="widget-area">

						<?php dynamic_sidebar( 'footer-2' ); ?>

					</div><!-- .widget-area -->

				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>

					<div class="widget-area">

						<?php dynamic_sidebar( 'footer-3' ); ?>

					</div><!-- .widget-area -->

				<?php endif; ?>

			</div><!-- .footer-widgets -->

		<?php endif; ?>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'libre' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'libre' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'libre' ), 'Libre', '<a href="http://wordpress.com/themes/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->






<div id="sidebar">
						<div class="inner" >

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.html">Homepage</a></li>
										<li><a href="generic.html">Generic</a></li>
										<li><a href="elements.html">Elements</a></li>
										<li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li><a href="#">Etiam Dolore</a></li>
										<li><a href="#">Adipiscing</a></li>
										<li>
											<span class="opener">Another Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li><a href="#">Maximus Erat</a></li>
										<li><a href="#">Sapien Mauris</a></li>
										<li><a href="#">Amet Lacinia</a></li>
									</ul>
								</nav>


							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>
                    
                    
</div>
<?php wp_footer(); ?>


<!-- Scripts -->
		
			<script src="wp-content/themes/libre/js/skel.min.js"></script>
			<script src="wp-content/themes/libre/js/util.js"></script>
			<!--[if lte IE 8]><script src="wp-content/themes/libre/js/ie/respond.min.js"></script><![endif]-->
			<script src="wp-content/themes/libre/js/main.js"></script>
            	<!--[if lte IE 8]><script src="wp-content/themes/libre/js/ie/html5shiv.js"></script><![endif]-->
            

</body>
</html>
