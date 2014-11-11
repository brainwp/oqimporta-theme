<?php
/**
 * @package oqimporta
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'unico-post' ); ?>>
	<div class="post-data">
	    <span class="dia-meta"><?php echo get_the_date('d'); ?></span><br />
        <span class="mes-ano-meta"><?php echo get_the_date('M/Y'); ?></span>
    </div><!-- .post-data -->
	<header class="entry-header-blog">
		<h1 class="entry-title title-blog quicksand uppercase"><?php the_title(); ?></h1>

	</header><!-- .entry-header-blog -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'oqimporta' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
