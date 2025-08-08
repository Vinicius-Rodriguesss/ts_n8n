<!-- Swiper JS -->
<script src="slider/dist/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
$(function(){    
	if($(window).width() <= 1024){
		setTimeout(function(){
			var swiper = new Swiper('.home_cinema .swiper-container', {
			  slidesPerView: '2',
			  spaceBetween: 50,
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
		},2000);
	} else if($(window).width() <= 1500){
		setTimeout(function(){
			var swiper = new Swiper('.home_cinema .swiper-container', {
			  slidesPerView: '4',
			  spaceBetween: 30,
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
		},2000);
	} else {
		setTimeout(function(){
			var swiper = new Swiper('.home_cinema .swiper-container', {
			  slidesPerView: '6',
			  spaceBetween: 40,
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
		},2000);   
	}		
});
</script>