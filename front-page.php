<?php
get_header();
?>




<?php


if (have_posts()) :
   while (have_posts()) :
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
   endwhile;
endif;


//product
   ?>






   <div dir="ltr" class="container owl-carousel owl-theme">


      <?php
      $args = array(
         'post_type' => 'product', // محصولات WooCommerce
         'posts_per_page' => -1 // تمامی محصولات
      );

      $products = get_posts($args);

      if ($products) :
         foreach ($products as $product) :

            // دریافت تصویر اصلی محصول
            $image_id = get_post_thumbnail_id($product->ID);
            $image_url = wp_get_attachment_url($image_id);
            $product_link = get_permalink($product->ID);
      ?>



            <a href="<?php echo $product_link ; ?>">

               <div class="item">
                  <img src="<?php echo $image_url; ?>" width="100%" alt="">
                  <span><?php echo 'نام محصول: ' . get_the_title($product) . '<br>'; ?><span>
                        <?php echo 'قیمت محصول: ' . get_post_meta($product->ID, '_price', true) . '<br>'; ?>
               </div>

            </a>
      <?php
         endforeach;
      endif;

      ?>
   </div>



   <?php
   get_footer();
   ?>