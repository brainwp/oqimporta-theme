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
		<div class="site-info-rodape quicksand">
			<?php bloginfo( 'description' ); ?>
			<?php do_action( 'oqimporta_credits' ); ?>
		</div><!-- .site-info-rodape -->
        
        <div id="brasa">
        </div><!-- #brasa -->
        
	</footer><!-- #rodape -->
</div><!-- #page -->

<div id="bg-footer"></div>

<!-- <div id="bg-pre-footer"></div> -->
<?php wp_footer(); ?>

</body>
</html>