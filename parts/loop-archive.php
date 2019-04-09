<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>
<div class="blog-background">
    <article id="post-<?php the_ID(); ?>" <?php post_class('grid-container'); ?> role="article">

        <section class="entry-content grid-x pad-top-24 pad-bottom-24" itemprop="text">
            <div class="cell large-4 medium-6 small-12 white-background" style="padding: 30px; "><a href="<?php the_permalink() ?>"
                                                           class="body-colour img" style="background: url(<?php the_post_thumbnail_url('full');?>) no-repeat; background-size: cover;">&nbsp;</a>
            </div>
            <?php //the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
            <div class="cell auto white-background pad-top-30 pad-bottom-30">
                <div>
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"
                           class="body-colour quoted"><?php the_title(); ?></a></h2>
                    <?php get_template_part('parts/content', 'byline'); ?>
                </div>
                <div class="fontsize-24 lineheight-14">
                    <?php
                    the_excerpt();
                    ?>
                </div>
                <div><a href="<?php the_permalink() ?>" class="fontsize-18 dark-grey semi-bold">CLICK HERE TO READ MORE ></a></div>
            </div>

        </section> <!-- end article section -->

        <!--<footer class="article-footer">
    	<p class="tags"><?php /*the_tags('<span class="tags-title">' . __('Tags:', 'jointswp') . '</span> ', ', ', ''); */ ?></p>
	</footer> --><!-- end article footer -->

    </article> <!-- end article -->
</div>