<script>
	$(window).on('load',function(){    
		var swiper = new Swiper('.banner .swiper-container', {
			slidesPerView: '1',
			speed: 1000,
			spaceBetween: 0,
			loop: true,
			autoplay: {
				delay: 6000,
				disableOnInteraction:true,
			},
			navigation: {
				nextEl: '#banner .swiper-button-next',
				prevEl: '#banner .swiper-button-prev',
			},
			effect: 'fade',
			fadeEffect: {
				crossFade: false
			}
		}); 		
	});
</script>