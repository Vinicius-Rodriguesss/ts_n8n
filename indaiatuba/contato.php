<?php
include 'inc/header.php';
?>

<style>
    body.responsivo .banner {
        background-position: center !important;
    }
</style>

<div class="banner" style="background-image:url(https://upload.madnezz.com.br/518495e3e1d4072b9eacd1bb922e0bb1);"></div>

<div id="contato" class="conteudo secundaria">
    <div class="col bg_cinza">
        <!--<p class="center pb50">Envie sua mensagem com dúvidas ou sugestões.<br>Sua opinião é muito importante para nós</p>-->
        <div class="titulo">
            <h1>Fale Conosco</h1>
            <h2>(19) 3875-8933</h2>
        </div>

        <form class=" border" id="contato_form">
            <div class="mform">
                <table>
                    <tr>
                        <td><input type="text" class="input-default fl wd95" name="contato_nome" id="contato_nome"
                                placeholder="Nome" /></td>
                        <td><input type="text" class="input-default fr wd95" name="contato_email" id="contato_email"
                                placeholder="E-mail" /></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="input-default fl wd95" name="contato_telefone"
                                id="contato_telefone" placeholder="Telefone" /></td>
                        <td>
                            <select name="contato_assunto" class="select-default fr wd98" id="contato_assunto">
                                <option selected>Selecione</option>
                                <option value="Cinema">Cinema</option>
                                <option value="Dúvidas">Dúvidas</option>
                                <option value="Locação de Lojas">Locação de Lojas</option>
                                <option value="Outros">Outros</option>
                                <option value="Reclamações">Reclamações</option>
                                <option value="Sugestões">Sugestões</option>
                                <option value="Elogios">Elogios</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <textarea name="contato_mensagem" class="textarea-default" id="contato_mensagem"
                placeholder="Mensagem"> </textarea> <br><br>
            <h2 class="contato_alerta text cverde"></h2>
            <div class=" ">
                <input type="submit" name="submit" id="submit" class="bt_contato" value="" />
            </div>
            <div id="captcha">
                <script src='https://www.google.com/recaptcha/api.js'></script>
                <div class="g-recaptcha" data-sitekey="6Le4UeQqAAAAABXll8sLUanYPyqtPSHbA_TveIMe"></div>
            </div>

        </form>
    </div>
    <div style="clear:both"></div>
</div>

<script>
    var assunto = '<?php echo req("assunto") ?>';

    if (assunto == "lojista") {
        $("#contato_assunto").val("Locação de Lojas");
    }
</script>

<?php
include 'inc/footer.php';
?>
<script type="text/javascript" src="js/contato.js"></script>