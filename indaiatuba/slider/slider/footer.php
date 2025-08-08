<!-- Swiper JS -->
<script src="slider/dist/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
$(window).load(function(){    
	setTimeout(function(){   
		if($(window).width() <= 1024){
			var swiper = new Swiper('.footer .swiper-container', {
			  slidesPerView: '4',
			  spaceBetween: 0,
			  loop: true,
			  pagination: {
				el: '.swiper-pagination',
				clickable: true,
			  },
			  navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			  },
			});    
		} else {
			var swiper = new Swiper('.footer .swiper-container', {
			  slidesPerView: '4',
			  spaceBetween: 0,
			  loop: true,
			  pagination: {
				el: '.swiper-pagination',
				clickable: true,
			  },
			  navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			  },
			});     
		}		
	},500);
});
</script>