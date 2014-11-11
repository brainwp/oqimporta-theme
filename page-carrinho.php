<?php
/** Template Name: Carrinho */

get_header('loja'); ?>
<div id="content" class="site-content" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
	<?php endwhile; // end of the loop. ?>

</div><!-- #co-->
		
		
<?php get_footer('loja'); ?>