<?php include 'inc/header.php'; ?>
<style>
	.clear {clear:both;}
	.bg_branco {padding:50px 10%;}
	.content_1 {margin:0 auto;width:750px;max-width:100%;}
	.content_1 .left {float:left;margin-right:5%;width:65%;}
	.content_1 .right {float:left;width:30%;}
	.content_1 .right img {width:100%;}
	.content_2 img {width:31%;margin:40px 1% 10px;}
	.content_3 img {width:900px;margin:0 auto;max-width:100%;display:block;}
	.content_4 {margin:0 auto;width:950px;max-width:100%;}
	.content_4 .left {float:left;margin-right:5%;width:55%;}
	.content_4 .right {float:left;width:40%;}
	.content_4 .right img {width:100%;}
	.content_5 {margin:0 auto;width:950px;max-width:100%;}
	.content_5 .left {float:left;margin-right:5%;width:45%;}
	.content_5 .right {float:left;width:50%;}
	.content_5 .right img {width:100%;}
	.content_5 ul {width:100%;margin-top:10px;}
	.content_5 ul li {width:calc(100% - 20px);padding:5px 10px;}
	.content_5 ul li:nth-child(odd) {background:#ddd;}
	.content_6 img {width:900px;margin:0 auto;max-width:100%;display:block;}
	.content_6 p {width:900px;margin:0 auto 30px;max-width:100%;display:block;}
	body.responsivo .banner {background-size:100%;padding-bottom:35%;}
	body.responsivo .left {width:100%!important;margin:0 0 30px!important;}
	body.responsivo .right {width:100%!important;margin:0!important;}
	body.responsivo .content_2 img {width:100%;margin:10px auto 0;}
	body.responsivo .content_2 p {margin-bottom:20px;}
	body.responsivo .titulo h1 {max-width:90%;}
	body.responsivo .content_1 .right img {width:50%;margin:0 auto;display:block;}
</style>

<div class="banner" style="background-image:url(https://upload.madnezz.com.br/536dc9094fe67085d48782191c37aed5)"></div>

<div id="midia" class="conteudo">    
    <!--<div class="bg_cinza"> 
		<div class="titulo">
            <h1>Office Shopping</h1>
        </div> 
            
        <div class="content_1">
            <div class="left">
                <p class="taj"><?php echo $kit_01?></p>
            </div>
            
            <div class="right">
                <img src="https://upload.madnezz.com.br/5c5f3bee85997a03f43d911e2dbe8d54">
            </div>
            <div class="clear"></div>
        </div>
    </div> -->
    <div class="bg_cinza">
    	<div class="titulo">
            <h1>Perfil do Shopping</h1>
        </div> 
            
        <div class="content_5">
            <div class="left">
            	<h4>Ficha Ténica</h4>
                <ul><?php echo $kit_04?></ul><br><br>
                
                <h4>Perfil de Público</h4>
                <ul><?php echo $kit_05?></ul>
            </div>
            
            <div class="right">
                <img src="https://upload.madnezz.com.br/ccd1e2872b308fd5c0d272c60ed49951">
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="bg_branco">
    	<div class="titulo">
            <h1>Vantagens de Anunciar em Shopping Center</h1>
        </div> 
        
    	<div class="content_2">
        	<p class="tac"><?php echo $kit_02?></p>
            
            <img src="https://upload.madnezz.com.br/1ac0819022bf5297010a8ad332dd27f9">
            <img src="https://upload.madnezz.com.br/70c65adebae3af0bd815b0f9ded9a5e5">
            <img src="https://upload.madnezz.com.br/2b34636d2e73990d387040bab8f6c876">
        </div>
    </div>
    <div class="bg_cinza"> 
		<div class="titulo">
            <h1><?php echo $shopping_nome?> - <?php echo $shopping_cidade?>/<?php echo $shopping_estado?></h1>
            <p class="tac">Público Médio Mensal: 450.000 | Perfil do Público: Classes A/B</p>
        </div> 
            
        <div class="content_3">
	        <img src="https://upload.madnezz.com.br/e9c1cc006762e2ef521246a4012250be">
        </div>
    </div> 
    
    <div class="bg_branco">
    	<div class="titulo">
            <h1>Perfil do Shopping</h1>
        </div> 
            
        <div class="content_4">
            <div class="left">
                <p class="taj"><?php echo $kit_03?></p>
            </div>
            
            <div class="right">
                <img src="https://upload.madnezz.com.br/171590426d16ddb8b23cfaa5c2151aee">
            </div>
            <div class="clear"></div>
        </div>
    </div>    
    <div class="bg_cinza"> 
		<div class="titulo">
            <h1>Área de Influência</h1>            
        </div> 
            
        <div class="content_6">
        	<p class="tac"><?php echo $kit_06?></p>
	        <img src="https://upload.madnezz.com.br/d9a22ec8903af3fe77c235c2166b36f5">
        </div>
    </div> 
</div>

<?php include 'inc/footer.php'; ?>