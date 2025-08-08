<?php
include 'inc/header.php';
?>
<script type="text/javascript" src="js/novidade_indaiatuba.js?v=1.1"></script>
<!-- <script type="text/javascript" src="js/novidade_conceicao.js?v=1.1"></script> -->
<script type="text/javascript" src="js/novidade_cenesp.js?v=1.1"></script>
<script type="text/javascript" src="js/novidade_araraquara.js?v=1.1"></script>

<div class="banner" style="background-image:url(img/banner_destaque2.jpg)"></div>

<button class="teste" style="display:none;">Teste</button>

<div id="novidade" class="fundo_footer">

	<div class="conteudo">
		<button class="teste" style="display:none;"></button>
        <ul class="novidade_lista"></ul>
        
        <div style="clear:both;"></div>        
        
	</div>
    
    <div class="logo_footer">
	    <img src="img/logo.png">
    </div>    
    
</div>

<script>

	//ORDENAR LISTA
	var $list = $('.novidade_lista');
	$('.teste').data('lastSort', 'asc').click(function() {
		var $items = $list.children(), lastSort=$(this).data('lastSort');
		var direction = lastSort=='asc' ? 'desc' :  'asc';
		$(this).data('lastSort',direction);
		$list.empty().append($items.sort(directionSort[direction]));
	});
	var directionSort = {
		asc: function (a, b) {
			return a.id < b.id ? -1 : 1;
		},
		desc: function (a, b) {
			return a.id > b.id ? -1 : 1;
		}
	}	
				
	$(window).load(function() {
		$('.teste').trigger( "click" );			
	});
	
	

</script>
<?php
include 'inc/footer.php';
?>