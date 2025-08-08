<?php
include 'inc/header.php';
?>

<div class="banner" style="background-image:url(https://upload.madnezz.com.br/4b38456637204477cdf652f4e50f84af)"></div>

<div id="cinema" class="conteudo">
	<div class="bg_cinza">	
		<div class="col">
			<p class="center pb50">
            	Confira a programação de cinema dessa semana!<br>
            	*Programação sujeita a alteração.<br>
				A programação de cinema divulgada neste espaço é de responsabilidade exclusiva da operadora. <br>O Shopping Jaraguá Araraquara não se responsabiliza pela eventual alteração das informações.
            </p>
			<?php if( req("cinema_id")=="" ) { ?>
				<div class="titulo">
					<h1>Nova Pesquisa</h1>
				</div>    
				<div class="center">
					<table>
						<tr>
							<!--<td>
                                <input type="text" name="busca" placeholder="Qual filme você procura?">
                                <button class="bt_busca"></button>
							</td>-->
                            <select class="lista_filmes" name="lista_filmes">
                            	<option value="">Qual filme você procura?</option>  
                                <option></option>                              
                            </select>
                            <button class="bt_drop"></button>                            
						</tr>
					</table>        
				</div>
			<?php } ?>
		</div>
	</div>

	<div class="bg_branco pt10 pb50">
		<?php
			// Verifica se o parâmetro 'cinema_id' está vazio
			if (empty($_REQUEST["cinema_id"])) {

				// Obtém o dia da semana (0 = Domingo, 1 = Segunda, ..., 6 = Sábado)
				$dia_semana = date("w");

				// Calcula a data de entrada com base no dia da semana
				if ($dia_semana == 5) {
					$data_entrada = date("Y-m-d H:i:s"); // Data e hora atuais
				} elseif ($dia_semana == 6) {
					$data_entrada = date("Y-m-d H:i:s", strtotime("-1 day")); // Data de ontem
				} else {
					$data_entrada = date("Y-m-d H:i:s", strtotime("-" . ($dia_semana + 2) . " days")); // Subtrai o número de dias necessários
				}

				// Calcula a data de saída (6 dias após a data de entrada)
				$data_saida = date("Y-m-d H:i:s", strtotime("+6 days", strtotime($data_entrada)));

				// Exibe a programação no formato de dia/mês
				echo '<h2 class="big green2 tac">Programação de ' . str_pad(date("d", strtotime($data_entrada)), 2, "0", STR_PAD_LEFT) . '/' . str_pad(date("m", strtotime($data_entrada)), 2, "0", STR_PAD_LEFT) . ' a ' . str_pad(date("d", strtotime($data_saida)), 2, "0", STR_PAD_LEFT) . '/' . str_pad(date("m", strtotime($data_saida)), 2, "0", STR_PAD_LEFT) . '</h2>';
			}
		?>

		<ul class="cinema_lista tac"></ul>
        <div style="clear:both"></div>
	</div>
</div>

<?php
include 'inc/header.php';
?>