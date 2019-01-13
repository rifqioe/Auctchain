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
	<!-- <div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{URL::asset('../../img/shop_background.jpg') }}"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">SELLROOM</h2>
		</div>
	</div> -->
	<div class="shop">
		<div class="container">
			<div class="row">
				<!-- <div class="col-lg-3"> -->
					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<!-- <div class="sidebar_title">Categories</div>
								<ul class="sidebar_categories">
									<li><a href="#">Art</a></li>
								</ul>
							</div> -->
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
							<div class="col-lg-12 col-md-12">
								<!-- Shop Content -->
								<div class="shop_content">
									<div class="shop_bar clearfix">
										<div class="shop_product_count"><span id="productCount">0</span> products found</div>
										<div class="registerItem pull-right"><a id="registerItem" href="{{ Route('registerItem') }}">Register Item HERE</a></div>
									</div>
									<div class="productList">
										<div class="productPerItem">
											<div class="productSquare col-md-4 col-lg-4">
												<div class="productBorder">
													<div class="productName"></div>
													<div class="productImage">
														<img src="" alt="Product Image" class="productImg">
													</div>
													<div class="productPrice"></div>
													<div class="productDetail">
														<a class="productLink"><button>Detail</button></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> <!-- ENDshopContent -->
							</div>
						</div>
					</div>
				<!-- </div> -->
			</div>


	<!-- Footer -->
	@include('footer')
	@include('sellroom/script-shop')
	<script type="text/javascript">
		let accountAddress = null;

		var account = document.querySelector('#accountAddress');  
		var productCount = document.querySelector('#productCount');
		web3 = new Web3(window.web3.currentProvider);
		const Auction = new web3.eth.Contract(abiInterface,contractAddress);

		window.addEventListener('load', () => {
			var auctionInterval = setInterval(function updateAuctionHTML() {
				web3.eth.getAccounts().then(accounts => {
				    accountAddress = accounts[0];
				    if(account != null)
				    	Auction.methods.isRegistered(String(accountAddress)).call().then(res => {
				    		if (!res){
				    			account.innerHTML = "Hi "+accountAddress;
				      		} else {
				    			web3.eth.getBalance(String(accountAddress)).then(res => {
						       		addressBalance.innerHTML = web3.utils.fromWei(res, 'ether');
						    	});
						    	Auction.methods.getRegisteredData(accountAddress).call().then(res => {
						    		account.innerHTML = "Hi "+res[0];
						    		
						    	})
				    		}
			  			});
				});
	  		}, 2000);
	  		var prodList = $('.productList');
			  var temp = $('.productPerItem');
	  		Auction.methods.getAuctionCount().call().then(res => {
	  			productCount.innerHTML = res;
	  			for (var i = 0, count = 0; i < productCount.innerHTML; i++) {
		  			Auction.methods.getAuction(i).call().then(res => {
						if(res[9] == 1){
							count++;
							temp.find('.productName').text(res[2]);
							temp.find('.productImg').attr('src', '{{ URL::asset('img/uploads/') }}'+'/'+res[4]);
							temp.find('.productLink').attr('href','{{ Route('product',[''])}}/'+res[0]);
							temp.find('.productPrice').text(web3.utils.fromWei(res[8],'ether')+' ETH');
							prodList.append(temp.html());
						}
						productCount.innerHTML = count;
						  
		  			});
		  		}
	  		});
			//UNTUK PENGULANGAN DALAM PRODUCT
	  		// temp.find('.productImg').attr('src', '{{ URL::asset('img/single_2.jpg') }}');
	  		// prodList.append(temp.html());
	  		// temp.find('.productImg').attr('src', '{{ URL::asset('img/single_1.jpg') }}');
	  		// prodList.append(temp.html());
	  	});
	</script>
</body>
</html>