<?php
header('Content-Type: text/javascript; charset=utf-8');

// Defina o nome do cliente do Instagram
$cliente_instagram = "shoppingjaraguaararaquara";

// Verifique se a variável de cache do Instagram está vazia
$instagram_raw = isset($_SESSION['instagram_site_cache']) ? $_SESSION['instagram_site_cache'] : '';

// Se não houver cache, faça a requisição HTTP para obter os dados do Instagram
if ($instagram_raw == '') {
    // Inicializa o cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.instagram.com/" . $cliente_instagram . "/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    
    // Envia a requisição e armazena a resposta
    $instagram_raw = curl_exec($ch);
    curl_close($ch);

    // Armazena a resposta no cache (usando sessão para simplificação)
    $_SESSION['instagram_site_cache'] = $instagram_raw;
}

// Remove os scripts indesejados
$instagram_raw = str_replace(' type="text/javascript"', '', $instagram_raw);

// Divide o conteúdo do Instagram em scripts
$inst_scripts = explode("script", $instagram_raw);

// Inicializa uma variável para armazenar os dados JSON
$json_data = '';

// Itera sobre os scripts encontrados
foreach ($inst_scripts as $script) {
    // Verifica se o script contém uma imagem e não é uma imagem de "og:image"
    if (strpos($script, ".jpg") !== false && strpos($script, "og:image") === false) {
        // Limpa e extrai os dados JSON
        $json_data = trim($json_data);
        $json_data = substr($script, 1, strlen($script) - 3);
        
        // Imprime o dado JSON
        echo $json_data . "\n";
    }
}
?>

var insta_media = window._sharedData.entry_data.ProfilePage[0].graphql.user.edge_owner_to_timeline_media.edges;