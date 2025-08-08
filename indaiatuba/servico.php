<?php include "inc/header.php"?>

<style>
	body.responsivo .banner {background-position:right!important;}
</style>

<?php 
$achados="<h2>Achados e Perdidos</h2><br>Caso tenha esquecido ou perdido algo, dirija-se ao departamento da segurança, onde todos os objetos encontrados no shopping por clientes, funcionários ou lojistas são levados, e forneça todos os detalhes para que possamos verificar se foi encontrado.<br>Os objetos são armazenados pela Central de Segurança e permanecem disponíveis para retirada durante o horário de funcionamento do shopping.<br>Após determinado período, conforme tipicidade, os objetos seguem para doação.";
$agencia="<h2>Banco 24h</h2><br>O caixa Eletrônico 24h dá acesso aos principais bancos do país onde saques e outros serviços grátis estão disponíveis. Cada banco oferece um pacote específico para seus clientes.";
$bike="<h2>Bicicletário</h2><br>Contamos com um bicicletário dentro do estacionamento do Shopping com 28 vagas.";
$cadeiras="<h2>Cadeiras de Rodas</h2><br>As cadeiras de rodas podem ser encontradas na entrada principal do Shopping. Para utilização é necessário solicitar a um segurança com um documento com foto em mãos, devendo ser devolvida ao final do passeio.";
$caixa="<h2>Caixa Eletrônico 24h</h2><br>O caixa Eletrônico 24h dá acesso aos principais bancos do país onde saques e outros serviços grátis estão disponíveis. Cada banco oferece um pacote específico para seus clientes.";
$casa="<h2>Casa de Câmbio - Renova</h2><br>A Renova Câmbio, sempre com o foco na entrega de soluções em câmbio mais completas, inovadoras e que possam trazer mais conveniência para seu dia a dia.<br>Confira as nossas soluções: compra e venda de moedas estrangeiras, venda e recarga de cartões pré-pagos de viagem, remessas e pagamentos internacionais. Horário de funcionamento: Segunda a Sexta, das 10h00 às 20h00 | Sábados, das 10h00 às 18h00.";
$cvc="<h2>CVC</h2><br>A CVC Viagens possui parcerias com as principais redes de serviços turísticos, que proporcionam excelentes preços de Passagens aéreas, hotéis, Pacotes de viagens e Cruzeiros e ótimas opções de pagamento. Escolha o destino dos seus sonhos e reúna a família ou amigos.";
$estacionamento="<h2>Estacionamento</h2><br>O Shopping Jaraguá Indaiatuba conta com um amplo estacionamento que oferece 260 vagas. O valor é:<br>R$8,00 as primeiras 3 horas;<br>R$2,00 cada hora adicional;<br>Período de tolerância: 10 minutos.";
$fabrica="<h2>Fábrica da Imaginação</h2><br>Enquanto os adultos passeiam pelo Shopping, os pequenos podem contar com muita diversão e aprendizagem com brinquedos pedagógicos e recreativos da Fábrica da Imaginação. Um espaço voltado à construção da imaginação, colocando em prática a criatividade, a fantasia e a alegria de ser criança.";
$fraldario="<h2>Espaço Família</h2><br>O Shopping Jaraguá Indaiatuba conta com um fraldário equipado com microondas, banheiro para crianças, poltrona de amamentação e trocadores.";
$newcar="<h2>New Car Clean</h2><br>Enquanto você passeia pelo shopping, a New Car Clean deixa o seu carro impecável. E os preços estão imbatíveis:<br>Ducha com Jet Cera: R$ 25,00<br>Lavagem completa: R$ 35,00";
$sem="<h2>Sem Parar</h2><br>Acesso ao estacionamento para veículos que possuem o sistema.";
$taxi="<h2>Táxi</h2><br>Para maior comodidade de nossos clientes, contamos com um ponto de taxi localizado no estacionamento do Shopping, formado por taxistas profissionais e redenunciados.";
$pet="<h2>Pet Friendly</h2><br>O seu melhor aumigo é bem-vindo no Shopping Jaraguá Indaiatuba! Confira abaixo as regras de circulação do pet:<br><br>• Permitida circulação de cães/gatos de até 40 cm com uso obrigatório de coleira ou colo;<br>• Não é permitida a circulação e permanência de cães/gatos nas áreas de alimentação (praça de alimentação e restaurantes), cinema, lazer, banheiros e fraldário, exceto para cães guias devidamente identificados.<br>• Cães das raças Pitbull, Mastim Napolitano, Rottweiller, Doberman, American Stafforshire Terrier são obrigados a usar guia de curta condução e focinheira.<br>• Está a critério de cada loja permitir ou não a entrada de cães/gatos no seu interior. As lojas que permitem estão sinalizadas com o Selo Pet. <br>• A limpeza de eventual sujeira deixada pelo pet durante a permanência no Shopping é de responsabilidade do dono.<br>• Ao usar a escada, escada rolante ou elevadores, é obrigatório a condução do animal no colo.";
?>

