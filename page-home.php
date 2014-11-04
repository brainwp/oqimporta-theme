<?php
/** Template Name: Home */

get_header('blog'); ?>

		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'home' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

<?php get_footer(); ?>