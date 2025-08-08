<?php 
include 'text.php';
include 'config.php';

function req($req_1) {
    if (!empty($req_1)) {
        $req_1 = isset($_REQUEST[$req_1]) ? $_REQUEST[$req_1] : '';
    }
    if (!empty($req_1)) {
        $req_1 = trim($req_1);
    }
    if (!empty($req_1)) {
        $req_1 = str_replace("=", "", $req_1);
    }
    if (!empty($req_1)) {
        $req_1 = htmlspecialchars($req_1, ENT_QUOTES, 'UTF-8');
    }
    return $req_1;
}

$pagina = strtolower(str_replace(".php", "", basename($_SERVER['SCRIPT_NAME']))); 

?>
<!doctype html>
<html class="">
	<head> 
		<meta charset="utf-8">
		<title><?php echo $shopping_nome?></title>
		<meta name="author" content="<?php echo $shopping_author?>" />
		<meta name="description" content="<?php echo $shopping_description?>" />
		<meta name="keywords" content="<?php echo $shopping_keywords?>" />
		<meta name="viewport" content="width=500,user-scalable=no">
		<link rel="shortcut icon" href="https://upload.madnezz.com.br/e1770c14cf954a83786ec9903677ab52" />  

		<link rel="stylesheet" href="css/default.css?v=5.1" type="text/css" media="all" />
		<link rel="stylesheet" href="css/banner.css?v=2" type="text/css" media="all" />
		<link rel="stylesheet" href="css/animacao.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="font/din/din.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="font/news/news.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link href='//fonts.googleapis.com/css?family=Open+Sans:800,300italic,400,300,600' rel='stylesheet' type='text/css'>
		
		<script type="text/javascript" src="js/jquery.js"></script> 
		<script>
			var apis = <?php echo  json_encode($apis) ?>;
		</script>
		<script type="text/javascript">
			var pagina='<?php echo $pagina?>';
			var shopping_id=<?php echo $shopping_id?>; 
			var shopping_token="<?php echo $shopping_token?>";
			var shopping_coordenada=[<?php echo $shopping_coordenada?>];
			var novidade_id='<?php echo req("novidade_id")?>';
			var cinema_id='<?php echo req("cinema_id")?>';
			var busca='<?php echo req("busca")?>';
			var loja_id='<?php echo req("loja_id")?>';
			var _gaq=_gaq||[];
			_gaq.push(['_setAccount','<?php echo $shopping_analytics?>']);
			_gaq.push(['_trackPageview']);
			(function(){
				var ga=document.createElement('script');
				ga.type='text/javascript';
				ga.async=true;
				ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';
				var s=document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga,s);
			})();
			
		</script>

		<script type="text/javascript" src="js/functions.js"></script>
		<script type="text/javascript" src="js/default.js?v=7.5"></script>
		<script type="text/javascript" src="js/medias.js"></script>
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js" integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/banner.js?v=2.3"></script>  
		<script type="text/javascript" src="js/lightbox.js"></script>
		<script type="text/javascript" src="js/animacao.js"></script>
		<script type="text/javascript" src="js/newsletter.js?v=1.1"></script>
        <script type="text/javascript" src="js/servicos.js?v=1.1"></script>

	<!--	<script type="text/javascript" src="js/nicescroll.js"></script> -->
             
            
        
        
        <script>
	
	//var novidadeNome=(this).novidade.novidade_nome;

