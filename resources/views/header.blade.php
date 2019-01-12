@php($home = '')
@php($about = '')

@if(Route::currentRouteName() == 'landingPage')
	@php  ($home = 'caps active')	
@elseif(Route::currentRouteName() == 'aboutUs')
	@php  ($about = 'caps active')
@endif

<header class="header-section" id="section-navbar">
	<div class="header-warp">
		<div class="site-logo">
			<h2><a href="{{ Route('landingPage') }}">AUCTCHAIN</a></h2>
		</div>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<ul class="main-menu">
			<li><a href="{{ Route('landingPage') }}" class="{{$home}}">Home</a></li>
			<li><a href="{{ Route('sellroom') }}">Shop</a></li>
			<li><a href="{{ Route('aboutUs') }}" class="{{$about}}">About Us</a></li>
		</ul>
	</div>
</header>