<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

  <footer id="colophon" role="contentinfo">
    <?php do_action( 'storefront_footer' ); ?>
  </footer><!-- #colophon -->
</div><!-- #page -->

  <!-- Site footer -->
  <footer class="site-footer-custom">
    <i class="fab fa-twitter"></i>
  </footer>

<?php wp_footer(); ?>

</body>
</html>
