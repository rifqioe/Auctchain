<script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('js/circle-progress.min.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>
<script src="{{ URL::asset('js/wow.min.js') }}"></script>
<script src="{{ URL::asset('js/map.js') }}"></script>
<script src="{{ URL::asset('js/Contract.js') }}"></script>
<script src="{{ URL::asset('js/web3.min.js') }}"></script>
<script type="text/javascript">
	$('#down-to-advantage').click(function() {
		$("html, body").animate({ scrollTop: $('#section-advantage').offset().top }, 1500);
	})
	$('#down-to-side').click(function() {
		$("html, body").animate({ scrollTop: $('#section-side').offset().top }, 1500);
	})
	$('#down-to-profile').click(function() {
		$("html, body").animate({ scrollTop: $('#section-profile').offset().top }, 1500);
	})
</script>
<script>
	new WOW().init();
</script>