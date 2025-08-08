<?php include '../inc/text.php'; ?>

<?php
// Verifica o protocolo (HTTP ou HTTPS)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

// Obtém o domínio (nome do servidor)
$domain = $_SERVER['SERVER_NAME'];

// Obtém o caminho do script (arquivo atual)
$path = $_SERVER['SCRIPT_NAME'];

// Obtém a query string (parâmetros da URL)
$queryString = $_SERVER['QUERY_STRING'];

// Constrói a URL completa
$fullUrl = $protocol . "://" . $domain . $path;

// Se houver query string, adiciona à URL
if (strlen($queryString) > 0) {
    $fullUrl .= "?" . $queryString;
}

?>
<!DOCTYPE html>
<html>
<head> 

    
<meta property="og:image"         content="<?php echo req("img")?>" />
  <meta itemprop="image" content="<?php echo req("img")?>" >
  <title><?php echo req("t1")?></title>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="prefetch" href="<?php echo req("i")?>" /> 
  <meta property="og:type" content="article" />
  <meta name="description" content="<?php echo req("t2")?>" >
  <meta itemprop="description" content="<?php echo req("t2")?>" >
  <meta itemprop="name" content="<?php echo req("t1")?>" >
  <meta property="fb:app_id" content="<?php echo req("app_id")?>">
  <meta property="og:title" content="<?php echo req("t1")?>" >
  <meta property="og:url" content="<?php echo $strFullUrl?>" >
  <meta property="og:description" content="<?php echo req("t2")?>" >
 <meta property="og:image:width" content="1459"/>
  <meta property="og:image:height" content="675"/>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript">
    
    (function(d, s, id){
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement(s); js.id = id;
           js.src = "https://connect.facebook.net/en_US/sdk.js";
           fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
  window.fbAsyncInit = function(){
           FB.init({
            appId      : '<?php echo req("app_id")?>',
            xfbml      : true,
            version    : 'v2.12'
          }); 
 
      };

      setTimeout(function(){
      //  window.location.href = "../novidade.php?post=facebook&novidade_id="+<?php echo req("post_id")?>
    },1000); 
</script>
</head>
<body> 

</body>
</html>
 