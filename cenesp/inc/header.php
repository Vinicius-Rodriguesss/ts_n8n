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
		<link rel="shortcut icon" href="https://upload.madnezz.com.br/3f1ba241629625a6d7d750c48960f9f9" />

		<link rel="stylesheet" href="css/default.css?v=1.5" type="text/css" media="all" />
		<link rel="stylesheet" href="css/banner.css?v=1.1" type="text/css" media="all" />
		<link rel="stylesheet" href="css/animacao.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="font/din/din.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="font/news/news.css" type="text/css" media="screen" />
		<link href='//fonts.googleapis.com/css?family=Open+Sans:800,300italic,400,300,600' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <style type="text/css"> .font2 { font-family: 'Gudea', sans-serif; font-size: 14px; line-height: 23px; } </style>
		
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
			var s='<?php echo req("s")?>';
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
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js" integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/popup.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
		<script type="text/javascript" src="js/default.js?v=1.8"></script>
		<script type="text/javascript" src="js/medias.js"></script>
		
		<script type="text/javascript" src="js/banner.js?v=1.2"></script>  
		<script type="text/javascript" src="js/lightbox.js"></script>
		<script type="text/javascript" src="js/animacao.js"></script>
		<script type="text/javascript" src="js/newsletter.js"></script>
        <script type="text/javascript" src="js/servicos.js"></script>

	<!--	<script type="text/javascript" src="js/nicescroll.js"></script> -->
        
        <!-- COMPARTILHAMENTO FACEBOOK -->    
        <?php
        	$teste = "https://upload.madnezz.com.br/90dc984158d64acf261728a64bbda026";
        ?>        
            
        <meta property="og:locale" content="pt_BR">
        <meta property="og:title" content="Shopping Jaraguá Cenesp">
        <meta property="og:site_nome" content="Shopping Jaraguá Cenesp">
        <meta property="og:description" content="Clique aqui e venha conferir as novidades do Shopping">
        <meta property="og:image" content="<?php echo $teste?>">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="600">
        
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
	
	<script type="text/javascript">setCookie('viewed',0,0.01); viewed=view_popup; startPopup({"token":"W2FIljWUffun600UBR7TjHBg0xzfM8q6"});</script>
	<div class="geral">
		
	<div class="header">
    		
            <div class="redes-sociais">
            
            <a href="https://www.facebook.com/shoppingjaraguacenesp/" target="_new"><img src="https://upload.madnezz.com.br/7e348329c8087dc312f49c9353cb6bfa"></a>
            <img src="https://upload.madnezz.com.br/b66d5a12251765f48db39d54b92037bb">
            <a href="https://www.instagram.com/jaraguacenesp" target="_new"><img src="https://upload.madnezz.com.br/aaa275c28231b1fa23dc3b5f5e06fdfa"></a>
            <!--<img src="https://upload.madnezz.com.br/b66d5a12251765f48db39d54b92037bb">
            <a href="https://www.youtube.com/channel/UCCHz9pFuRk8ztX6dP69FkKQ" target="_new"><img src="https://upload.madnezz.com.br/c27986940a4e5845d01da3ab17e1cd69"></a>-->
            
            </div>
			<div class="container_menu">
				<div class="default tac">
					<a href="index.php"><img src="https://upload.madnezz.com.br/73ab37884b1f777b56e0f094f03fc3a9" class="logo2"></a>
					<img class="menu_responsivo" src="https://upload.madnezz.com.br/6a0596c1b6142c39a41bc5f48e4550e7" />
                    <div class="menu-small"  value="" estado="">
		                <ul>
                            <li class="esconde-mobile"><a href="trabalheconosco.php">Trabalhe Conosco</a></li>
                            <li class="esconde-mobile"><a href="localizacao.php">Localização</a></li>
		                    <li class="esconde-mobile"><a href="contato.php">Fale Conosco</a></li>
                            <li class="esconde-mobile last">
								<a href="https://sal.madnezz.com.br/" target="_new">Área do lojista</a>
								<ul> 
									<li><a href="https://sal.madnezz.com.br/" target="_new">Portal</a></li>
									<!-- <li><a href="https://beta.nappsolutions.com/" target="_new">Vendas</a></li>							 -->
									<!-- <li><a href="https://vsweb.solpanamby.com.br" target="_new">Vendas</a></li>							 -->
									<li><a href="https://vsweb.solpanamby.com.br/?Accounts&op=asklogin&session_expired=0" target="_blank">Vendas</a></li>							
								</ul>
							</li>
		                </ul> 
					</div>
					<div class="menu"  value="" estado="">
		                <ul>
                        	<li><a href="shopping.php">O Shopping</a></li>  
		                    <li><a href="loja.php">Lojas</a></li>
		                    <li><a href="alimentacao.php">Alimentação</a></li>
		                    <li><a href="servico.php">Serviços</a></li>
		                    <li class="last"><a href="novidade.php">Novidades</a></li>
                            <li class="li-mobile"><a href="trabalheconosco.php">Trabalhe Conosco</a></li>  
                            <li class="li-mobile"><a href="localizacao.php">Localização</a></li>
		                    <li class="li-mobile"><a href="contato.php">Fale Conosco</a></li>
							<li class="li-mobile"><a href="https://sal.madnezz.com.br/" target="_new">Portal do Lojista</a></li>
							<!-- <li class="li-mobile"><a href="https://beta.nappsolutions.com/" target="_new">Vendas Lojista</a></li> -->
							<li class="li-mobile"><a href="https://vsweb.solpanamby.com.br/" target="_new">Vendas Lojista</a></li>
		                </ul> 
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


