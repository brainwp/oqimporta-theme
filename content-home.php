<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package oqimporta
 */
?>

<article id="post-<?php the_ID(); ?>">

	<div id="ilustra-site">
    </div><!-- #ilustra-site -->

	<div class="entry-content">
		<div id="content-intro">
			<?php the_content(); ?>
            <?php edit_post_link( __( 'Editar', 'oqimporta' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
        </div><!-- #content-intro -->
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'oqimporta' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
