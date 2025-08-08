<?php
if (strpos($_SERVER["SERVER_NAME"], "local") === false) {
    if ($_SERVER["SERVER_PORT"] == 80) {
        header("Location: https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]);
        exit();
    }
}

// Inclui o arquivo "text.php"
include 'text.php';
include 'config.php';

// Função para sanitizar requisições
function req($req_1) {
    if (!empty($req_1)) {
        $req_1 = isset($_REQUEST[$req_1]) ? $_REQUEST[$req_1] : "";
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
		<link rel="shortcut icon" href="https://upload.madnezz.com.br/677aa919d849413c60b98e7cbf900bc2" />

		<link rel="stylesheet" href="css/default.css?v=4.6" type="text/css" media="all" />
		<link rel="stylesheet" href="css/banner.css?v=1.2" type="text/css" media="all" />
		<link rel="stylesheet" href="css/animacao.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="slider/dist/css/swiper.min.css">
		<link rel="stylesheet" href="font/din/din.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="font/news/news.css" type="text/css" media="screen" />
		<link href='//fonts.googleapis.com/css?family=Open+Sans:800,300italic,400,300,600' rel='stylesheet' type='text/css'>  
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">      
		
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

		<script type="text/javascript" src="js/functions.js?v=1.1"></script>
		<script type="text/javascript" src="js/default.js"></script>
		<script type="text/javascript" src="js/medias.js"></script>
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js" integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/banner.js?v=2.1"></script>  
		<script type="text/javascript" src="js/lightbox.js"></script>
		<script type="text/javascript" src="js/animacao.js"></script>
		<script type="text/javascript" src="js/newsletter.js"></script>   

	<!--	<script type="text/javascript" src="js/nicescroll.js"></script> -->
        
        <!-- COMPARTILHAMENTO FACEBOOK -->    
        <?php
        	$teste = "https://upload.madnezz.com.br/a096a114424660930a6344f1eaf05d7e";
        ?>        
            
        <meta property="og:locale" content="pt_BR">
        <meta property="og:title" content="<?php echo $shopping_nome?>">
        <meta property="og:site_nome" content="<?php echo $shopping_nome?>">
        <meta property="og:description" content="Clique aqui e venha conferir as novidades do Shopping">
        <meta property="og:image" content="">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="600">
        
        <script>
	
	//var novidadeNome=(this).novidade.novidade_nome;

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
	<script type="text/javascript">setCookie('viewed',0,0.01); viewed=view_popup; startPopup({"token":"<?php echo $shopping_token?>"});</script>
	<div class="geral">
		
	<div class="header">
    		
			<div class="redes-sociais">
				<div class="horario" onClick="abreHorarios()">
					<div class="aberto green"></div>
					<div class="horario_funcionamento"></div>
				</div>   
				 
				<div class="box_horarios">
					<h3 class="green">Horários</h3><br>                    
		
					<span>Lojas</span>
					<p><a href="loja.php">DE SEGUNDA A SÁBADO, DAS 10H ÀS 22H;<br>AOS DOMINGOS E FERIADOS, DAS 12H ÀS 18H.</a></p><br>
					
					<span>PRAÇA DE ALIMENTAÇÃO</span>
					<p><a href="alimentacao.php">TODOS OS DIAS, DAS 11H ÀS 22H.</a></p><br>

					<!-- <span>FARMA TOTAL</span>
					<p>DE SEGUNDA A SÁBADO, DAS 10H ÀS 22H;<br>
					AOS DOMINGOS E FERIADOS, DAS 11H ÀS 22H.</p><br> -->

					<span>TRAVELEX CONFIDENCE CÂMBIO</span>
					<p>DE SEGUNDA A SEXTA: DAS 10H ÀS 20H;<br>AOS SÁBADOS: DAS 10H ÀS 16H.</p><br>
					
				</div>

			</div>
			<div class="container_menu">
				<div class="default tac">
					<a href="index.php"><img src="https://upload.madnezz.com.br/f9f2f04ab1b5d807b088ca95a3e2ca5b" class="logo2"></a>
					<img class="menu_responsivo" src="https://upload.madnezz.com.br/9a0cbbfb4efeb639373ce7c22b3f48f5" />
                    <div class="menu-small"  value="" estado="">
		                <ul>
							<li class="esconde-mobile"><a href="shopping.php">O Shopping</a></li>  
							<li class="esconde-mobile"><a href="trabalheconosco.php">Trabalhe Conosco</a></li> 
		                    <li class="esconde-mobile"><a href="localizacao.php">Localização</a></li>
		                    <li class="esconde-mobile"><a href="contato.php">Fale Conosco</a></li>
							<li class="esconde-mobile">
									<a href="https://v3.madnezz.com.br/" target="_new">Área do lojista</a>
								<ul> 
									<li><a href="https://v3.madnezz.com.br/" target="_new">Portal</a></li>
									<!-- <li><a href="https://beta.nappsolutions.com/" target="_new">Vendas</a></li>							 -->
									<li><a href="https://vsweb.solpanamby.com.br/" target="_new">Vendas</a></li>							
								</ul>
							</li>
							<li class="esconde-mobile last" style="margin-right:20px!important;"><a href="//www.facebook.com/ShoppingJaraguaIndaiatuba" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li class="esconde-mobile last"><a href="//www.instagram.com/shopjaraguaindaiatuba/" target="_blank"><i class="fab fa-instagram"></i></a></li>
		                </ul> 
					</div>
					<div class="menu"  value="" estado="">
		                <ul>
                        	<!-- <li><a href="vitrine.php">Loja Virtual</a></li> -->
		                    <!--<li><a href="loja.php">Lojas</a></li>-->
							<li><a href="delivery.php">Delivery</a></li>
							<!-- <li><a href="drivethru.php">Drive Thru</a></li> -->
		                    <li><a href="alimentacao.php">Alimentação</a></li>
							<li><a href="loja.php">Lojas</a></li>
							<li><a href="cinema.php">Cinema</a></li>  
		                    <li><a href="servico.php">Serviços</a></li>
							<li class="last"><a href="novidade.php">Novidades</a></li>
							<li class="li-mobile"><a href="shopping.php">O Shopping</a></li>  
                            <li class="li-mobile"><a href="trabalheconosco.php">Trabalhe Conosco</a></li>  
		                    <li class="li-mobile"><a href="localizacao.php">Localização</a></li>
		                    <li class="li-mobile"><a href="contato.php">Fale Conosco</a></li>
							<li class="li-mobile"><a href="https://v3.madnezz.com.br/" target="_new">Portal</a></li>
							<!-- <li class="li-mobile"><a href="https://beta.nappsolutions.com/" target="_new">Vendas</a></li> -->
							<li class="li-mobile"><a href="https://vsweb.solpanamby.com.br/" target="_new">Vendas</a></li>
							<li class="li-mobile">
								<a href="//www.facebook.com/ShoppingJaraguaIndaiatuba" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="//www.instagram.com/shopjaraguaindaiatuba/" target="_blank"><i class="fab fa-instagram"></i></a>
							</li>
		                </ul> 
					</div>
				</div>
			</div>
		</div>	
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


