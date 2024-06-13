<!DOCTYPE html>
<html lang="en">

<head>
	<title>Blog Site Template</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Blog Site Template">
	<meta name="author" content="https://youtube.com/FollowAndrew">
	<link rel="shortcut icon" href="images/logo.png">



	<?php
	wp_head();

	$count = WC()->cart->get_cart_contents_count();



	?>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />




</head>

<body dir="rtl">


	<header class="header text-center">

		<div class="header_col" id="logo">
			<?php

			$custom_logo_id = get_theme_mod('custom_logo');

			if ($custom_logo_id) :
				$logo = wp_get_attachment_image_src($custom_logo_id, 'full');

			?>
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<img src="<?php echo  $logo[0]; ?>" width="135px" height="48px"  alt="<?php bloginfo('name'); ?>">
				</a>
			<?php else : ?>
				<h1><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			<?php endif; ?>
		</div><!-- #logo -->


		<div class="header_col">




			<div class="input-group mb-3" style="
				position: relative;
				width: 500px;
				">
				<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" style="
				width: 85%;
				height: 50px;
				position: absolute;
				right: 0;
				border-radius: 15px;
				z-index: 10;
			">
				<button id="basic-addon1" style="
							background-color: #212341;
							color: white;
							width: 30%;
							height: 50px;
							position: absolute;
							border-radius: 15px;
							left: 0;
							text-align: left;
							padding: 0 20px;
						">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
						<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
					</svg>
				</button>
			</div>





		</div>


		<div class="header_col nav_header_cart">

			<div>

				<button class=" cart_btn btn  btn-success">
					<?php echo $count; ?>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
						<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
					</svg>
				</button>

			</div>
			<div>

				<button type="button" class="btn btn_login ">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
						<path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
					</svg>
					<span class="mx-2">ورود</span>

				</button>

			</div>



		</div>

	</header>



	<div class="container">
		<div class="row">

			<div class="col6">

			</div>
			<div class="col6">

			</div>

		</div>
	</div>

	<ul class="main_menu">

		<li>
			<a href="/">صفحه اصلی</a>
		</li>
		<li>
			<a href="#">تماس باما</a>
		</li>
		<li>
			<a href="#">درباره ما</a>
		</li>
	</ul>


	<div class="cart_box">

		<div class="container">

			<div class="row cart_header ">
				<div> <?php echo $count; ?> محصول </div>
				<div> مشاهده سبد خرید > </div>
			</div>
			<div class="row  cart_content ">
				<?php
				function get_cart_product_details()
				{
					// چک می‌کنیم که آیا WooCommerce نصب شده است و سبد خرید در دسترس است
					if (class_exists('WooCommerce') && WC()->cart) {
						// محصولات سبد خرید را دریافت می‌کنیم
						$cart_items = WC()->cart->get_cart();

						// آرایه‌ای برای ذخیره اطلاعات محصولات
						$products_info = array();

						// حلقه برای دسترسی به هر محصول در سبد خرید
						foreach ($cart_items as $cart_item_key => $cart_item) {
							// اطلاعات محصول را دریافت می‌کنیم
							$product = $cart_item['data'];

							// اضافه کردن اطلاعات محصول به آرایه
							$products_info[] = array(
								'name' => $product->get_name(),
								'quantity' => $cart_item['quantity'],
								'price' => $product->get_price(),
								'subtotal' => $cart_item['line_subtotal'],
								'total' => $cart_item['line_total'],
								'product_id' => $product->get_id(),
								'sku' => $product->get_sku(),
								'image' => wp_get_attachment_url($product->get_image_id()),
							);
						}

						// بازگرداندن اطلاعات محصولات
						return $products_info;
					} else {
						// اگر WooCommerce نصب نشده باشد یا سبد خرید در دسترس نباشد، آرایه خالی را برمی‌گردانیم
						return array();
					}
				}

				// مثال استفاده از تابع
				$cart_products = get_cart_product_details();
				foreach ($cart_products as $product) :

					$total = $product['total'];

				?>




					<div class="row  cart_product  ">
						<div class="col-12">
							<div class="row">
								<div class="col-3">
									<img src=" <?php echo $product['image']; ?>" width="100px" alt="<?php $product['name'] ?>">

								</div>
								<div class="col-9">
									<p><?php echo 'نام محصول: ' . $product['name']; ?></p>
									<p><?php echo 'تعداد: ' . $product['quantity']; ?></p>
								</div>
								<span><?php echo 'قیمت واحد: ' . $product['price'] . ' تومان'; ?></span>
							</div>
						</div>
					</div>

				<?php
					echo '<hr>';
				endforeach;
				if ($count == 0) :
				?>
					<div class="row">
						<img src="/wp-content/themes/shop/assets/images/emptybag.png" class="mx-auto w-50 d-block text-center position-relative mn-r" alt="">

					</div>
				<?php endif; ?>
			</div>

			<div class="row  cart_footer ">
				<div>
					قیمت کل :
				</div>
				<div>
					<?php echo  $total;  ?>
				</div>
			</div>
		</div>
		<button class=" btn btn-success row">ادامه جهت تسویه</button>
	</div>