<!DOCTYPE html>
<html>
<head>
	<title>AUCTCHAIN</title>
	@include('css')
	<style>
		::-webkit-scrollbar {
            width: 0 !important;
        }
	</style>
</head>
<body>
	<div id="preloder">	
		<div class="loader"></div>
	</div>
	@include('header')
	<section class="hero-section" id="section-carousel">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="{{ URL::asset('img/slider/silder-4.jpg') }}">
				<div class="hs-content">
					<div class="hsc-warp">
						<h2>New Era of Auction</h2>
						<p>System with BlockChain</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="{{ URL::asset('img/slider/silder-4.jpg') }}">
				<div class="hs-content">
					<div class="hsc-warp">
						<h2>AUCTCHAIN<span></span></h2>
						<p>Seller and Bidder </p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="{{ URL::asset('img/slider/silder-4.jpg') }}">
				<div class="hs-content">
					<div class="hsc-warp">
						<h2> Try A new Experience<span></span></h2>
						<p>By A2 - D3 Teknik Informatika 2017</p>
					</div>
				</div>
			</div>
		</div>
		<div><img src="{{ URL::asset('img/arrow/down-arrow-white.png') }}" id="down-to-advantage" class="wow pulse" data-wow-iteration="infinite"></div>
	</section>
	<section class="inter-section spad" id="section-advantage">
		<div class="container">
			<div class="section-title">
				<h2>The advantages of using Blockchain</h2>
			</div>
			<div class="row">
				<div class="col-md-4 intro-item">
					<img src="{{ URL::asset('img/auctioneer.png') }}">
					<h3>Display Product</h3>
					<p>Seller sell their goods, ads will displayed on the web. </p>
				</div>
				<div class="col-md-4 intro-item">
					<img src="{{ URL::asset('img/law.png') }}">
					<h3>Smart Contract</h3>
					<p>Smart contract created when bidder start give the price.</p>
				</div>
				<div class="col-md-4 intro-item">
						<img src="{{ URL::asset('img/crownn.png') }}">
					<h3>The Winning Bidder</h3>
					<p>Bidder with highest price offer will win, other bidder money will return. </p>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4 intro-item">
					
					<img src="{{ URL::asset('img/networkk.png') }}">
					<h3>Distribute Data</h3>
					<p>Transaction data will be distributed with privacy of seller and bidder. </p>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
		<div><img src="{{ URL::asset('img/arrow/down-arrow-green.png') }}" id="down-to-side" class="wow pulse" data-wow-iteration="infinite"></div>
	</section>
	<section class="testimonials-section spad pb-0 set-bg" id="section-side" data-setbg="{{ URL::asset('img/banner1.jpg') }}">
		<div class="container">
			<div class="section-title text-white">
				<h2>Choose your side</h2>
			</div>
			<div class="row">
				<div class="banner_3_content col-md col-sm-6 col-xs-12">
					<div class="banner_3_image_container">
						<div class="banner_3_image"><img src="{{ URL::asset('img/auction (2).png') }}" alt=""></div>
					</div>
					<div class="banner_3_title">Do you want to sell?</div>
					<div class="button banner_3_button banner-btn pull-left">
						<a class="link" href="{{ Route('registerItem')}}">SELL</a>
					</div>
				</div>
				<div class="banner_4_content col-md col-sm-6 col-xs-12 pull-right">
					<div class="banner_4_image_container">
						<div class="banner_4_image"><img src="{{ URL::asset('img/auction (4).png') }}" alt=""></div>
					</div>
					<div class="banner_4_title">Do you want to bid?</div>
					<div class="button banner_4_button banner-btn pull-right">
						<a class="link" href="{{ Route('sellroom') }}">BID</a>
					</div>
				</div>
			</div>	
		</div>
	</section>
	@include('footer')
	@include('script')
</body>
</html>