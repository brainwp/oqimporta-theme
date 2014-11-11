<?php
/**
 * The template for displaying the footer of the page loja.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package oqimporta
 */
?>

	</div><!-- #main -->
	
	<div class="clearfix"></div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'oqimporta_credits' ); ?>
			<?php bloginfo('name'); ?>
			<span class="sep"> | </span>
			Todos os Direitos Reservados <?php the_date('Y'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>