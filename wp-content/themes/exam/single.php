<?php get_header()?>

    <section class="content col-lg-8">
        <div class="container-fluid">
            <div class="row">
                <div class="masonry-container">






                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <article class="post item col-lg-12">
                        <div class="wrapper-post">
                            <div class="wrapper-post-img">
                                <?php the_post_thumbnail('full', 'class=image-wrapper')?>
                            </div>
                            <header><a href="<?php the_permalink()?>"><?php the_title()?></a></header>

                        </div>
                        <div class="content-post">
                            <?php the_content()?>

                            <?php comments_template(); ?>

                        </div>
                    </article>

                </div>
                <!-- post -->
                <?php endwhile; ?>
                <!-- post navigation -->



                <?php else: ?>
                    <!-- no posts found -->
                <?php endif; ?>



            </div>
        </div>
    </section>

<?php get_sidebar()?>

<?php get_footer()?>