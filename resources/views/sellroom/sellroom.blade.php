<!DOCTYPE html>
<html>
<head>
	<title>Sellroom</title>
	@include('sellroom/css-shop')
</head>
<body>
<body>
	<!-- <div id="preloder">	 -->
		<!-- <div class="loader"></div> -->
	<!-- </div> -->
	<div class="super_container">
	@include('sellroom/header-shop')
	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{URL::asset('../../img/shop_background.jpg') }}"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">SELLROOM</h2>
		</div>
	</div>
	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
								<ul class="sidebar_categories">
									<li><a href="#">Art</a></li>
								</ul>
							</div>
							<div class="sidebar_section filter_by_section">
								<!-- <div class="sidebar_title">Filter By</div> -->
									<!-- <div class="sidebar_subtitle">Price</div> -->
									<!-- <div class="filter_price">
									<div id="slider-range" class="slider_range"></div>
									<p>Range: </p>
									<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
									</div> -->
							</div>
									<!-- <div class="sidebar_section">
								<div class="sidebar_subtitle color_subtitle">Color</div>
								<ul class="colors_list">
									<li class="color"><a href="#" style="background: #b19c83;"></a></li>
									<li class="color"><a href="#" style="background: #000000;"></a></li>
									<li class="color"><a href="#" style="background: #999999;"></a></li>
									<li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
									<li class="color"><a href="#" style="background: #df3b3b;"></a></li>
									<li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
								</ul>
							</div> -->
									<!-- <div class="sidebar_section">
								<div class="sidebar_subtitle brands_subtitle">Brands</div>
								<ul class="brands_list">
									<li class="brand"><a href="#">Apple</a></li>
									<li class="brand"><a href="#">Beoplay</a></li>
									<li class="brand"><a href="#">Google</a></li>
									<li class="brand"><a href="#">Meizu</a></li>
									<li class="brand"><a href="#">OnePlus</a></li>
									<li class="brand"><a href="#">Samsung</a></li>
									<li class="brand"><a href="#">Sony</a></li>
									<li class="brand"><a href="#">Xiaomi</a></li>
								</ul>
							</div> -->
								</div>

							</div>

							<div class="col-lg-9">

								<!-- Shop Content -->

								<div class="shop_content">
									<div class="shop_bar clearfix">
										<div class="shop_product_count"><span>0</span> products found</div>
										<div class="shop_sorting">
										</div>
									</div>

									<!-- BARIS 1 -->

									<div class="mdl-grid">

										<div class="mdl-cell mdl-cell--4-col">
											<div class="demo-card-square mdl-card mdl-shadow--2dp">
												<div class="mdl-card__title mdl-card--expand">
													<h2 class="mdl-card__title-text"></h2>
												</div>
												<div class="mdl-card__supporting-text" style="font-style: ">
													Madonna of The Moon
												</div>
												<div class="mdl-card__actions mdl-card--border">
													<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="product2.html">
														View Product 
													</a>
												</div>
											</div>
										</div>

										<div class="mdl-cell mdl-cell--4-col">
											<div class="demo-card-square mdl-card mdl-shadow--2dp">
												<div class="mdl-card__title1 mdl-card--expand">
													<h2 class="mdl-card__title-text"></h2>
												</div>
												<div class="mdl-card__supporting-text">
													Olympic Track
												</div>
												<div class="mdl-card__actions mdl-card--border">
													<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="product.html">
														View Product 
													</a>
												</div>
											</div>
										</div>

										<div class="mdl-cell mdl-cell--4-col">
											<div class="demo-card-square mdl-card mdl-shadow--2dp">
												<div class="mdl-card__title2 mdl-card--expand">
													<h2 class="mdl-card__title-text"></h2>
												</div>
												<div class="mdl-card__supporting-text">
													Kite
												</div>
												<div class="mdl-card__actions mdl-card--border">
													<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect " href="product1.html">
														View Product 
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- END -->

									<!-- BARIS 1 -->

									<div class="mdl-grid">

										<div class="mdl-cell mdl-cell--4-col">
											<div class="demo-card-square mdl-card mdl-shadow--2dp">
												<div class="mdl-card__title3 mdl-card--expand">
													<h2 class="mdl-card__title-text"></h2>
												</div>
												<div class="mdl-card__supporting-text">
													Don Xuite
												</div>
												<div class="mdl-card__actions mdl-card--border">
													<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="product3.html">
														View Product 
													</a>
												</div>
											</div>
										</div>

											
	
										
										<!-- END -->



								</div> <!-- ENDshopContent -->
							</div>
						</div>
					</div>
				</div>
			</div>


	<!-- Footer -->
	@include('footer')
	@include('sellroom/script-shop')
</body>
</html>