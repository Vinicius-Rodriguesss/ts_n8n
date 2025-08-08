<!-- Swiper JS -->
<script src="slider/dist/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
$(window).load(function(){
	setTimeout(function(){
		if($(window).width() <= 1024){
			var swiper = new Swiper('.instagram .swiper-container', {
			  slidesPerView: '3',
			  spaceBetween: 13,
			  loop: true,
			  navigation: {
				nextEl: '.instagram .swiper-button-next',
				prevEl: '.instagram .swiper-button-prev',
			  },
			});    
		} else {
			var swiper = new Swiper('.instagram .swiper-container', {
			  centeredSlides: true,
		      slidesPerView: 'auto',
		      loop: true,
		      navigation: {
				nextEl: '.instagram .swiper-button-next',
				prevEl: '.instagram .swiper-button-prev',
			  },
			});         
		}	
	},1000);
});
</script>