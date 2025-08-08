<?php
//  session_start(); // Inicia a sessão

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


$shopping_id="221";
$shopping_nome="Shopping Jaraguá Cenesp";
$shopping_author="Madnezz";
$shopping_description="";
$shopping_keywords="";
$shopping_analytics="UA-84808696-1";
$shopping_coordenada="-23.648303, -46.731635";
$shopping_token="W2FIljWUffun600UBR7TjHBg0xzfM8q6";

$shopping_endereco="";
$shopping_numero="";
$shopping_bairro="";
$shopping_cidade="";
$shopping_estado="";
$shopping_cep="";
$shopping_telefone="(11) 3741-5004";

$facebook="https://www.facebook.com/shoppingjaraguacenesp/";
$shopping_endereco="Avenida Maria Coelho Aguiar, n° 215<br />Jardim São Luiz, São Paulo/ SP<br />CEP: 05805-000<br />Tel: (11) 3741-5004";
$horarios="";

$achados="<h2>Achados e Perdidos</h2><br>Caso tenha esquecido ou perdido algo, dirija-se ao departamento da segurança, onde todos os objetos encontrados no shopping por clientes, funcionários ou lojistas são levados, e forneça todos os detalhes para que possamos verificar se foi encontrado.<br>Os objetos são armazenados pela Central de Segurança e permanecem disponíveis para retirada durante o horário de funcionamento do shopping.<br>Após determinado período, conforme tipicidade, os objetos seguem para doação.";
$agencia="<h2>Agência Bancária - Bradesco</h2><br>Para oferecer praticidade aos seus clientes o Shopping Jaraguá conta com serviços bancários aferidos pela Agência Bradesco.";
$cadeiras="<h2>Cadeiras de Rodas</h2><br>As cadeiras de rodas podem ser encontradas nas entradas do Shopping. Para utilização é necessário solicitar a um segurança, devendo ser devolvida ao final do passeio.";
$caixa="<h2>Caixa Eletrônico 24h</h2><br>O caixa Eletrônico 24h dá acesso aos principais bancos do país onde saques e outros serviços grátis estão disponíveis. Cada banco oferece um pacote específico para seus clientes.";
$casa="<h2>Casa de Câmbio - Renova</h2><br>A Renova Câmbio, sempre com o foco na entrega de soluções em câmbio mais completas, inovadoras e que possam trazer mais conveniência para seu dia a dia.<br>Confira as nossas soluções: compra e venda de moedas estrangeiras, venda e recarga de cartões pré-pagos de viagem, remessas e pagamentos internacionais. Horário de funcionamento: Segunda a Sexta, das 10h00 às 20h00 | Sábados, das 10h00 às 18h00.";
$cvc="<h2>CVC</h2><br>A CVC Viagens possui parcerias com as principais redes de serviços turísticos, que proporcionam excelentes preços de Passagens aéreas, hotéis, Pacotes de viagens e Cruzeiros e ótimas opções de pagamento. Escolha o destino dos seus sonhos e reúna a família ou amigos.";
$estacionamento="<h2>Estacionamento</h2><br>O Shopping Jaraguá conta com um amplo estacionamento que oferece 1.312 vagas de estacionamento. O valor do estacionamento é de R$ 4,00 por um período de 4 horas. As horas adicionais serão cobradas o valor de R$ 1,00<br>O período de tolerância é de 20 minutos.<br>Quem optar pela utilização do sistema Sem Parar, não necessitará dirigir-se até o caixa para efetuar o pagamento, pois a cobrança será feita automaticamente junto à fatura dos demais serviços utilizados pelo proprietário do TAG do veículo.<br>De segunda à sexta-feira o estacionamento é grátis até as 14h.";
$fabrica="<h2>Fábrica da Imaginação</h2><br>Enquanto os adultos passeiam pelo Shopping, os pequenos podem contar com muita diversão e aprendizagem com brinquedos pedagógicos e recreativos da Fábrica da Imaginação. Um espaço voltado à construção da imaginação, colocando em prática a criatividade, a fantasia e a alegria de ser criança.";
$fraldario="<h2>Fraldário</h2><br>Ambiente tranquilo e agradável que oferece conforto para o cliente e bebê, Conta com espaço para trocas de fraldas, amamentação e papinha, disponibilização produtos como fraldas descartáveis, lenços umedecidos e pomadas, além do empréstimo de carrinhos para o transporte de bebês. Todos os carrinhos recebem protetores descartáveis e limpeza prévia, para maior higiene e segurança de seu bebê. Para a segurança dos pais e do bebê, e de acordo com o manual do fabricante, restringimos o uso a crianças com até 24 meses.";
$newcar="<h2>New Car Clean</h2><br>Enquanto você passeia pelo shopping, a New Car Clean deixa o seu carro impecável. E os preços estão imbatíveis:<br>Ducha com Jet Cera: R$ 25,00<br>Lavagem completa: R$ 35,00";
$sem="<h2>Sem Parar</h2><br>Além de contar com acesso para veículos que possuem o sistema, os clientes podem solicitar a instalação do serviço no balcão Sem Parar.";
$taxi="<h2>Táxi</h2><br>Para maior comodidade de nossos clientes, contamos com um ponto de taxi localizado no estacionamento do Shopping, formado por taxistas profissionais e redenunciados.";

?>