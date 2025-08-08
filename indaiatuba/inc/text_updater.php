<?php
    // Inicializa o cURL para fazer a requisição GET
    $url = "https://v3.madnezz.com.br/systems/sites/api/texto.php?shopping_id=203";
    $ch = curl_init($url);

    // Configurações do cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    // Executa a requisição e obtém a resposta
    $response = curl_exec($ch);

    // Verifica se houve erro na requisição
    if(curl_getinfo($ch, CURLINFO_HTTP_CODE) == 200) {
        // Abre o arquivo para escrita
        $file = fopen("text.php", "w");

        if ($file) {
            // Escreve o conteúdo no arquivo
            fwrite($file, $response);

            // Fecha o arquivo após escrita
            fclose($file);
        } else {
            echo "Erro ao abrir o arquivo para gravação.";
        }
    } else {
        echo "Erro na requisição: " . curl_error($ch);
    }

    // Fecha a conexão cURL
    curl_close($ch);
?>

<script type="text/javascript" src="../js/jquery.js"></script>
<script>
	setInterval(function () {
		location.reload();
	},6000)
</script>