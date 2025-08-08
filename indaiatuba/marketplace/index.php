<?php
include "inc/header.php";
?>

<section id="banner" class="p-0">
    <div class="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="images/woman.png" class="w-100" />
                </div>
                <div class="col-lg-6 text-center text-lg-left mb-5 mb-lg-0">
                    <h1 class="text-white">Marketplace</h1>
                    <h2 class="text-white">Como acessar</h2>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section id="boxes" class="pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4 text-center">
                    <div class="icon">
                        <img src="images/wirecard.png" />
                    </div>
                    <h5>1º Passo</h5>

                    <div class="card-txt">
                        <p>
                            Fazer cadastro no Wirecard pelo link:<br>
                            <b><a href="https://bem-vindo.wirecard.com.br/" target="_blank">https://bem-vindo.wirecard.com.br/</a></b><br>
                            *Wirecard é um intermediador de pagamento para e-commerces e marketplaces, com a função de fazer com que os pagamentos de um site sejam efetuados de maneira ágil e segura.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4 text-center">
                    <div class="icon">
                        <img src="images/compra-facil.png" />
                    </div>
                    <h5>2º Passo</h5>

                    <div class="card-txt">
                        <p>
                            Cadastro na plataforma Compra Fácil Jaraguá<br>
                            Enviar seu e-mail e CNPJ para o WhatsApp <b><a href="https://api.whatsapp.com/send?phone=5519971273167" target="_blank">019 97127-3167</a></b> ou para o e-mail <b><a href="mailto:carolinaaboud@shoppingjaragua.com.br">carolinaaboud@shoppingjaragua.com.br</a></b><br>
                            Você irá receber um e-mail com um link para completar o cadastro na plataforma.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4 text-center">
                    <div class="icon">
                        <img src="images/melhor-envio.png" />
                    </div>
                    <h5>3º Passo</h5>

                    <div class="card-txt">
                        <p>
                            Fazer cadastro no Melhor Envio pelo link: <b><a href="https://melhorenvio.com.br/cadastre-se" target="_blank">https://melhorenvio.com.br/cadastre-se</a></b><br>
                            * O Melhor Envio é uma plataforma de fretes. Ele oferece serviços de Sedex (Correios) e JadLog (transportadora) e gera etiqueta de envios com rastreio automático em uma plataforma gratuita.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4 text-center">
                    <i class="fas fa-tags icon"></i>
                    <h5>4º Passo</h5>

                    <div class="card-txt">
                        <p>
                            Inserir produtos na plataforma.<br>
                            Consulte o passo a passo por meio deste link:<br>
                            <b><a href="pdf/tutorial.pdf" target="_blank">Clique aqui</a></b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(function(){
        $(document).on('click','.btn-close',function(){
            $(this).parents('.card').removeClass('active');
        });
    });
</script>

<?php
include "inc/footer.php";
?>
        