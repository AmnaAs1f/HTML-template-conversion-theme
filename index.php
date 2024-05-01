<?php  get_header('First'); ?>







<section class="blog_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Blog
            </h2>
            <img src="<?php echo get_theme_file_uri('./images/plug.png'); ?>" alt="">
        </div>

        <div class="row">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo get_theme_file_uri('./images/blog1.jpg'); ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h5>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>

                        </div>


                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <?php
            echo get_the_posts_pagination ();
            ?>
        </div>
    </div>
</section>





      
           

<?php get_footer(); ?>