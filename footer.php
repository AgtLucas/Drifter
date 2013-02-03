 </section><!-- end section main -->
	

	<footer>
        <div class="stip"></div>
		<div class="content cf">
			<div class="footer-widget">
                <ul class="sidebar">
                    <?php if ( is_active_sidebar('footer-widgets-1') ) : ?>
                        <?php dynamic_sidebar('footer-widgets-1'); ?>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="footer-widget">
                <ul class="sidebar">
                    <?php if ( is_active_sidebar( 'footer-widgets-2' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-widgets-2' ); ?>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="footer-widget">
                <ul class="sidebar">
                    <?php if ( is_active_sidebar( 'footer-widgets-3' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-widgets-3' ); ?>
                    <?php endif; ?>
                </ul>
            </div>

		</div><!-- end footer content cf -->
        <div class="copyright center">
            <p>&copy; <?php bloginfo( 'name' ); ?>, <?php echo date( 'Y' ); ?> - Proudly powered by <a href="http://wordpress.org" target="_blank">WordPress</a></p>
        </div>
	</footer>
<?php wp_footer(); ?>

<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.fitvids-ck.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/stuffs.js"></script>
</body>
</html>