<?php
/** Template Name: Contato */

get_header(); ?>

		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'contato' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

<?php get_footer(); ?>