<style>
	.box-servicos {width:21%;height:300px;background-color:#eee;float:left;padding:2%;text-align:center;position:relative;transition:0.5s;cursor:pointer;}
	.box-servicos:hover {opacity:0.5;}
	.box-content {position:absolute;top:50%;margin-top:-90px;width:84%;text-align:center;}
	.box-servicos img {width:100px;}
	.box-servicos:nth-child(2) {background-color:#fff}
	.box-servicos:nth-child(4) {background-color:#fff}
	.box-servicos:nth-child(5) {background-color:#fff}
	.box-servicos:nth-child(7) {background-color:#fff}
	.box-servicos:nth-child(10) {background-color:#fff}
	.box-servicos:nth-child(12) {background-color:#fff}
	
	@media screen and (max-width: 1400px){
		.box-servicos {height:250px;}
		.box-servicos img {width:70px;}
		.box-servicos h2 {font-size:18px;}
	}
	
	@media screen and (max-width: 995px){
		.box-servicos {width:46%;}
		.box-content {width:92%;}
		.box-servicos:nth-child(1) {background-color:#eee;}
		.box-servicos:nth-child(2) {background-color:#fff;}
		.box-servicos:nth-child(3) {background-color:#fff;}
		.box-servicos:nth-child(4) {background-color:#eee;}
		.box-servicos:nth-child(5) {background-color:#eee;}
		.box-servicos:nth-child(6) {background-color:#fff;}
		.box-servicos:nth-child(7) {background-color:#fff;}
		.box-servicos:nth-child(8) {background-color:#eee;}
		.box-servicos:nth-child(9) {background-color:#eee;}
		.box-servicos:nth-child(10) {background-color:#fff;}
		.box-servicos:nth-child(11) {background-color:#fff;}
		.box-servicos:nth-child(12) {background-color:#eee;}
	}
	
	/*Modal Serviços*/
	.box-achados, .box-agencia, .box-bike, .box-cadeiras, .box-caixa, .box-casa, .box-cvc, .box-estacionamento, .box-fabrica, .box-pet, .box-fraldario, .box-newcar, .box-sem, .box-taxi {width: 100%;height: 100%;background-color: rgba(0, 0, 0, 0.61);position: fixed;z-index: 99999999999999999999;display:none;top:0;}
	img.objeto2 {width: 61%;position: absolute;margin: 40px auto;left: 0;margin-left: 20%;margin-top: 10%;background-color:#fff;display: none;}
	.responsivo img.objeto2 {width: 100%;position: absolute;margin: 40px auto;left: 0;/* margin-left: 20%; */margin-top: 0;display: none;}
	.texto-servico{margin-left:auto;margin-right:auto;width:40%;height:auto;padding:50px;background-color:#fff;margin-top:10%;font-size:14px;line-height:18px;font-family:'Open Sans', sans-serif;}
	.texto-servico h2 {margin-top:0;}
	body.responsivo .texto-servico{max-height:70%;overflow-y:auto;} 
	body.responsivo li.servicos {margin-left:10px;}
	
</style>

<div class="box-achados"><div class="texto-servico"><?php echo $achados?></div></div>
<div class="box-agencia"><div class="texto-servico"><?php echo $agencia?></div></div>
<div class="box-bike"><div class="texto-servico"><?php echo $bike?></div></div>
<div class="box-cadeiras"><div class="texto-servico"><?php echo $cadeiras?></div></div>
<div class="box-caixa"><div class="texto-servico"><?php echo $caixa?></div></div>
<div class="box-casa"><div class="texto-servico"><?php echo $casa?></div></div>
<div class="box-cvc"><div class="texto-servico"><?php echo $cvc?></div></div>
<div class="box-estacionamento"><div class="texto-servico"><?php echo $estacionamento?></div></div>
<div class="box-fabrica"><div class="texto-servico"><?php echo $fabrica?></div></div>
<div class="box-fraldario"><div class="texto-servico"><?php echo $fraldario?></div></div>
<div class="box-newcar"><div class="texto-servico"><?php echo $newcar?></div></div>
<div class="box-pet"><div class="texto-servico"><?php echo $pet?></div></div>
<div class="box-sem"><div class="texto-servico"><?php echo $sem?></div></div>
<div class="box-taxi"><div class="texto-servico"><?php echo $taxi?></div></div>

<!-- <div class="banner" style="background-image:url(https://upload.madnezz.com.br/04dccc2b3da09110420dcdd189ab429a)"></div> -->

<div id="servico" class="conteudo bg_branco">	
   

		<div class="box-servicos achados">
        	<div class="box-content">
                <img src="https://upload.madnezz.com.br/69a4acdf4a62270b3fd502b622bfac29" class="servicos-icon">
                <h2>Achados e Perdidos</h2>
            </div>
        </div>
        
        <div class="box-servicos agencia">
        	<div class="box-content">
                <img src="https://upload.madnezz.com.br/7c9e4569299b5e9df20a34c8d84c3676" class="servicos-icon">
                <h2>Banco 24h</h2>
            </div>
        </div>
         <div class="box-servicos bike">
            <div class="box-content">
                <img src="https://upload.madnezz.com.br/23234e3cc5e00ceaba795a06d6cef77e" class="servicos-icon">
                <h2>Bicicletário</h2>
            </div>
        </div>
        <div class="box-servicos cadeiras">
        	<div class="box-content">
                <img src="https://upload.madnezz.com.br/dcddbe8ff7a13982c7947554467bc5d2" class="servicos-icon">
                <h2>Cadeiras de Rodas</h2>
            </div>
        </div>
        
        <div class="box-servicos estacionamento">
        	<div class="box-content">
                <img src="https://upload.madnezz.com.br/0a2dcdea0db1067ba844b62bbcb6b38a" class="servicos-icon">
                <h2>Estacionamento</h2>
          	</div>
        </div>

        <div class="box-servicos fraldario">
        	<div class="box-content">
                <img src="https://upload.madnezz.com.br/4ec20cd7a6640fce11f70b338557a7f3" class="servicos-icon">
                <h2>Fraldário</h2>
           	</div>
        </div>
        
        <div class="box-servicos pet">
        	<div class="box-content">
                <img src="https://upload.madnezz.com.br/5c8d948e13f84527547cac0d8d55ad6b" class="servicos-icon">
                <h2>Pet Friendly</h2>
          	</div>
        </div>
        
        <div class="box-servicos sem">
        	<div class="box-content">
                <img src="https://upload.madnezz.com.br/efa5c0b8bfbd709ffe5d8a6ce5aa4260" class="servicos-icon">
        		<h2>Sem Parar</h2>
          	</div>
        </div>
        

		<div style="clear:both;padding-top:5%;"></div>
    
</div> 


		<script type="text/javascript" src="js/servicos.js?v=1.1"></script>
<?php include "inc/footer.php"?>