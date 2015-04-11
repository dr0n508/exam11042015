<?php get_header()?>

<section class="content col-lg-8">
    <div class="container-fluid">
        <div class="row">
            <div class="masonry-container">

                <div class="quote item col-lg-6">
                    <blockquote cite="John Wooden"><p><i>"Ability may get you to the top, but it takes
                                character to keep you there." </p>
                        <span class="author-quote">John Wooden</span></i>
                    </blockquote>
                </div>




                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <article class="post item col-lg-6">
                        <div class="wrapper-post">
                            <div class="wrapper-post-img">
                                <?php the_post_thumbnail('full', 'class=image-wrapper')?>
                            </div>
                            <header><a href="<?php the_permalink()?>"><?php the_title()?></a></header>
                                <?php the_excerpt()?>
                            <footer class="post-info">
                                <div class="number-like">
                                    <span class="glyphicon glyphicon-heart">15</span>
                                </div>
                                <div class="info-post-desc">
                                    <span>by:<?php the_author()?> / </span><span> <?php comments_number(); ?> / </span><span><?php the_time('j.m.Y')?></span>
                                </div>
                            </footer>
                        </div>
                    </article>

            </div>
                    <!-- post -->
                <?php endwhile; ?>
                    <!-- post navigation -->

                    <div class="pagination">
                        <?php
                        //global $wp_query;

                        $big = 999999999; // need an unlikely integer

                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $wp_query->max_num_pages,
                            'prev_text' => 'Previous',
                            'next_text' => 'Next'

                        ) );
                        ?>
                    </div>

                <?php else: ?>
                    <!-- no posts found -->
                <?php endif; ?>











        </div>
    </div>
</section>

<?php get_sidebar()?>

<?php get_footer()?>