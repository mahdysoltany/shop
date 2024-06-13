<?php
get_header();
?>


<article class="content ">

    <?php
    global $post;

    if (have_posts()) {
        while (have_posts()) {
            the_post();


            $categories = get_the_category($post->ID);

    ?>





           
            

                <div class="content-body">
                    <?php  the_category(); the_content(); ?>
                </div>


            


    <?php
            //  get_template_part("/template-parts/content","article");
        }
    }

    ?>

</article>





<?php
get_footer();
?>