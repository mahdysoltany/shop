<?php
get_header();

global $product;

$product_id = 77; // شناسه محصول

$product = wc_get_product($product_id);

// دریافت تصویر اصلی محصول
$image_id = get_post_thumbnail_id($product_id);
$image_url = wp_get_attachment_url($image_id);



$attributes = get_post_meta($product_id, '_product_attributes', true);



$price =  get_post_meta($product_id, '_price', true);

?>






<div class="container-fluid">
    <div class="row">

        <div class="col-5">
            <img src="<?php echo $image_url; ?>" width="100%" alt="">
        </div>
        <div class="col-5 col_Specification">

            <h1>
                <?php the_title(); ?>
            </h1>




            <div class="py-3  price  ">
                <?php echo $price; ?> ریال
            </div>
            <?php

            // نمایش بخشی از توضیحات محصول
          
            $product_link = get_permalink($product_id);
            ?>
            <div class="py-3">
                <form class="cart" action="<?php echo  $product_link ; ?>" method="post" enctype="multipart/form-data">

                    <div class="quantity">
                        <label class="screen-reader-text" for="quantity_664432ab13f68">سامسونگ A55 عدد</label>
                        <input type="number" id="quantity_664432ab13f68" class="input-text qty text" name="quantity" value="1" aria-label="تعداد محصول" size="4" min="1" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                    </div>

                    <input type="hidden" name="is-descendent-of-single-product-block" value="false">
                    <button type="submit" name="add-to-cart" value="<?php  echo $product_id ;  ?>" class="single_add_to_cart_button button alt wp-element-button">افزودن به سبد خرید</button>

                </form>

            </div>
            <div class="py-3">
                <?php
                // دریافت دسته‌بندی‌های محصول
                $terms = wp_get_post_terms($product_id, 'product_cat');
                if (!empty($terms) && !is_wp_error($terms)) :
                    echo 'دسته‌بندی‌ها: ';
                    $categories = array();
                    foreach ($terms as $term) :
                        $categories[] = $term->name;
                    endforeach;
                ?>


                    <?php echo implode(', ', $categories) . '<br>'; ?>
                <?php endif;  ?>
            </div>
            <?php
            // دریافت برچسب‌های محصول
            $tags = wp_get_post_terms($product_id, 'product_tag');
            if (!empty($tags) && !is_wp_error($tags)) {
                echo 'برچسب‌ها: ';
                $tag_list = array();
                foreach ($tags as $tag) {
                    $tag_list[] = $tag->name;
                }
                echo implode(', ', $tag_list) . '<br>';
            }

            ?>

        </div>
    </div>
    <div class="row_description_btn">
        <a class="btn btn-dark m-3" href="#description">توضیحات</a>
        <a class="btn btn-dark m-3" href="#Specification">مشخصات</a>
        <a class="btn btn-dark m-3" href="#comment">نظرات</a>
    </div>
    <div class="row_description_text">
        <div id="description">
            <?php the_content(); ?>
        </div>
        <div id="Specification">
            <?php






            ?>


            <?php
            if ($attributes) :
                // لیست ویژگی‌های محصول
            ?>
                <table class="table table-striped">
                    <tbody>
                        <?php foreach ($attributes as $attribute) :
                            $attribute_name = $attribute['name'];
                            $attribute_values = $attribute['value'];
                        ?>
                            <tr>
                                <td> <?php echo $attribute_name; ?></td>
                                <td> <?php echo $attribute_values; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>


            <?php endif; ?>


        </div>
        <div id="comment">
            <form action="http://localhost/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
                <div class="comment-form-rating"><label for="rating">امتیاز شما&nbsp;<span class="required">*</span></label>
                    <p class="stars"> <span> <a class="star-1" href="#">1</a> <a class="star-2" href="#">2</a> <a class="star-3" href="#">3</a> <a class="star-4" href="#">4</a> <a class="star-5" href="#">5</a> </span> </p>
                </div>
                <p class="comment-form-comment"><label for="comment">دیدگاه شما&nbsp;<span class="required">*</span></label>

                    <input type="hidden" name="rating" value="4">
                    <textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
                </p>
                <p class="form-submit wp-block-button">
                    <input name="submit" type="submit" id="submit" class="submit wp-block-button__link wp-element-button" value="ثبت">
                    <input type="hidden" name="comment_post_ID" value="38" id="comment_post_ID">
                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                </p><input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="5a5a400baf">
                <script>
                    (function() {
                        if (window === window.parent) {
                            document.getElementById('_wp_unfiltered_html_comment_disabled').name = '_wp_unfiltered_html_comment';
                        }
                    })();
                </script>
            </form>
        </div>


    </div>
</div>



<?php
get_footer();
?>