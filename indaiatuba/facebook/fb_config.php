<?php
// Verifica o protocolo (HTTP ou HTTPS)
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https' : 'http';
$domain = $_SERVER['SERVER_NAME'];

// Monta a URL do Facebook
$facebook_url = $protocol . "://" . $domain . "/indaiatuba/facebook/index.php";
$facebook_id = "544828685885334";
?>

<script type="text/javascript">
  var monta_sharer = "";
  window.fbAsyncInit = function(){
    FB.init({
      appId      : '<?php echo $facebook_id; ?>',
      xfbml      : true,
      version    : 'v2.12'
    });

    monta_sharer = function(share_id, share_fb, img){
      return '<?php echo $facebook_url; ?>?v=1&img=' + img + '&app_id=<?php echo $facebook_id; ?>&post_id=' + share_id + '&' + share_fb;
    }; 
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) { return; }
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
