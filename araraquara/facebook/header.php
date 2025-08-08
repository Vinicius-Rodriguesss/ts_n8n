<?php include '../inc/text.php';
include '../inc/config.php';
?>
<!DOCTYPE html>
<html>
<head> 

<?php 
// Obtém os parâmetros da requisição
$novidade_id = isset($_REQUEST['novidade_id']) ? $_REQUEST['novidade_id'] : '';
$shopping_nome = "shoppingjaragua.com.br"; // Substitua com o nome correto do shopping

// Define a URL com base na presença ou não do parâmetro 'novidade_id'
if ($novidade_id !== "") {
    $url = $apis['facebook']."?id=" . urlencode($novidade_id) . 
           "&nome=" . urlencode($shopping_nome) . 
           "&app_id=544828685885334" . 
           "&url=http:%2F%2Fwww.shoppingjaragua.com.br%2Fararaquara%2Fnovidade.php%3Fnovidade_id%3Dshoppingjaragua.com.br%2Fararaquara%2Fnovidade.php%3Fnovidade_id%3D" . urlencode($novidade_id);
} else {
    $url = $apis['facebook']."?id=&nome=" . urlencode($shopping_nome) . 
           "&app_id=544828685885334" . 
           "&url=shoppingjaragua.com.br%2Fararaquara";
}

// Inicializa o cURL para enviar a requisição GET
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 60); // Timeout de 60 segundos
$response = curl_exec($ch);

// Verifica se houve erro na requisição
if(curl_errno($ch)) {
    echo 'Erro cURL: ' . curl_error($ch);
} else {
    echo $response;
}

// Fecha a conexão cURL
curl_close($ch);
?>


</head>
<body>

</body>
</html>