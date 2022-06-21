			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer" class="site-footer pb-3" role="contentinfo">
		<div class="container ">
<div class="row">
<div class="footer-menu-container col-md-3 footer1 p-0"><?php dynamic_sidebar( 'footer-1' ); ?></div>
<div class="footer-menu-container col-md-3 footer2" ><?php dynamic_sidebar( 'footer-2' ); ?></div>
<div class="footer-menu-container col-md-3  footer3" ><?php dynamic_sidebar( 'footer-3' ); ?></div>
<div class="footer-menu-container col  footer4" ><?php dynamic_sidebar( 'footer-4' ); ?></div>
</div>
			<div class="row  border-0 p-0" >
				<div class="col-md-12 footer5" ><?php dynamic_sidebar( 'footer-5' ); ?></div>
			</div>
</div>

	</footer><!-- #colophon -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
