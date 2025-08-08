<?php include 'inc/header.php'; ?>
  <style type="text/css"> 
  		.map:after {pointer-events: none;  }
    	.map { width: 100%; overflow: initial; }
    	.map #map { width: 100%; height: 100%; position: absolute; left: 0; top: 0; }
    	.modos { background-color: #33626c; display: table; margin: 0 auto; padding: 15px 30px; text-align: center; }
    	.modos>* {display: inline-block; vertical-align: middle; margin-right: 30px; border-right: 1px solid #fff; padding-right: 30px; height: 32px; width: auto; opacity: 0.5;}
		.modos>img:nth-last-child(1) { border: none !important; margin-right: 0px; padding-right: 10px;}
		.modos>img:hover,
		.modos>img.active { opacity: 1; border-right: 1px solid #ffffff80; cursor: pointer; }
    </style>
<div class="banner" style="background-image:url(https://upload.madnezz.com.br/89943eb318021f1aa4ff6d5229710136); background-size:100%;"></div>
<div id="localizacao" class="conteudo  secundaria">
	<div class="mapa">
    	<div class="bg_cinza">        
        	<!--<p class="center pb50">Digite seu endereço no campo abaixo para traçarmos uma rota quer te ajude a chegar em nosso shopping</p>-->
            
        	<div class="titulo">
				<h1>Venha nos visitar</h1>
			</div>
			<!--<div class="modos"> 
                <img src="https://upload.madnezz.com.br/655aadfb413cad0e860fc0cf4051d40e" class="active" modo="DRIVING">
                <img src="https://upload.madnezz.com.br/cd998b9093d3324936d064ac14f4f876" modo="TRANSIT">
                <img src="https://upload.madnezz.com.br/1c141d8485cce1cf391503dd90bd76a9" modo="WALKING">
            </div>
            <table>
            	<tr>
                	<td>
						<input type="text" class="localizacao_origem" placeholder="Digite seu endereço de localização" /> 
            			<button class="bt_mapa"></button>
                    </td>
                </tr>
            </table>-->   
		</div>
    </div>
    
	<div class="map">
		<iframe class="map" frameborder="0" style="border:0;height:70vh;display:block;padding-bottom:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.9363472108557!2d-48.20369018443798!3d-21.78272440420404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b8f18366fa9e4b%3A0x41d070133adcfbb4!2sShopping%20Jaragu%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1659012361707!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>


<?php include 'inc/footer.php'; ?>