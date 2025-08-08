<?php include 'inc/header.php'; ?>

<!-- <div class="banner" style="background-image:url(https://upload.madnezz.com.br/c7a52eeb346d99ef8d6f5680538b40ce)"></div> -->

<div id="alimentacao" class="conteudo">	
    <div class="bg_cinza">
    	<div class="col">
        	<!--<p class="justify pb50">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>-->
        	<div class="titulo">
				<h1>Nova Pesquisa</h1>
			</div>    
    		<div class="faixa"> 
    			<table>
        			<tr>
            			<td>
                			<input type="text" class="filtro_nome" value="<?php echo req("filtro_nome")?>" placeholder="Qual loja você procura?">
                			<button class="bt_busca"></button>
              		  	</td>
               			<td style="width:2%;"></td>
						<td>
                			<select name="filtro_ramo" filtro_ramo="<?php echo req("filtro_ramo")?>" class="filtro_ramo"></select>
                			<button class="bt_loja"></button>
                		</td>
            		</tr>
        		</table>
        		<ul class="alfabeto">
                    <li>A</li>
                    <li>B</li>
                    <li>C</li>
                    <li>D</li>
                    <li>E</li>
                    <li>F</li>
                    <li>G</li>
                    <li>H</li>
                    <li>I</li>
                    <li>J</li>
                    <li>K</li>
                    <li>L</li>
                    <li>M</li>
                    <li>N</li>
                    <li>O</li>
                    <li>P</li>
                    <li>Q</li>
                    <li>R</li>
                    <li>S</li>
                    <li>T</li>
                    <li>U</li>
                    <li>V</li>
                    <li>W</li>
                    <li>X</li>
                    <li>Y</li>
                    <li>Z</li>
					<li class="last">0-9</li>
   				</ul>
  			</div>
		</div>
	</div>
   
	<div class="p80 pr bg_branco"> 		
		<div class="lojas tac">
			<div class="busca_result">
				<p class="loja_qtd"></p>
			</div>
			<ul class="loja_lista"></ul>
            <!--<h2 class="mais_loja">(...)</h2>-->
		</div>		
	</div> 	
</div> 
<?php include 'inc/footer.php'; ?>