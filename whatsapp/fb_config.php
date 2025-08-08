<?php
  // Definir protocolo (http ou https)
  $whatsapp_strProtocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https' : 'http';

  // Obter o domínio do servidor
  $whatsapp_strDomain = $_SERVER['SERVER_NAME'];

  // Construir a URL do WhatsApp
  $whatsapp_url = $whatsapp_strProtocol . "://" . $whatsapp_strDomain . "/araraquara/whatsapp/index.php";
?>
<script type="text/javascript">
  var monta_whatsapp = "";
  monta_whatsapp = function(share_id, share_fb, img){  
    return '<?php echo $whatsapp_url; ?>?v=1&i=' + img + '&post_id=' + share_id + '&' + share_fb;
  };
</script>