</script>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $shopping_analytics?>"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', '<?php echo $shopping_analytics?>');
		</script>

	</head>
	<body pagina="<?php echo $pagina?>"><!--FOOTER CLOSE--> 
	<script>
		var view_popup;
		if (pagina == 'index' ||  window.location.pathname == '/') {
			view_popup = 0;
		};
	</script>
	<script type="text/javascript" src="js/popup.js"></script>
	<script type="text/javascript">
		setCookie('viewed',0,0.01);
		viewed=view_popup; startPopup({"token":"V36HkOVTeeZm71r1H8o4iGAL1wEeLfpx"});
		// $(function(){
		// 	$('body').on('click','',function(){

		// 	});
		// });
	</script>
	<style type="text/css">
		.sal_popup_js_element a[href='/'],
		.sal_popup_js_element a[href='#'] {pointer-events: none;}
	</style>
	<div class="geral">
		
	<div class="header">   	
            <div class="redes-sociais">
            	<div class="horario" onClick="abreHorarios()">
                    <div class="aberto green"></div>
                    <div class="horario_funcionamento"></div>
                </div>   
                <div class="sociais">
                    <a href="http://www.facebook.com/shoppingjaragua" target="_new"><img src="https://upload.madnezz.com.br/0924b24d8ec28a67c0a9a0ec59869d3d"></a>
                    <img src="https://upload.madnezz.com.br/fb9f9250421bf3fcc4a217e6befa43b0">
                    <a href="https://www.instagram.com/shoppingjaraguaararaquara/" target="_new"><img src="https://upload.madnezz.com.br/90ddf0a1009797b08c54cd0b55bdb794"></a>
                    <img src="https://upload.madnezz.com.br/fb9f9250421bf3fcc4a217e6befa43b0">
                    <a href="https://www.youtube.com/channel/UCCHz9pFuRk8ztX6dP69FkKQ" target="_new"><img src="https://upload.madnezz.com.br/7b439cf54f149ce321070241f7009cdc"></a>
                </div> 
                <div class="box_horarios">
					<h3 class="green">Horários</h3><br>
    
					<span><b>Lojas</b></span><br>
					<p>Segunda a sabado das 10h às 22h<br>
					Domingo e feriado das 14h às 20h</p><br>

					<span><b>Alimentação</b></span><br>
					<p>Todos os dias das 11h às 22h</p><br>
					
					<!-- <span><b>Clínica de Vacinas</b></span><br>
					<p>Segunda a Sábado das 10h às 18h<br>
					Domingo Fechado</p><br> -->

					<span><b>Cobasi</b></span><br>
					<p>Segunda a sábado das 09h às 21h45<br>
					Domingo e feriado das 09h às 19h45</p><br>

					<span><b>Pão de Açúcar</b></span><br>
					<p>Segunda a sabado das 08h às 22h<br>
					Domingo e feriado das 08h às 21h</p><br>

					<span><b>Semi-novos Unidas</b></span><br>
					<p>Segunda a sexta das 08h às 18h<br>
					Sábado das 08h às 12h<br>
					Domingo: fechado</p><br>

					<span><b>Inova Academia</b></span><br>
                        <p>Segunda a sexta das 05h às 23h59<br>
						Sábado das 08h às 18h<br>
						Domingo e feriado das 09h às 15h</p><br>
						
                </div>
            </div>
			<div class="container_menu">
				<div class="default tac">
					<a href="index.php"><img src="https://upload.madnezz.com.br/602e396fc1775dc288e2d52a4ae350f0" class="logo2"></a>
					<img class="menu_responsivo" src="https://upload.madnezz.com.br/8aa70eabff0b1157b70d93c46e8a2b18" />
                    <div class="menu-small"  value="" estado="">
		                <ul>
		                	<li class="esconde-mobile"><a href="shopping.php">O Shopping</a></li>
		                	<!-- <li class="esconde-mobile"><a href="acoes-sociais.php">Ações Sociais</a></li> -->
                        	<li class="esconde-mobile"><a href="trabalheconosco.php">Trabalhe Conosco</a></li>  
		                    <li class="esconde-mobile"><a href="localizacao.php">Localização</a></li>
		                    <li class="esconde-mobile"><a href="contato.php">Fale Conosco</a></li>
                            <li class="esconde-mobile last"><a href="https://v3.madnezz.com.br/" target="_new">Portal do lojista</a></li>
		                </ul> 
                        <div style="clear:both;"></div>
					</div>
                    <div style="clear:both;"></div>
					<div class="menu"  value="" estado="">
		                <ul>
                        	<!-- <li><a href="vitrine.php">Loja Virtual</a></li> -->
		                    <li><a href="loja.php">Lojas</a></li>
		                    <li><a href="alimentacao.php">Alimentação</a></li>
							<li><a href="delivery.php">Delivery</a></li>
							<!-- <li><a href="drivethru.php">Drive-Thru</a></li> -->
							<li><a href="cinema_moviecom.php">Cinema</a></li>
		                    <li><a href="servico.php">Serviços</a></li>
		                    <li><a href="novidade.php">Novidades</a></li>
							<li class="last"><a href="lgpd.php">Política de Privacidade</a></li>
                            <!--<li class="last"><a href="sustentabilidade.php">Sustentabilidade</a></li>-->
                            <li class="li-mobile"><a href="shopping.php">O Shopping</a></li>  
                            <!-- <li class="li-mobile"><a href="acoes-sociais.php">Ações Sociais</a></li>   -->
                            <li class="li-mobile"><a href="trabalheconosco.php">Trabalhe Conosco</a></li>  
		                    <li class="li-mobile"><a href="localizacao.php">Localização</a></li>
		                    <li class="li-mobile"><a href="contato.php">Fale Conosco</a></li>
                            <li class="li-mobile"><a href="https://v3.madnezz.com.br/" target="_new">Portal do lojista</a></li>
		                </ul> 
                        <div style="clear:both;"></div>
					</div>
				</div>
			</div>
		</div>	
		<?php
			$dia_semana = date("w"); // Pega o dia da semana (0 = Domingo, 1 = Segunda, ..., 6 = Sábado)

			if ($dia_semana == 5) {
				$data_entrada = date("Y-m-d H:i:s"); // Data e hora atuais
			} elseif ($dia_semana == 6) {
				$data_entrada = date("Y-m-d H:i:s", strtotime("-1 day")); // Data de ontem
			} else {
				$data_entrada = date("Y-m-d H:i:s", strtotime("-" . ($dia_semana + 2) . " days")); // Subtrai o número de dias necessários
			}

			$data_saida = date("Y-m-d H:i:s", strtotime("+6 days", strtotime($data_entrada))); // Adiciona 6 dias à data de entrada
		?>	
  


	<script>
		function abreHorarios(){
			$('.box_horarios').slideToggle('fast');
			$('.horario').toggleClass('active');
		}
		
		function diaSemana() {
			var d = new Date();
			var n = d.getDay();
			
			//SÁBADO E DOMINGO
			if (n == 0 || n == 6) {
				$('.aberto').html('SHOPPING');
				//$('.horario_funcionamento').html('Fechado hoje');
				$('.horario_funcionamento').html('Aberto');
			} else if (n >= 1 && n < 6) {
				$('.aberto').html('SHOPPING');
				$('.horario_funcionamento').html('Aberto');
			}
		}
		diaSemana();
	</script> 