<div id="pre-footer">

	<?php query_posts("showposts=3&orderby=rand"); ?>
    <?php  if ( have_posts() ) : $count = 0;
    while ( have_posts() ) : the_post(); $count++;
    $pre_class = 'cada-pre-footer';
    if ( $count % 3 == 0 ) {
    $pre_class .= ' pre-final';
    } ?>

        <div class="<?php echo $pre_class; ?>">
        <div class="titulo-pre-footer">
        <h2><a class="quicksand" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        </div>
        <div class="thumb-pre-footer">
            <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'pre' );
            } else { ?>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/thumb-default.jpg" alt="<?php the_title(); ?>" />
            <?php } ?>

        </div><!-- .thumb-pre-footer -->

        <p><?php the_category(', '); ?> <?php comments_popup_link('No comments yet', '1 comment so far', '% comments so far (is that a lot?)', 'comments-link', 'Comments are off for this post'); ?></p>
        </div><!-- .<?php echo $pre_class; ?> -->

        <?php endwhile; ?>
        <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

</div><!-- #pre-footer -->