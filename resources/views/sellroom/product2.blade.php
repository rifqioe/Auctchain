<!DOCTYPE html>
<html lang="en">
<head>
	<title>Single Product</title>
	@include('css-shop')
</head>
<body>
	<div class="super_container">
		@include('sellroom/header-shop')
		<div class="single_product">
			<div class="container">
				<!-- Product name -->

				<div class="col-lg-3 order-1">
						<div class="product_name">Macbook Air 13</div>
					</div>

				<div class="row">
					<div class="col-lg-2 order-lg-1 order-2">
						<ul class="image_list">
							<li data-image="images/single_4.jpg"><img src="images/single_4.jpg" alt=""></li>
							<li data-image="images/single_2.jpg"><img src="images/single_2.jpg" alt=""></li>
							<li data-image="images/single_3.jpg"><img src="images/single_3.jpg" alt=""></li>
						</ul>
					</div>

					<!-- Selected Image -->
					<div class="col-lg-5 order-lg-2 order-1">
						<div class="image_selected"><img src="images/single_4.jpg" alt=""></div>
					</div>

					<!-- Description -->
					<div class="col-lg-5 order-3">
						<div class="product_description">
							<!-- <div class="product_category">Laptops</div> -->
							<!-- <div class="product_name">MacBook Air 13</div> -->
							<!-- Timer-->

							<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
									<div class="deals_timer_title_container">
										 <div class="deals_timer_title">Hurry Up</div>
										<div class="deals_timer_subtitle">Offer ends in:</div>
									</div>
									<div class="deals_timer_content ml-auto">
										<div class="deals_timer_box clearfix" data-target-time="">
											<div class="deals_timer_unit">
												<div id="deals_timer1_hr" class="deals_timer_hr"></div>
												<span>hours</span>
											</div>
											<div class="deals_timer_unit">
												<div id="deals_timer1_min" class="deals_timer_min"></div>
												<span>mins</span>
											</div>
											<div class="deals_timer_unit">
												<div id="deals_timer1_sec" class="deals_timer_sec"></div>
												<span>secs</span>
											</div>
										</div>
									</div>
								</div>
							<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
							<div class="order_info d-flex flex-row">
								<form action="#">
									<div class="clearfix" style="z-index: 1000;">

										<!-- Product Quantity -->
										<!-- <div class="product_quantity clearfix">
											<span>Quantity: </span>
											<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
											<div class="quantity_buttons">
												<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
												<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
											</div>
										</div> -->

										<!-- Product Color -->
										<!-- <ul class="product_color">
											<li>
												<span>Color: </span>
												<div class="color_mark_container"><div id="selected_color" class="color_mark"></div></div>
												<div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

												<ul class="color_list">
													<li><div class="color_mark" style="background: #999999;"></div></li>
													<li><div class="color_mark" style="background: #b19c83;"></div></li>
													<li><div class="color_mark" style="background: #000000;"></div></li>
												</ul>
											</li>
										</ul> -->
										<div class="product_price">Eth.4.94</div>
										<div class="button_container">
											<button type="button" class="button cart_button"><a href="oe.html">Bid</a></button>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
										</div>
									</div>

									
									
								</form>
							</div>

						</div>


					</div>

				</div>
				<div class="col-lg-6 order-1">
						<div class="product_text"><p>	
								Macbook Air Mid 2013 13 inch
								SN C02M3FRQF5V7
								
								SPESIFIKASI
								- Prosesor : Intel Core i5 1.3 GHz 
								- RAM : 4 GB 
								- Graphics : Intel HD Graphics 5000 1536MB
								- Storage : SSD 64 GB
								- cc 657 normal
								
								KONDISI
								- Warna : Silver 
								- Performa Unit Berjalan Normal &amp; Siap Pakai
								- Detail Kondisi Cek Foto 
								- Keyboard backlights 
								- Trackpad Normal dan empuk 
								- Wi-Fi lancar
								- Speaker mantap 
								- Kamera bening
								- Logo Apple nyala
								- Port Oke 
								
								KELENGKAPAN
								- Unit Macbook 
								- Charger Adaptor / Magsafe Original
								</p></div>
							</div>
			</div>
				
		</div>

		<!-- Recently Viewed -->

		<div class="viewed">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="viewed_title_container">
								<h3 class="viewed_title">Recently Viewed</h3>
								<div class="viewed_nav_container">
									<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
									<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
								</div>
							</div>
		
							<div class="viewed_slider_container">
								
								<!-- Recently Viewed Slider -->
		
								<div class="owl-carousel owl-theme viewed_slider">
									
									<!-- Recently Viewed Item -->
									<div class="owl-item">
										<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="viewed_image"><img src="images/view_1.jpg" alt=""></div>
											<div class="viewed_content text-center">
												<div class="viewed_price">$225<span>$300</span></div>
												<div class="viewed_name"><a href="#">Beoplay H7</a></div>
											</div>
											<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
												<div class="deals_timer_title_container">
													<!-- <div class="deals_timer_title">Hurry Up</div>
													<div class="deals_timer_subtitle">Offer ends in:</div> -->
												</div>
												<div class="deals_timer_content ml-auto">
													<div class="deals_timer_box clearfix" data-target-time="">
														<div class="deals_timer_unit">
															<div id="deals_timer1_hr" class="deals_timer_hr"></div>
															<span>hours</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_min" class="deals_timer_min"></div>
															<span>mins</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_sec" class="deals_timer_sec"></div>
															<span>secs</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
		
									<!-- Recently Viewed Item -->
									<div class="owl-item">
										<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="viewed_image"><img src="images/view_2.jpg" alt=""></div>
											<div class="viewed_content text-center">
												<div class="viewed_price">$379</div>
												<div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
											</div>
											<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
												<div class="deals_timer_title_container">
													<!-- <div class="deals_timer_title">Hurry Up</div>
													<div class="deals_timer_subtitle">Offer ends in:</div> -->
												</div>
												<div class="deals_timer_content ml-auto">
													<div class="deals_timer_box clearfix" data-target-time="">
														<div class="deals_timer_unit">
															<div id="deals_timer1_hr" class="deals_timer_hr"></div>
															<span>hours</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_min" class="deals_timer_min"></div>
															<span>mins</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_sec" class="deals_timer_sec"></div>
															<span>secs</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
		
									<!-- Recently Viewed Item -->
									<div class="owl-item">
										<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="viewed_image"><img src="images/view_3.jpg" alt=""></div>
											<div class="viewed_content text-center">
												<div class="viewed_price">$225</div>
												<div class="viewed_name"><a href="#">Samsung J730F...</a></div>
											</div>
											<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
												<div class="deals_timer_title_container">
													<!-- <div class="deals_timer_title">Hurry Up</div>
													<div class="deals_timer_subtitle">Offer ends in:</div> -->
												</div>
												<div class="deals_timer_content ml-auto">
													<div class="deals_timer_box clearfix" data-target-time="">
														<div class="deals_timer_unit">
															<div id="deals_timer1_hr" class="deals_timer_hr"></div>
															<span>hours</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_min" class="deals_timer_min"></div>
															<span>mins</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_sec" class="deals_timer_sec"></div>
															<span>secs</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
		
									<!-- Recently Viewed Item -->
									<div class="owl-item">
										<div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="viewed_image"><img src="images/view_4.jpg" alt=""></div>
											<div class="viewed_content text-center">
												<div class="viewed_price">$379</div>
												<div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
											</div>
											<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
												<div class="deals_timer_title_container">
													<!-- <div class="deals_timer_title">Hurry Up</div>
													<div class="deals_timer_subtitle">Offer ends in:</div> -->
												</div>
												<div class="deals_timer_content ml-auto">
													<div class="deals_timer_box clearfix" data-target-time="">
														<div class="deals_timer_unit">
															<div id="deals_timer1_hr" class="deals_timer_hr"></div>
															<span>hours</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_min" class="deals_timer_min"></div>
															<span>mins</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_sec" class="deals_timer_sec"></div>
															<span>secs</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
		
									<!-- Recently Viewed Item -->
									<div class="owl-item">
										<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="viewed_image"><img src="images/view_5.jpg" alt=""></div>
											<div class="viewed_content text-center">
												<div class="viewed_price">$225<span>$300</span></div>
												<div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
											</div>
											<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
												<div class="deals_timer_title_container">
													<!-- <div class="deals_timer_title">Hurry Up</div>
													<div class="deals_timer_subtitle">Offer ends in:</div> -->
												</div>
												<div class="deals_timer_content ml-auto">
													<div class="deals_timer_box clearfix" data-target-time="">
														<div class="deals_timer_unit">
															<div id="deals_timer1_hr" class="deals_timer_hr"></div>
															<span>hours</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_min" class="deals_timer_min"></div>
															<span>mins</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_sec" class="deals_timer_sec"></div>
															<span>secs</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
		
									<!-- Recently Viewed Item -->
									<div class="owl-item">
										<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="viewed_image"><img src="images/view_6.jpg" alt=""></div>
											<div class="viewed_content text-center">
												<div class="viewed_price">$375</div>
												<div class="viewed_name"><a href="#">Speedlink...</a></div>
											</div>
											<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
												<div class="deals_timer_title_container">
													<!-- <div class="deals_timer_title">Hurry Up</div>
													<div class="deals_timer_subtitle">Offer ends in:</div> -->
												</div>
												<div class="deals_timer_content ml-auto">
													<div class="deals_timer_box clearfix" data-target-time="">
														<div class="deals_timer_unit">
															<div id="deals_timer1_hr" class="deals_timer_hr"></div>
															<span>hours</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_min" class="deals_timer_min"></div>
															<span>mins</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_sec" class="deals_timer_sec"></div>
															<span>secs</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
		
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Brands -->

		<div class="brands">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="brands_slider_container">
							
							<!-- Brands Slider -->

							<div class="owl-carousel owl-theme brands_slider">
								
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_1.jpg" alt=""></div></div>
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_2.jpg" alt=""></div></div>
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_3.jpg" alt=""></div></div>
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_4.jpg" alt=""></div></div>
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_5.jpg" alt=""></div></div>
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_6.jpg" alt=""></div></div>
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_7.jpg" alt=""></div></div>
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_8.jpg" alt=""></div></div>

							</div>
							
							<!-- Brands Slider Navigation -->
							<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Newsletter -->

		<!-- <div class="newsletter">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
							<div class="newsletter_title_container">
								<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
								<div class="newsletter_title">Sign up for Newsletter</div>
								<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
							</div>
							<div class="newsletter_content clearfix">
								<form action="#" class="newsletter_form">
									<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
									<button class="newsletter_button">Subscribe</button>
								</form>
								<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
							<div class="logos ml-sm-auto">
								<ul class="logos_list">
									<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
									<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
									<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
									<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('footer')
	@include('sellroom/script-shop')
</body>

</html>