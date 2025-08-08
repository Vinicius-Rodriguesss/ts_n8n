<?php
include 'inc/header.php';
?>

<div class="banner" style="background-image:url(https://upload.madnezz.com.br/e1ae4b37f6988414f2e43adba9837d44)"></div>

<div id="acoes" class="conteudo">
	<div class="bg_cinza">
    	<ul class="novidade_lista"></ul>
	</div>  
</div>

<script type="text/javascript" src="js/acoes.js"></script>

<script type="text/javascript">
		
	$(function(){
		if ($(window).width() < 1000) {
			$('.ajusta-mobile .left').insertAfter('.ajusta-mobile .right');
		}
	});	

</script>

<?php
include 'inc/footer.php';
?>