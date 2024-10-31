<?php  
    include("./includes/config.php");

    // VARIAVEIS DO SEO
    $title_pagina           = "OBRIGADO 😉";
    $descricao_pagina       = "";
    $palavra_chave_pagina   = "";
    $url_pagina             = "";

    /*
    if(isset($_POST['submit']) or isset($_POST['nome'])){
        $error = '';

        $destinatarios = '';

        $nomeDestinatario = utf8_decode("Dados através da LP E-Book");
        $nomeDestinatario = ($nomeDestinatario);
        $Subject = utf8_decode("Dados Usuário E-book");

        $usuario = '';
        $senha = '';

        if(!$error){
            $corpo = utf8_decode("
            <section style='font-size: 1rem; padding: 1rem; color: #FFFFFF !important;'>
                <article style='max-width: 500px; margin: 0 auto; background: #0C0602 !important; padding: 1rem; border-radius: 5px; box-shadow: 0 0.125rem 0.25rem #FFFFFF14;'>
                    <h1 style='font-size: 1.3rem; font-weight: 600; text-align: center; color: #F58021; margin: 0; margin-bottom: 5px;'>
                        Olá &#128075;
                    </h1>
                    <p style='font-size: 1rem; text-align: center;'>
                        O contato abaixo encaminhou uma mensagem através da LP:
                    </p>
                    <hr style='border-color: #FFFFFF1a;'>
                    <p style='font-size: 1rem;'>
                        <span style='font-weight: 700; color: #F58021;'>Nome:</span> ".$_POST['nome']."
                        <br><br>
                        <span style='font-weight: 700; color: #F58021;'>Whatsapp:</span> ".$_POST['whatsapp']."
                        <br><br>
                        <span style='font-weight: 700; color: #F58021;'>Tem plano de saúde:</span> ".$_POST['plano_atual']."
                        <br><br>
                        <span style='font-weight: 700; color: #F58021;'>Tem CNPJ empresarial:</span> ".$_POST['cnpj_s_n']."
                        <br><br>
                        <span style='font-weight: 700; color: #F58021;'>Quantidade de beneficiários:</span> ".$_POST['beneficiarios']."
                        <br><br>
                        <span style='font-weight: 700; color: #F58021;'>Operadora atual:</span> ".$_POST['operadora']."
                    </p>
                    <hr style='border-color: #FFFFFF1a;'>
                    <img style='display: block; margin: 0 auto;' src='data:image/png;base64,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' alt='BMA'>
                </article>
            </section>");

            ///*********************************** A PARTIR DAQUI NAO ALTERAR ***********************************

            require 'includes/phpmailer/PHPMailerAutoload.php';
            
            $To = $destinatarios;
            //$To2 = $destinatarios2;
            $Message = $corpo;
            //$Message = utf8_decode($Message);

            //smtp
            $Host = "smtp.passarinho.com.br";
            $Username = $usuario;
            $Password = $senha;
            $Port = "587" //"587";

            $mail = new PHPMailer();
            $body = $Message;
            //$mail->IsSMTP(); // telling the class to use SMTP
            $mail->IsMail(true);
            $mail->Host = $Host; // SMTP server
            $mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
            // 1 = errors and messages
            // 2 = messages only
            $mail->SMTPAuth = true; // enable SMTP authentication
            $mail->Port = $Port; // set the SMTP port for the service server
            $mail->Username = $Username; // account username
            $mail->Password = $Password; // account password

            $mail->IsHTML(true);
            $mail->SetFrom($usuario, $nomeDestinatario);
            $mail->AddReplyTo($usuario, $nomeDestinatario);
            $mail->Subject = $Subject;
            $mail->MsgHTML($body);
            $mail->AddAddress($To, "");
            //$mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']); //adiciona o anexo
            //$mail->AddAddress($To2, "");


            if(!$mail->Send()) {
                $mensagemRetorno = 'Erro ao enviar e-mail: '. print($mail->ErrorInfo);
            }
        }
    }*/

    include("./includes/head.php");
?>
    <!--====== TELA DE AVISO DE ENVIO =======-->
    <section id="tela_envio" class="bg-secondary h-100 w-100 position-fixed inset">
        <div class="w-100 h-100 p-3 d-flex flex-column justify-content-center align-items-center">
            <lottie-player id="animacao_enviou" src="<?=$config->urlsite("assets/lottiefiles/aimacao_enviou.json")?>"  background="transparent" speed="1.5" autoplay ></lottie-player>
        </div>
    </section>

    <section id="section_agradecimento" class="py-5 d-flex align-items-center">
        <article class="container h-100 d-flex">
            <div class="my-auto text-center" data-anime="buttom">
                <div class="mb-4">
                    <a href="<?=$config->url_site?>" target="_blank">
                        <img class="h-100 logo-bar" src="./assets/imagens/logos/logo.svg" alt="logo" style="max-width: 25rem;">
                    </a>
                </div>
                <h2 class="uppercase text-secondary fw700 mb-3">
                    Lorem ipsum pulvinar
                </h2>
                <p class="mb-3">
                    Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus.
                </p>
                <ul class="row p-0 m-0 mb-4 align-items-center justify-content-center">
                    <?php 
                        foreach($config->rede_sociais() as $key=>$rede_social){
                            if($rede_social[1] != "") {
                    ?>
                        <li>
                            <a class="btn btn-primary m-2 p-2" href="<?=$rede_social[1]?>" target="_blank">
                                <i class="<?=$rede_social[0]?> fa-fw fa-lg"></i>
                            </a>
                        </li>
                    <?php } }; ?>
                </ul>
                <button id="btn_voltar" class="btn btn-outline-primary mb-4 ml-3" type="button" data-href="<?=$config->urlsite()?>" onclick="window.location.href = this.dataset.href" data-anime>
                    <i class="fa-solid fa-arrow-rotate-left fa-fw fa-lg mr-2"></i> Voltar
                </button>
            </div>
        </article>
    </section>
<?php
    include("./includes/footer.php")
?>