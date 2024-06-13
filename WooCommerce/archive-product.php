<?php
get_header();
?>


<article class="content ">

    <?php


    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>

           
			<div class="container">
				<header class="content-header">
					<div class="meta mb-3">
                        <span class="date"><?php the_date(); ?></span>
                        <?php
                        the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span>');
                        ?>
                        <span class="comment"><a href="#comments"><i class='fa fa-comment'></i><?php comments_number(); ?></a></span>
                    </div>
				</header>

				<div class="content-body">
					<?php  the_content(); ?>
			    </div>
	

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