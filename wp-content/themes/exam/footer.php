<footer class="col-lg-12 main-footer">

    <div class="container-fluid">
        <div class="row">

            <section class="sect-footer col-lg-4 section-footer1">

                <?php if(!dynamic_sidebar('footer')): ?>

                <?php endif; ?>


                <button class="btn-learn-more">Learn-more</button>

                <h3>Photo Stream</h3>
                <div class="photo-steam">
                    <?php $news = new WP_Query( array('post_type' => 'photosteam', 'posts_per_page' => -1));?>
                    <div class="photo-steam">
                        <ul>
                            <?php while ( $news->have_posts() ) : $news->the_post(); ?>
                                <!-- post -->
                                <li>
                                    <?php the_post_thumbnail()?>

                                </li>
                            <?php endwhile; ?>
                            <!-- post navigation -->

                        </ul>
                    </div>




                </div>
            </section>



            <section class="sect-footer col-lg-4 section-footer2">
                <h3>Latest tweets</h3>
                <ul class="latest-tweets">
                    <li><a href=""><span>Check Out Dtbaker's @Arduino Sales Notification #System http://t.co/ WBFKIWHJ</span> <span>3 days ago</span></a></li>
                    <li><a href=""><span>Check Out Dtbaker's @Arduino Sales Notification #System http://t.co/ WBFKIWHJ</span> <span>3 days ago</span></a></li>
                    <li><a href=""><span>Check Out Dtbaker's @Arduino Sales Notification #System http://t.co/ WBFKIWHJ</span> <span>3 days ago</span></a></li>
                    <li><a href=""><span>Check Out Dtbaker's @Arduino Sales Notification #System http://t.co/ WBFKIWHJ</span> <span>3 days ago</span></a></li>
                    <li><a href=""><span>Check Out Dtbaker's @Arduino Sales Notification #System http://t.co/ WBFKIWHJ</span> <span>3 days ago</span></a></li>
                </ul>



                <h3 class="header-social">Social Connecting</h3>
                <ul class="social-list">
                    <li><a href=""><img src="" alt=""/></a></li>
                    <li><a href=""><img src="" alt=""/></a></li>
                    <li><a href=""><img src="" alt=""/></a></li>
                    <li><a href=""><img src="" alt=""/></a></li>
                    <li><a href=""><img src="" alt=""/></a></li>
                    <li><a href=""><img src="" alt=""/></a></li>
                    <li><a href=""><img src="" alt=""/></a></li>
                    <li><a href=""><img src="" alt=""/></a></li>
                </ul>


            </section>

            <section class="sect-footer col-lg-4 section-footer3">
                <h3>Contact info</h3>

                <?php $news = new WP_Query( array('post_type' => 'contacts', 'posts_per_page' => -1));?>

                    <ul>
                        <?php while ( $news->have_posts() ) : $news->the_post(); ?>
                            <!-- post -->
                            <li>
                                <?php the_post_thumbnail()?>
                                <?php the_content()?>

                            </li>
                        <?php endwhile; ?>
                        <!-- post navigation -->

                    </ul>







                <form action="">
                    <h3>Follow Us</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry.</p>
                    <input type="email" />
                    <span><a href=""></a></span>
                    <button type="submit" class="btn-subscribe"></button>

                </form>


            </section>
        </div>

    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="bottom-footer">
                <p class="copyright">Copyright <?php the_time('Y')?> - FreeForWebDesign.com - All Rights Reserved</p>
                <div class="menu-footer">
                    <?php wp_nav_menu(array('theme_location' => 'menu'))?>
                </div>
            </div>
        </div>
    </div>
</footer>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->


<?php  wp_footer()?>
</body>
</html>