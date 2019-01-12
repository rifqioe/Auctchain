<!DOCTYPE html>
<html>
<head>
	<title>AUCTCHAIN</title>
	@include('css')
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
						<h2>About Us</h2>
					</div>
				</div>
			</div>	
		</div>
		<div><img src="{{ URL::asset('img/arrow/down-arrow-white.png') }}" id="down-to-profile" class="wow pulse" data-wow-iteration="infinite"></div>
	</section>
	<section class="chefs-section set-bg" id="section-profile">
		<div class="container">
			<div class="section-title">
				<h2>Application Developer</h2>
			</div>
			<div class="row chefs">
				<div class="col-md-4 chef">
					<img src="img/team/171511005.jpg" alt="">
					<h4>Daffa Radifanka</h4>
					<!-- <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet.</p> -->
				</div>
				<div class="col-md-4 chef">
					<img src="img/team/171511011.jpg" alt="">
					<h4>Hasya Nurul Ikrima</h4>
					<!-- <p>Facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit.</p> -->
				</div>
				<div class="col-md-4 chef">
					<img src="img/team/171511018.jpg" alt="">
					<h4>M Fajar Nur E</h4>
					<!-- <p>Sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, con-sectetur sit amet ornare.</p> -->
				</div>
			</div>
			<div class="row chefs">
				<div class="col-md-2"></div>
				<div class="col-md-4 chef">
					<img src="img/team/171511022.jpg" alt="">
					<h4>Rayhan Ikram Al Aziz</h4>
					<!-- <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet.</p> -->
				</div>
				<div class="col-md-4 chef">
					<img src="img/team/171511029.jpg" alt="">
					<h4>Rizky Wahyudi</h4>
					<!-- <p>Sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, con-sectetur sit amet ornare.</p> -->
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="section-title">
				<h2>Analyst</h2>
			</div>
			<div class="row chefs">
				<div class="col-md-4 chef">
					<img src="img/team/171511010.jpg" alt="">
					<h4>Firiontina Argan Dini H</h4>
					<!-- <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet.</p> -->
				</div>
				<div class="col-md-4 chef">
					<img src="img/team/171511020.jpg" alt="">
					<h4>M Irsa Nurodin</h4>
					<!-- <p>Facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit.</p> -->
				</div>
				<div class="col-md-4 chef">
					<img src="img/team/171511028.jpg" alt="">
					<h4>Rindu Mustika Pratiwi</h4>
					<!-- <p>Sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, con-sectetur sit amet ornare.</p> -->
				</div>
			</div>
			<div class="section-title">
				<h2>Technologist</h2>
			</div>
			<div class="row chefs">
				<div class="col-md-2"></div>
				<div class="col-md-4 chef">
					<img src="img/team/171511026.jpg" alt="">
					<h4>Rifqi Oktabhiar Erawan</h4>
					<!-- <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet.</p> -->
				</div>
				<div class="col-md-4 chef">
					<img src="img/team/171511027.jpg" alt="">
					<h4>Rinaldi Rasyid</h4>
					<!-- <p>Facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit.</p> -->
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</section>
	@include('footer')
	@include('script')
</body>
</html>