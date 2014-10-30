<?php
/** Template Name: Loja */

get_header('loja'); ?>

		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', '' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

<?php get_footer(); ?>