<?php
include 'inc/header.php';
?>

<style>
	body.responsivo .banner {background-position:right!important;}
</style>

<!-- <div class="banner" style="background-image:url(https://upload.madnezz.com.br/68386a958af1d61379ef9e787cb90f24)"></div> -->

<div id="loja" class="conteudo">	
    <div class="bg_cinza">
    	<div class="col">
        	<!--<p class="center pb50">Conheça nosso mix de lojas qualificadas, nossa completa e diversificada Praça de Alimentação e nosso Cinema com 05 salas modernas, sendo duas com sistema 3D.</p>-->
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
                    <li id="a">A</li>
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

<?php
include 'inc/footer.php';
?>