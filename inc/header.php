<?php
include 'text.php';
include 'config.php';

if (strpos($_SERVER['SERVER_NAME'], 'local') === false) {
    if ($_SERVER['SERVER_PORT'] == 80) {
        header("Location: https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
        exit();
    }
}

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
		<link rel="shortcut icon" href="img/favicon.png" />  

		<link rel="stylesheet" href="css/default.css?v=5.9" type="text/css" media="all" />
		<link rel="stylesheet" href="css/banner.css?v=2" type="text/css" media="all" />
		<link rel="stylesheet" href="css/animacao.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/lightbox.css?v=1.2" type="text/css" media="screen" />
		<link rel="stylesheet" href="font/din/din.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="font/news/news.css" type="text/css" media="screen" />
		<link href='//fonts.googleapis.com/css?family=Open+Sans:800,300italic,400,300,600' rel='stylesheet' type='text/css'>
		
		<script type="text/javascript" src="js/jquery.js"></script> 
		<script>
			var apis = <?php echo  json_encode($apis) ?>;
		</script>
		<script type="text/javascript">
			var pagina='<?php echo $pagina?>';
			var shopping_id=<?php echo $shopping_id?>; 
			var shopping_token="<?php echo $shopping_token?>";
			var shopping_token_1="<?php echo $shopping_token_1?>";
			var shopping_token_2="<?php echo $shopping_token_2?>";
			var shopping_token_3="<?php echo $shopping_token_3?>";
			var shopping_token_4="<?php echo $shopping_token_4?>";
			var shopping_coordenada=[<?php echo $shopping_coordenada?>];
			var novidade_id='<?php echo req("novidade_id")?>';
			var busca='<?php echo req("busca")?>';
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
		<script type="text/javascript" src="js/default.js?v=7.7"></script>
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js" integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/banner.js?v=2.1"></script>  
		<script type="text/javascript" src="js/lightbox.js"></script>
		<script type="text/javascript" src="js/animacao.js"></script>
		<script type="text/javascript" src="js/newsletter.js?v=1.1"></script>
        <script type="text/javascript" src="js/servicos.js"></script>
        <script type="text/javascript" src="js/sal.form.min.js"></script>
        
        
	</head>
	<body pagina="<?php echo $pagina?>"><!--FOOTER CLOSE--> 
	<script>
		var view_popup;
		if (pagina == 'index' ||  window.location.pathname == '/') {
			view_popup = 0;
		};
	</script>
	<script type="text/javascript" src="js/sal.popup.js"></script>
	<script type="text/javascript">setCookie('viewed',0,0.01); viewed=view_popup; startPopup({"token":"EONQ7rEC11cvI22CkZ9Brjdo2fh1U0y8"});</script>
	<div class="geral">
		
	<div class="header">
    		
            <!--MENU MOBILE-->
    		<div class="box_menu">
                        <div class="fechar" onClick="fecharMenu()"><img src="img/fechar.png"></div>
                        <img src="img/logo.png">
                        <ul>
                            <li id="solpanamby"><a href="#">Grupo Solpanamby</a>
                            	<ul class="submenu">
                                	<li><a href="institucional.php">Institucional</a></li>
                                    <li><a href="visao.php">Visão, Missão e Valores</a></li>
                                    <li><a href="linha-do-tempo.php">Linha do Tempo</a></li>
                                    <!--<li><a href="codigo.php">Código de Conduta e Ética</a></li>-->
                                </ul>
                            </li>
                            <li id="shoppings"><a href="#">Shoppings</a>
                            	<ul class="submenu">
                                	<li><a href="araraquara.php">Araraquara</a></li>
                                    <li><a href="cenesp.php">Cenesp</a></li>
                                    <!-- <li><a href="conceicao.php">Conceição</a></li> -->
                                    <li><a href="indaiatuba.php">Indaiatuba</a></li>
                                </ul>
                            </li>                            
                            <!--<li><a href="#">Cultura</a></li>-->
                            <li><a href="novidade.php">Destaques</a></li>
                            <li><a href="gruposolpanamby.php">Seja um Lojista</a></li>
                            <!--<li id="contato"><a href="#">Contato</a>
                            	<ul class="submenu">
                                	<li><a href="contato-grupo.php">Grupo</a></li>
                                    <li><a href="contato-empresas.php">Empresas</a></li>
                                </ul>
                            </li>-->
                    	</ul>		
                        
                    </div>
                    
                    <script>
                        function abrir(){
                            $('.box_menu').animate({'left':'0'},200);
                            $('.fechar').fadeIn(200);
                        }
                        function fecharMenu(){
                            $('.box_menu').animate({'left':'100%'},200);
                            $('.fechar').fadeOut(200);
                        }
                    </script>

			<div class="container_menu">
           	 	<a href="index.php"><img src="img/logo.png" class="logo1"></a>
				<div class="default tac">					
                    <div class="menu-small"  value="" estado="">                    	                    
		                <ul class="solpanamby" style="display:none;">
                        	<li><a href="institucional.php">Institucional</a></li>  
		                    <li><a href="visao.php">Visão, Missão e Valores</a></li>
		                    <li class="last"><a href="linha-do-tempo.php">Linha do Tempo</a></li>
                            <!--<li class="last"><a href="codigo.php">Código de Conduta e Ética</a></li>-->
		                </ul>  
                        <ul class="shoppings" style="display:none;">
                        	<li><a href="araraquara.php">Araraquara</a></li>  
		                    <li><a href="cenesp.php">Cenesp</a></li>
		                    <!-- <li><a href="conceicao.php">Conceição</a></li> -->
                            <li class="last"><a href="indaiatuba.php">Indaiatuba</a></li>
		                </ul> 
                        <ul class="contatos" style="display:none;">
                        	<li><a href="contato-grupo.php">Grupo</a></li>  
		                    <li><a href="contato-empresas.php">Empresas</a></li>
		                </ul> 
                                               
                        <form action="busca.php" method="get">
                            <input type="text" name="busca" id="busca" value="<?php echo req("busca")?>">
                            <div class="bt_busca" value="" onClick="busca()">
                    	</form>
					</div>
					<div class="menu"  value="" estado="">
		                <ul>
                        	<li><a href="#" onClick="solpanamby()">Grupo Solpanamby</a></li>  
		                    <li><a href="#" onClick="shoppings()">Shoppings</a></li>
							<!--<li><a href="#">Cultura</a></li>  -->
		                    <li><a href="novidade.php">Destaques</a></li>
                            <li><a href="gruposolpanamby.php">Seja um Lojista</a></li>
		                    <!--<li class="last"><a href="#" onClick="contatos()">Contato</a></li>-->
		                </ul> 
					</div>
				</div>
                
                <div class="menu_mobile" onClick="abrir()">
                        <img src="img/menu.png">			
                    </div>
                    
                    
                
                <div style="clear:both;"></div>
			</div>
		</div>	
        
        <script>
			function busca(){
				$('#busca').animate({'opacity':'1'},300);	
				$('#busca').focus();
				$('ul.solpanamby, ul.shoppings, ul.contatos').animate({'right':'35%'},300);
			}
			
			function solpanamby(){
				$('.shoppings').fadeOut(100);
				$('.contatos').fadeOut(100);
				$('.solpanamby').delay(100).fadeToggle(200);
			}
			
			function shoppings(){
				$('.solpanamby').fadeOut(100);
				$('.contatos').fadeOut(100);
				$('.shoppings').delay(100).fadeToggle(200);
			}
			
			function contatos(){
				$('.solpanamby').fadeOut(100);
				$('.shoppings').fadeOut(100);
				$('.contatos').delay(100).fadeToggle(200);
			}
			
		</script>
        
        
        <script>
			$('li#solpanamby').click(function(){
				$('li#solpanamby .submenu').slideToggle();
			});
			
			$('li#shoppings').click(function(){
				$('li#shoppings .submenu').slideToggle();
			});
			
			$('li#contato').click(function(){
				$('li#contato .submenu').slideToggle();
			});
			
		
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
