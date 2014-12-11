<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package oqimporta
 */
?>

<article id="post-<?php the_ID(); ?>">
	

	<div class="entry-content">
		<?php the_content(); ?>
        <?php edit_post_link( __( 'Editar', 'oqimporta' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'oqimporta' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
