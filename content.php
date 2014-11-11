<?php
/**
 * @package oqimporta
 */
?>

<article id="post-<?php the_ID(); ?>" class="cada-post">
    <div class="post-data">
	    <span class="dia-meta"><?php echo get_the_date('d'); ?></span><br />
        <span class="mes-ano-meta"><?php echo get_the_date('M/Y'); ?></span>
    </div><!-- .post-data -->
	<header class="entry-header-blog">
		<h1 class="entry-title title-blog quicksand uppercase"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'oqimporta' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
        <div class="entry-meta">
            <?php the_category(' | '); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'oqimporta' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'oqimporta' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta footer-entry-meta">
		<?php edit_post_link( __( 'Editar', 'oqimporta' )); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
