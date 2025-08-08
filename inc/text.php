<?php
session_start(); // Inicia a sessão

if (!isset($_REQUEST["noredirect"]) || $_REQUEST["noredirect"] == "") {
    if (!empty($_SERVER["QUERY_STRING"])) {
        if (!isset($_SESSION["xss"]) || $_SESSION["xss"] !== "1") {
            $_SESSION["xss"] = "1";
            $queryString = str_replace(["%27", "%22"], "", $_SERVER["QUERY_STRING"]); // Remove %27 (') e %22 (")
            header("Location: " . $_SERVER["SCRIPT_NAME"] . "?" . $queryString);
            exit;
        } else {
            unset($_SESSION["xss"]); // Remove a variável de sessão "xss"
        }
    }
} 


$shopping_id            = "201";
$shopping_nome          = "Shopping Jaraguá";
$shopping_author        = "Madnezz";
$shopping_description   = "";
$shopping_keywords      = "";
$shopping_analytics     = "";
$shopping_coordenada    ="-21.783248, -48.201393";
$shopping_token         = "EONQ7rEC11cvI22CkZ9Brjdo2fh1U0y8";

$recaptcha              = "6Le4UeQqAAAAABXll8sLUanYPyqtPSHbA_TveIMe";

$shopping_endereco      = "";
$shopping_numero        = "";
$shopping_bairro        = "";
$shopping_cidade        = "";
$shopping_estado        = "";
$shopping_cep           = "";
$shopping_telefone      = "";

$link_lgpd              = "";
$visao_01               = "Nossa Cultura";
$visao_01a              = "Somos uma empresa diversa, trabalhamos em quatro diferentes segmentos, o que é muito positivo para nossa cultura, pois nos traz experiências únicas. <br />Buscamos nos destacar por nossas três bandeiras de engajamento:<br /><br /><br /><br />";
$visao_02               = "Cultura de aprendizagem";
$visao_02a              = "Que valoriza o desenvolvimento dos nossos colaboradores e incentiva a busca por conhecimento e a inovação de nossos negócios.";
$visao_03               = "Foco em resultados";
$visao_03a              = "Por onde procuramos reconhecer o desempenho através da meritocracia e manter nosso negócio sustentável em todos os sentidos.";
$visao_04               = "Senso de propósito";
$visao_04a              = "Que visamos despertar em nossos colaboradores, pois acreditamos que quando somos apaixonados pelo que fazemos, mantemos nossos clientes fiéis.";
$shopping_token_1       = "V36HkOVTeeZm71r1H8o4iGAL1wEeLfpx";
$shopping_token_2       = "W2FIljWUffun600UBR7TjHBg0xzfM8q6";
$shopping_token_3       = "0gfi8i0uZ229aI3ubrJt95u4E01ZLA2S";
$shopping_token_4       = "Wl83KI1UfETn6hl3B07TI6UFdWYE3zq6";
$visao_05               = "Este <b>Nosso Jeito</b> de fazer as coisas valoriza, com paixão e bom humor, as relações de longo prazo, algo essencial para manter nossos colaboradores comprometidos com o nosso sucesso.<br /><br />Acreditamos que não há atalhos e com <b>credibilidade e discrição</b> mantemos uma relação ética e transparente em nossos negócios. Somos competitivos e buscamos sermos líderes no que fazemos.<br /><br />Construir um futuro que gere valor para todos os envolvidos, é o que buscamos no GRUPO <b>SOL</b>PANAMBY.";
$visao_06               = "Visão";
$visao_06a              = "Ser o grupo empresarial familiar brasileiro referência nos segmentos em que atua.<br /><br /><b>Ativos - Locações e Shoppings:</b> Ser uma excelente opção de investimento e experiência para clientes e parceiros.<br /><b>Comunicação:</b> Ser agente transformador, referência como fonte de informação, valorizando a cultura brasileira.<br /><b>Agronegócio:</b> Ser a fazenda referência em cafés especiais do Brasil.<br /><b>Varejo:</b> Ser líder no mercado de cafés especiais.<br /><b>Incorporação: </b>Ser a melhor opção de desenvolvimento de negócios imobiliários em Campinas.";
$visao_07               = "Missão";
$visao_07a              = "Gerar valor, entregar as melhores experiências e fazer a diferença.";
$visao_08               = "Valores";
$visao_08a              = "Credibilidade<br />Foco em Resultados<br />Simplicidade, Bom Humor e Paixão<br />Colaboração<br />Sustentabilidade";
$visao_09               = "PMT - Propósito Máximo de Transformação";
$visao_09a              = "Empreender sempre de forma sustentável, para unir e desenvolver negócios e pessoas.";

?>