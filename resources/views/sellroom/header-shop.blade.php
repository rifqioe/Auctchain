<header class="header">
	<div class="header_main">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-3"></div>
				<div class="col-lg-6 col-sm-6 col-6 order-1">
					<div class="logo_container">
						<div class="logo text-center"><a href="{{ Route('sellroom') }}">AUCTCHAIN SELLROOM</a></div>
					</div>
				</div>
				<div class="col-lg-6 offset-2 col-12 order-lg-2 order-3 text-lg-left text-right" style="display: none">
					<div class="header_search">
						<div class="header_search_content">
							<div class="header_search_form_container">
								<form action="#" class="header_search_form clearfix">
									<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
									<div class="custom_dropdown" style="display: none !important;">
										<div class="custom_dropdown_list">
											<span class="custom_dropdown_placeholder clc">All Categories</span>
											<i class="fas fa-chevron-down"></i>
											<ul class="custom_list clc"></ul>
										</div>
									</div>
									<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ URL::asset('img/search.png') }}" alt=""></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<nav class="main_nav">
	<div class="container">
		<div class="row">
			<div class="col">				
				<div class="main_nav_content d-flex flex-row">
					<div class="main_nav_menu ml-auto accountInfo">
						<ul class="standard_dropdown main_nav_dropdown">
							<li>
								<a id="accountAddress" href="{{ Route('account') }}">Hi ...</a>
							</li>
						</ul>
					</div>
					<div class="main_nav_menu ml-auto">
						<ul class="standard_dropdown main_nav_dropdown">
							<li><a href="{{ Route('landingPage') }}">Home<i class="fas fa-chevron-down"></i></a></li>
							<li class="hassubs">
								<a href="{{ Route('sellroom') }}" class="active">SHOP</a>
							</li>
							<li class="hassubs">
								<a href="{{ Route('aboutUs') }}">About Us</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>