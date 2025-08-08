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

<!DOCTYPE html>
<html class="no-js" lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php echo $shopping_nome?></title>
    <meta name="author" content="<?php echo $shopping_author?>" />
    <meta name="description" content="<?php echo $shopping_description?>" />
    <meta name="keywords" content="<?php echo $shopping_keywords?>" />

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="css/font-icons.min.css">
    <link rel="stylesheet" type="text/css" href="css/theme-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="slider/dist/css/swiper.min.css" />
    <link rel="stylesheet" type="text/css" href="css/default.css?v=1.6" />

    <script>
			var apis = <?php echo  json_encode($apis) ?>;
	</script>
    <script type="text/javascript">
        var pagina='<?php echo $pagina?>';
        var shopping_id='<?php echo $shopping_id?>'; 
        var shopping_nome="<?php echo $shopping_nome?>";
        var shopping_token="<?php echo $shopping_token?>";
        var shopping_coordenada=['<?php echo $shopping_coordenada?>'];
        var alerta= "<?php if( isset( $_REQUEST['alerta'] ) ) { echo $_REQUEST['alerta'];  } ?>";

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

    <!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>       
    <script src="js/mask.js?v=1.1"></script>
    <script src="js/functions.js?v=1.8"></script>
    <script src="slider/dist/js/swiper.min.js"></script>
</head>

<body data-mobile-nav-style="classic" pagina="<?php echo $pagina?>">
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <main>
        <header>
            <nav class="navbar navbar-expand-lg top-space navbar-light bg-white header-light navbar-boxed fixed-top header-reverse-scroll mobile-top-space" style="top: 0px;">
                <div class="container nav-header-container">
                    <div class="col-lg-auto mr-auto pl-lg-0">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/logo.png" data-at2x="images/logo.png" class="default-logo" alt="" width="0" height="0">
                            <img src="images/logo.png" data-at2x="images/logo.png" class="alt-logo" alt="" width="0" height="0">
                            <img src="images/logo.png" data-at2x="images/logo.png" class="mobile-logo" alt="" width="150" height="34">
                        </a>
                    </div>
                    <!--<div class="col-auto col-lg-9 menu-order px-lg-0">
                        <a href="#"><i class="fab fa-instagram"></i></a>    
                        <a href="#"><i class="fab fa-facebook-f"></i></a>

                        <button class="navbar-toggler float-right ml-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class=" collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav alt-font menu">
                                <li class="nav-item"><a href="index.php" class="nav-link">Início</a></li>
                            </ul>
                        </div>
                    </div>-->
                </div>
            </nav>
        </header>