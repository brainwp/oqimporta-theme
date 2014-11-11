<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package oqimporta
 */
?>

	</div><!-- #main -->

	<footer id="rodape" class="site-footer" role="contentinfo">
		<div class="site-info-rodape">

			<?php do_action( 'oqimporta_credits' ); ?>
			<?php bloginfo('name'); ?>
			<span class="sep"> | </span>
            <?php bloginfo( 'description' ); ?>
			<span class="sep"> | </span>
			Todos os Direitos Reservados <?php echo date('Y'); ?>

		</div><!-- .site-info-rodape -->
        <div id="brasa">
        <a class="a-brasa" href="http://www.brasa.art.br" target="_blank"></a>
        </div><!-- #brasa -->
        
	</footer><!-- #rodape -->
</div><!-- #page -->

<div id="bg-footer"></div>

<!-- <div id="bg-pre-footer"></div> -->
<?php wp_footer(); ?>

</body>
</html>