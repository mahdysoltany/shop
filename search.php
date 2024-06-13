<?php
get_header();
?>




<article>

    <?php


    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>

            <div class="container">
                <div class="post mb-5">
                    <div class="media">
                        <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src=" <?php the_post_thumbnail_url(); ?>" width="80px" height="80px" alt="image">
                        <div class="media-body">
                            <h3 class="title mb-1"><?php the_title(); ?></h3>
                            <div class="meta mb-1">
                                <span class="date"><?php the_date(); ?></span>
                                <span class="comment"><a href="#"><?php comments_number(); ?></a></span>
                            </div>
                            <div class="intro"><?php the_excerpt(); ?></div>
                            <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
                        </div><!--//media-body-->
                    </div><!--//media-->
                </div>



            </div>






    <?php
            //  get_template_part("/template-parts/content","archive");
        } // end  while
    } // end if


    the_posts_pagination();


    ?>

</article>

<?php
get_footer();
?>