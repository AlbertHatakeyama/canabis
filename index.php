<?php
    include("./includes/config.php");

    // VARIAVEIS DO SEO
    $title_pagina           = "Cannabis para tratamento";
    $descricao_pagina       = "";
    $palavra_chave_pagina   = "";
    $url_pagina             = $config->urlsite();

    // DEPOIMENTOS
    $depoimentos = array(
        array(
            "nome" => "maria felix",
            "profissao" => "terapeuta",
            "depoimento" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        ),
        array(
            "nome" => "maria felix",
            "profissao" => "terapeuta",
            "depoimento" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        ),
        array(
            "nome" => "maria felix",
            "profissao" => "terapeuta",
            "depoimento" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        ),
        array(
            "nome" => "maria felix",
            "profissao" => "terapeuta",
            "depoimento" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        )
    );

    // PERGUNTAS FREQUENTES
    $perguntas_frequrntes = array(
        array(
            "pergunta" => "Lorem ipsum risus nam duis imperdiet",
            "resposta" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        ),
        array(
            "pergunta" => "Lorem ipsum risus nam duis imperdiet",
            "resposta" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        ),
        array(
            "pergunta" => "Lorem ipsum risus nam duis imperdiet",
            "resposta" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        ),
        array(
            "pergunta" => "Lorem ipsum risus nam duis imperdiet",
            "resposta" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        )
    );

    include("./includes/head.php");
    include("./includes/tela_carregamento.php");
?>
    <header id="inicio" class=" background_img_1" data-anime>
        <article class="container h-100 d-flex position-relative">
            <div class="row h-100 text-white">
                <div class="col-lg-10 col-md-10 col-sm-12 col-12 d-flex flex-column align-items-start my-auto" data-anime="left">
                    <h1 class="fw700 mb-4 uppercase">
                        O Tramendo de Cannabis ajuda pessoas, <br> com 
                        <span class="text-secondary" data-wait="1000" data-palavras='["Alzheime", "Doença de Parkinson", "Dor crônica", "Ansiedade"]'></span><span class="text-primary">_</span>
                    </h1>
                    <div class="bg-transparent rounded shadow p-3">
                        <form action="obrigado" method="post" id="form_cadastro" onsubmit="previneEnvioExtra()">
                            <div class="form-row">
                                <div class="col-12 col-sm-6 mb-3 position-relative">
                                    <input type="text" class="form-control bg-secondary" name="nome" placeholder="Nome Completo" required>
                                    <i class="fa-solid fa-user-large fa-fw fa-lg text-secondary"></i>
                                </div>
                                <div class="col-12 col-sm-6 mb-3 position-relative">
                                    <input type="tel" class="form-control bg-secondary" name="whatsApp" placeholder="WhatsApp" onkeydown="return mascaraTelefone(event)" required>
                                    <i class="fa-brands fa-whatsapp fa-fw fa-lg text-secondary"></i>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-sm-6 mb-3 position-relative">
                                    <input type="email" class="form-control bg-secondary" name="email" placeholder="E-mail" required>
                                    <i class="fa-solid fa-envelope fa-fw fa-lg text-secondary"></i>
                                </div>
                                <div class="col-12 col-sm-6 mb-3 position-relative">
                                    <input type="text" class="form-control bg-secondary" name="profissao" placeholder="Profissão" required>
                                    <i class="fa-solid fa-id-card-clip fa-fw fa-lg text-secondary"></i>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" name="lgpd2" id="lgpd2" required="" required>
                                <label class="custom-control-label" for="lgpd2">
                                    Autorizo a coleta dos meus dados
                                </label>
                            </div>
                            <button id="btn_envio_form" class="btn btn-outline-secondary btn-lg w-100" type="submit">
                                solicitar orçamento
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </header>

    <section class="bg-white py-5">
        <article class="container text-center">
            <h3 class="uppercase text-secondary fw700 mb-4" data-anime>
                Lorem ipsum risus nam
            </h3>
            <p class="mb-3" data-anime>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor eros. Donec vitae tortor lacus. Phasellus aliquam ante in maximus.
            </p>
            <ul class="row mb-0 p-0">
                <li class="col-md-6 col-lg-4 p-3" data-anime="button">
                    <div class="icon_card mb-3 position-relative">
                        <svg class="fundo" width="100" height="110" viewBox="0 0 100 110" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 24.3243L50 0L100 24.3243V85.6757L50 110L0 85.6757V24.3243Z" fill="currentColor"/>
                        </svg>
                        <svg class="icon" width="60" height="39" viewBox="0 0 60 39" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.24878 0.124656C7.08034 0.231045 7.05488 1.15312 7.05488 7.13545V14.0238L10.0281 14.0885C11.9859 14.131 13.0932 14.2058 13.2704 14.3076C13.4184 14.3926 13.622 14.5615 13.7229 14.6828C13.8718 14.862 13.9183 15.8651 13.9708 20.0222L14.0354 25.141L28.4752 25.1738L42.9151 25.2068L42.9534 19.2274L42.9918 13.2482L43.2882 12.8326C43.4716 12.5755 43.7674 12.3663 44.0638 12.284C44.3372 12.208 46.0284 12.1506 48.001 12.1502L51.4589 12.1494V6.22889C51.4589 1.79637 51.4199 0.269309 51.3038 0.153225C51.1843 0.0337801 46.1223 -0.00138085 29.2957 4.11097e-05C15.7533 0.0013338 7.369 0.048646 7.24878 0.124656ZM44.307 13.5273C44.259 13.5753 44.2198 14.187 44.2198 14.8866V16.1587L52.0729 16.1255L59.9261 16.0921V14.7994V13.5068L52.1601 13.4734C47.8889 13.4552 44.3549 13.4793 44.307 13.5273ZM0.164819 15.407C0.0676081 15.5042 0.0096953 15.9873 0.0096953 16.6997V17.8373H6.40853H12.8074V16.6231C12.8074 15.635 12.7692 15.3942 12.6029 15.3304C12.4904 15.2872 9.68073 15.2519 6.35915 15.2519C1.83433 15.2519 0.281032 15.2908 0.164819 15.407ZM44.2198 25.9813V34.6423H52.1053H59.9907V25.9813V17.3202H52.1053H44.2198V25.9813ZM0.0096953 26.8861V34.7716H6.40853H12.8074V26.8861V19.0007H6.40853H0.0096953V26.8861ZM14.0274 26.5371C13.992 26.6297 13.9792 27.4876 13.9992 28.4438L14.0354 30.1825L28.4813 30.2153L42.9271 30.2483V28.3086V26.3691H28.5096C16.7964 26.3691 14.0799 26.4006 14.0274 26.5371ZM27.0518 33.0091C26.8248 33.892 26.6392 34.6789 26.6392 34.7576C26.6392 34.8578 27.4365 34.9008 29.2892 34.9008C30.7467 34.9008 31.9357 34.8573 31.9315 34.8039C31.9273 34.7505 31.7332 33.9798 31.5002 33.0911L31.0766 31.4752L29.2705 31.4395L27.4643 31.4037L27.0518 33.0091ZM44.2198 37.2287V38.5223L52.0729 38.4891L59.9261 38.4557L59.963 37.1954L60 35.935H52.1099H44.2198V37.2287ZM0.0371004 37.26L0.07433 38.4557H6.40853H12.7427L12.78 37.26L12.8171 36.0643H6.40853H0L0.0371004 37.26ZM22.402 36.2514C22.0978 36.348 21.6525 36.5768 21.4124 36.7599C21.1723 36.943 20.8606 37.2831 20.7198 37.5158C20.5789 37.7484 20.424 38.0695 20.3757 38.2295L20.2875 38.5204H29.2159C37.1931 38.5204 38.1442 38.4991 38.1442 38.32C38.1442 38.2099 38.0618 37.9627 37.9612 37.7706C37.8607 37.5787 37.5844 37.2391 37.3472 37.0159C37.1101 36.7928 36.7125 36.502 36.4637 36.3696C36.0416 36.1451 35.5722 36.1271 29.4831 36.1024C24.2836 36.0812 22.8424 36.1116 22.402 36.2514Z" fill="currentColor"/>
                        </svg>                            
                    </div>                    
                    <h5 class="mb-3 fw600">
                        Responsivo
                    </h5>
                    <p class="mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor.
                    </p>
                </li>
                <li class="col-md-6 col-lg-4 p-3" data-anime="button">
                    <div class="icon_card mb-3 position-relative">
                        <svg class="fundo" width="100" height="110" viewBox="0 0 100 110" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 24.3243L50 0L100 24.3243V85.6757L50 110L0 85.6757V24.3243Z" fill="currentColor"/>
                        </svg>
                        <svg class="icon" width="60" height="39" viewBox="0 0 60 39" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.24878 0.124656C7.08034 0.231045 7.05488 1.15312 7.05488 7.13545V14.0238L10.0281 14.0885C11.9859 14.131 13.0932 14.2058 13.2704 14.3076C13.4184 14.3926 13.622 14.5615 13.7229 14.6828C13.8718 14.862 13.9183 15.8651 13.9708 20.0222L14.0354 25.141L28.4752 25.1738L42.9151 25.2068L42.9534 19.2274L42.9918 13.2482L43.2882 12.8326C43.4716 12.5755 43.7674 12.3663 44.0638 12.284C44.3372 12.208 46.0284 12.1506 48.001 12.1502L51.4589 12.1494V6.22889C51.4589 1.79637 51.4199 0.269309 51.3038 0.153225C51.1843 0.0337801 46.1223 -0.00138085 29.2957 4.11097e-05C15.7533 0.0013338 7.369 0.048646 7.24878 0.124656ZM44.307 13.5273C44.259 13.5753 44.2198 14.187 44.2198 14.8866V16.1587L52.0729 16.1255L59.9261 16.0921V14.7994V13.5068L52.1601 13.4734C47.8889 13.4552 44.3549 13.4793 44.307 13.5273ZM0.164819 15.407C0.0676081 15.5042 0.0096953 15.9873 0.0096953 16.6997V17.8373H6.40853H12.8074V16.6231C12.8074 15.635 12.7692 15.3942 12.6029 15.3304C12.4904 15.2872 9.68073 15.2519 6.35915 15.2519C1.83433 15.2519 0.281032 15.2908 0.164819 15.407ZM44.2198 25.9813V34.6423H52.1053H59.9907V25.9813V17.3202H52.1053H44.2198V25.9813ZM0.0096953 26.8861V34.7716H6.40853H12.8074V26.8861V19.0007H6.40853H0.0096953V26.8861ZM14.0274 26.5371C13.992 26.6297 13.9792 27.4876 13.9992 28.4438L14.0354 30.1825L28.4813 30.2153L42.9271 30.2483V28.3086V26.3691H28.5096C16.7964 26.3691 14.0799 26.4006 14.0274 26.5371ZM27.0518 33.0091C26.8248 33.892 26.6392 34.6789 26.6392 34.7576C26.6392 34.8578 27.4365 34.9008 29.2892 34.9008C30.7467 34.9008 31.9357 34.8573 31.9315 34.8039C31.9273 34.7505 31.7332 33.9798 31.5002 33.0911L31.0766 31.4752L29.2705 31.4395L27.4643 31.4037L27.0518 33.0091ZM44.2198 37.2287V38.5223L52.0729 38.4891L59.9261 38.4557L59.963 37.1954L60 35.935H52.1099H44.2198V37.2287ZM0.0371004 37.26L0.07433 38.4557H6.40853H12.7427L12.78 37.26L12.8171 36.0643H6.40853H0L0.0371004 37.26ZM22.402 36.2514C22.0978 36.348 21.6525 36.5768 21.4124 36.7599C21.1723 36.943 20.8606 37.2831 20.7198 37.5158C20.5789 37.7484 20.424 38.0695 20.3757 38.2295L20.2875 38.5204H29.2159C37.1931 38.5204 38.1442 38.4991 38.1442 38.32C38.1442 38.2099 38.0618 37.9627 37.9612 37.7706C37.8607 37.5787 37.5844 37.2391 37.3472 37.0159C37.1101 36.7928 36.7125 36.502 36.4637 36.3696C36.0416 36.1451 35.5722 36.1271 29.4831 36.1024C24.2836 36.0812 22.8424 36.1116 22.402 36.2514Z" fill="currentColor"/>
                        </svg>                            
                    </div>                    
                    <h5 class="mb-3 fw600">
                        Responsivo
                    </h5>
                    <p class="mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor.
                    </p>
                </li>
                <li class="col-md-6 col-lg-4 p-3" data-anime="button">
                    <div class="icon_card mb-3 position-relative">
                        <svg class="fundo" width="100" height="110" viewBox="0 0 100 110" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 24.3243L50 0L100 24.3243V85.6757L50 110L0 85.6757V24.3243Z" fill="currentColor"/>
                        </svg>
                        <svg class="icon" width="60" height="39" viewBox="0 0 60 39" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.24878 0.124656C7.08034 0.231045 7.05488 1.15312 7.05488 7.13545V14.0238L10.0281 14.0885C11.9859 14.131 13.0932 14.2058 13.2704 14.3076C13.4184 14.3926 13.622 14.5615 13.7229 14.6828C13.8718 14.862 13.9183 15.8651 13.9708 20.0222L14.0354 25.141L28.4752 25.1738L42.9151 25.2068L42.9534 19.2274L42.9918 13.2482L43.2882 12.8326C43.4716 12.5755 43.7674 12.3663 44.0638 12.284C44.3372 12.208 46.0284 12.1506 48.001 12.1502L51.4589 12.1494V6.22889C51.4589 1.79637 51.4199 0.269309 51.3038 0.153225C51.1843 0.0337801 46.1223 -0.00138085 29.2957 4.11097e-05C15.7533 0.0013338 7.369 0.048646 7.24878 0.124656ZM44.307 13.5273C44.259 13.5753 44.2198 14.187 44.2198 14.8866V16.1587L52.0729 16.1255L59.9261 16.0921V14.7994V13.5068L52.1601 13.4734C47.8889 13.4552 44.3549 13.4793 44.307 13.5273ZM0.164819 15.407C0.0676081 15.5042 0.0096953 15.9873 0.0096953 16.6997V17.8373H6.40853H12.8074V16.6231C12.8074 15.635 12.7692 15.3942 12.6029 15.3304C12.4904 15.2872 9.68073 15.2519 6.35915 15.2519C1.83433 15.2519 0.281032 15.2908 0.164819 15.407ZM44.2198 25.9813V34.6423H52.1053H59.9907V25.9813V17.3202H52.1053H44.2198V25.9813ZM0.0096953 26.8861V34.7716H6.40853H12.8074V26.8861V19.0007H6.40853H0.0096953V26.8861ZM14.0274 26.5371C13.992 26.6297 13.9792 27.4876 13.9992 28.4438L14.0354 30.1825L28.4813 30.2153L42.9271 30.2483V28.3086V26.3691H28.5096C16.7964 26.3691 14.0799 26.4006 14.0274 26.5371ZM27.0518 33.0091C26.8248 33.892 26.6392 34.6789 26.6392 34.7576C26.6392 34.8578 27.4365 34.9008 29.2892 34.9008C30.7467 34.9008 31.9357 34.8573 31.9315 34.8039C31.9273 34.7505 31.7332 33.9798 31.5002 33.0911L31.0766 31.4752L29.2705 31.4395L27.4643 31.4037L27.0518 33.0091ZM44.2198 37.2287V38.5223L52.0729 38.4891L59.9261 38.4557L59.963 37.1954L60 35.935H52.1099H44.2198V37.2287ZM0.0371004 37.26L0.07433 38.4557H6.40853H12.7427L12.78 37.26L12.8171 36.0643H6.40853H0L0.0371004 37.26ZM22.402 36.2514C22.0978 36.348 21.6525 36.5768 21.4124 36.7599C21.1723 36.943 20.8606 37.2831 20.7198 37.5158C20.5789 37.7484 20.424 38.0695 20.3757 38.2295L20.2875 38.5204H29.2159C37.1931 38.5204 38.1442 38.4991 38.1442 38.32C38.1442 38.2099 38.0618 37.9627 37.9612 37.7706C37.8607 37.5787 37.5844 37.2391 37.3472 37.0159C37.1101 36.7928 36.7125 36.502 36.4637 36.3696C36.0416 36.1451 35.5722 36.1271 29.4831 36.1024C24.2836 36.0812 22.8424 36.1116 22.402 36.2514Z" fill="currentColor"/>
                        </svg>                            
                    </div>                    
                    <h5 class="mb-3 fw600">
                        Responsivo
                    </h5>
                    <p class="mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor.
                    </p>
                </li>
                <li class="col-md-6 col-lg-4 p-3" data-anime="button">
                    <div class="icon_card mb-3 position-relative">
                        <svg class="fundo" width="100" height="110" viewBox="0 0 100 110" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 24.3243L50 0L100 24.3243V85.6757L50 110L0 85.6757V24.3243Z" fill="currentColor"/>
                        </svg>
                        <svg class="icon" width="60" height="39" viewBox="0 0 60 39" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.24878 0.124656C7.08034 0.231045 7.05488 1.15312 7.05488 7.13545V14.0238L10.0281 14.0885C11.9859 14.131 13.0932 14.2058 13.2704 14.3076C13.4184 14.3926 13.622 14.5615 13.7229 14.6828C13.8718 14.862 13.9183 15.8651 13.9708 20.0222L14.0354 25.141L28.4752 25.1738L42.9151 25.2068L42.9534 19.2274L42.9918 13.2482L43.2882 12.8326C43.4716 12.5755 43.7674 12.3663 44.0638 12.284C44.3372 12.208 46.0284 12.1506 48.001 12.1502L51.4589 12.1494V6.22889C51.4589 1.79637 51.4199 0.269309 51.3038 0.153225C51.1843 0.0337801 46.1223 -0.00138085 29.2957 4.11097e-05C15.7533 0.0013338 7.369 0.048646 7.24878 0.124656ZM44.307 13.5273C44.259 13.5753 44.2198 14.187 44.2198 14.8866V16.1587L52.0729 16.1255L59.9261 16.0921V14.7994V13.5068L52.1601 13.4734C47.8889 13.4552 44.3549 13.4793 44.307 13.5273ZM0.164819 15.407C0.0676081 15.5042 0.0096953 15.9873 0.0096953 16.6997V17.8373H6.40853H12.8074V16.6231C12.8074 15.635 12.7692 15.3942 12.6029 15.3304C12.4904 15.2872 9.68073 15.2519 6.35915 15.2519C1.83433 15.2519 0.281032 15.2908 0.164819 15.407ZM44.2198 25.9813V34.6423H52.1053H59.9907V25.9813V17.3202H52.1053H44.2198V25.9813ZM0.0096953 26.8861V34.7716H6.40853H12.8074V26.8861V19.0007H6.40853H0.0096953V26.8861ZM14.0274 26.5371C13.992 26.6297 13.9792 27.4876 13.9992 28.4438L14.0354 30.1825L28.4813 30.2153L42.9271 30.2483V28.3086V26.3691H28.5096C16.7964 26.3691 14.0799 26.4006 14.0274 26.5371ZM27.0518 33.0091C26.8248 33.892 26.6392 34.6789 26.6392 34.7576C26.6392 34.8578 27.4365 34.9008 29.2892 34.9008C30.7467 34.9008 31.9357 34.8573 31.9315 34.8039C31.9273 34.7505 31.7332 33.9798 31.5002 33.0911L31.0766 31.4752L29.2705 31.4395L27.4643 31.4037L27.0518 33.0091ZM44.2198 37.2287V38.5223L52.0729 38.4891L59.9261 38.4557L59.963 37.1954L60 35.935H52.1099H44.2198V37.2287ZM0.0371004 37.26L0.07433 38.4557H6.40853H12.7427L12.78 37.26L12.8171 36.0643H6.40853H0L0.0371004 37.26ZM22.402 36.2514C22.0978 36.348 21.6525 36.5768 21.4124 36.7599C21.1723 36.943 20.8606 37.2831 20.7198 37.5158C20.5789 37.7484 20.424 38.0695 20.3757 38.2295L20.2875 38.5204H29.2159C37.1931 38.5204 38.1442 38.4991 38.1442 38.32C38.1442 38.2099 38.0618 37.9627 37.9612 37.7706C37.8607 37.5787 37.5844 37.2391 37.3472 37.0159C37.1101 36.7928 36.7125 36.502 36.4637 36.3696C36.0416 36.1451 35.5722 36.1271 29.4831 36.1024C24.2836 36.0812 22.8424 36.1116 22.402 36.2514Z" fill="currentColor"/>
                        </svg>                            
                    </div>                    
                    <h5 class="mb-3 fw600">
                        Responsivo
                    </h5>
                    <p class="mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor.
                    </p>
                </li>
                <li class="col-md-6 col-lg-4 p-3" data-anime="button">
                    <div class="icon_card mb-3 position-relative">
                        <svg class="fundo" width="100" height="110" viewBox="0 0 100 110" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 24.3243L50 0L100 24.3243V85.6757L50 110L0 85.6757V24.3243Z" fill="currentColor"/>
                        </svg>
                        <svg class="icon" width="60" height="39" viewBox="0 0 60 39" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.24878 0.124656C7.08034 0.231045 7.05488 1.15312 7.05488 7.13545V14.0238L10.0281 14.0885C11.9859 14.131 13.0932 14.2058 13.2704 14.3076C13.4184 14.3926 13.622 14.5615 13.7229 14.6828C13.8718 14.862 13.9183 15.8651 13.9708 20.0222L14.0354 25.141L28.4752 25.1738L42.9151 25.2068L42.9534 19.2274L42.9918 13.2482L43.2882 12.8326C43.4716 12.5755 43.7674 12.3663 44.0638 12.284C44.3372 12.208 46.0284 12.1506 48.001 12.1502L51.4589 12.1494V6.22889C51.4589 1.79637 51.4199 0.269309 51.3038 0.153225C51.1843 0.0337801 46.1223 -0.00138085 29.2957 4.11097e-05C15.7533 0.0013338 7.369 0.048646 7.24878 0.124656ZM44.307 13.5273C44.259 13.5753 44.2198 14.187 44.2198 14.8866V16.1587L52.0729 16.1255L59.9261 16.0921V14.7994V13.5068L52.1601 13.4734C47.8889 13.4552 44.3549 13.4793 44.307 13.5273ZM0.164819 15.407C0.0676081 15.5042 0.0096953 15.9873 0.0096953 16.6997V17.8373H6.40853H12.8074V16.6231C12.8074 15.635 12.7692 15.3942 12.6029 15.3304C12.4904 15.2872 9.68073 15.2519 6.35915 15.2519C1.83433 15.2519 0.281032 15.2908 0.164819 15.407ZM44.2198 25.9813V34.6423H52.1053H59.9907V25.9813V17.3202H52.1053H44.2198V25.9813ZM0.0096953 26.8861V34.7716H6.40853H12.8074V26.8861V19.0007H6.40853H0.0096953V26.8861ZM14.0274 26.5371C13.992 26.6297 13.9792 27.4876 13.9992 28.4438L14.0354 30.1825L28.4813 30.2153L42.9271 30.2483V28.3086V26.3691H28.5096C16.7964 26.3691 14.0799 26.4006 14.0274 26.5371ZM27.0518 33.0091C26.8248 33.892 26.6392 34.6789 26.6392 34.7576C26.6392 34.8578 27.4365 34.9008 29.2892 34.9008C30.7467 34.9008 31.9357 34.8573 31.9315 34.8039C31.9273 34.7505 31.7332 33.9798 31.5002 33.0911L31.0766 31.4752L29.2705 31.4395L27.4643 31.4037L27.0518 33.0091ZM44.2198 37.2287V38.5223L52.0729 38.4891L59.9261 38.4557L59.963 37.1954L60 35.935H52.1099H44.2198V37.2287ZM0.0371004 37.26L0.07433 38.4557H6.40853H12.7427L12.78 37.26L12.8171 36.0643H6.40853H0L0.0371004 37.26ZM22.402 36.2514C22.0978 36.348 21.6525 36.5768 21.4124 36.7599C21.1723 36.943 20.8606 37.2831 20.7198 37.5158C20.5789 37.7484 20.424 38.0695 20.3757 38.2295L20.2875 38.5204H29.2159C37.1931 38.5204 38.1442 38.4991 38.1442 38.32C38.1442 38.2099 38.0618 37.9627 37.9612 37.7706C37.8607 37.5787 37.5844 37.2391 37.3472 37.0159C37.1101 36.7928 36.7125 36.502 36.4637 36.3696C36.0416 36.1451 35.5722 36.1271 29.4831 36.1024C24.2836 36.0812 22.8424 36.1116 22.402 36.2514Z" fill="currentColor"/>
                        </svg>                            
                    </div>                    
                    <h5 class="mb-3 fw600">
                        Responsivo
                    </h5>
                    <p class="mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor.
                    </p>
                </li>
                <li class="col-md-6 col-lg-4 p-3" data-anime="button">
                    <div class="icon_card mb-3 position-relative">
                        <svg class="fundo" width="100" height="110" viewBox="0 0 100 110" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 24.3243L50 0L100 24.3243V85.6757L50 110L0 85.6757V24.3243Z" fill="currentColor"/>
                        </svg>
                        <svg class="icon" width="60" height="39" viewBox="0 0 60 39" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.24878 0.124656C7.08034 0.231045 7.05488 1.15312 7.05488 7.13545V14.0238L10.0281 14.0885C11.9859 14.131 13.0932 14.2058 13.2704 14.3076C13.4184 14.3926 13.622 14.5615 13.7229 14.6828C13.8718 14.862 13.9183 15.8651 13.9708 20.0222L14.0354 25.141L28.4752 25.1738L42.9151 25.2068L42.9534 19.2274L42.9918 13.2482L43.2882 12.8326C43.4716 12.5755 43.7674 12.3663 44.0638 12.284C44.3372 12.208 46.0284 12.1506 48.001 12.1502L51.4589 12.1494V6.22889C51.4589 1.79637 51.4199 0.269309 51.3038 0.153225C51.1843 0.0337801 46.1223 -0.00138085 29.2957 4.11097e-05C15.7533 0.0013338 7.369 0.048646 7.24878 0.124656ZM44.307 13.5273C44.259 13.5753 44.2198 14.187 44.2198 14.8866V16.1587L52.0729 16.1255L59.9261 16.0921V14.7994V13.5068L52.1601 13.4734C47.8889 13.4552 44.3549 13.4793 44.307 13.5273ZM0.164819 15.407C0.0676081 15.5042 0.0096953 15.9873 0.0096953 16.6997V17.8373H6.40853H12.8074V16.6231C12.8074 15.635 12.7692 15.3942 12.6029 15.3304C12.4904 15.2872 9.68073 15.2519 6.35915 15.2519C1.83433 15.2519 0.281032 15.2908 0.164819 15.407ZM44.2198 25.9813V34.6423H52.1053H59.9907V25.9813V17.3202H52.1053H44.2198V25.9813ZM0.0096953 26.8861V34.7716H6.40853H12.8074V26.8861V19.0007H6.40853H0.0096953V26.8861ZM14.0274 26.5371C13.992 26.6297 13.9792 27.4876 13.9992 28.4438L14.0354 30.1825L28.4813 30.2153L42.9271 30.2483V28.3086V26.3691H28.5096C16.7964 26.3691 14.0799 26.4006 14.0274 26.5371ZM27.0518 33.0091C26.8248 33.892 26.6392 34.6789 26.6392 34.7576C26.6392 34.8578 27.4365 34.9008 29.2892 34.9008C30.7467 34.9008 31.9357 34.8573 31.9315 34.8039C31.9273 34.7505 31.7332 33.9798 31.5002 33.0911L31.0766 31.4752L29.2705 31.4395L27.4643 31.4037L27.0518 33.0091ZM44.2198 37.2287V38.5223L52.0729 38.4891L59.9261 38.4557L59.963 37.1954L60 35.935H52.1099H44.2198V37.2287ZM0.0371004 37.26L0.07433 38.4557H6.40853H12.7427L12.78 37.26L12.8171 36.0643H6.40853H0L0.0371004 37.26ZM22.402 36.2514C22.0978 36.348 21.6525 36.5768 21.4124 36.7599C21.1723 36.943 20.8606 37.2831 20.7198 37.5158C20.5789 37.7484 20.424 38.0695 20.3757 38.2295L20.2875 38.5204H29.2159C37.1931 38.5204 38.1442 38.4991 38.1442 38.32C38.1442 38.2099 38.0618 37.9627 37.9612 37.7706C37.8607 37.5787 37.5844 37.2391 37.3472 37.0159C37.1101 36.7928 36.7125 36.502 36.4637 36.3696C36.0416 36.1451 35.5722 36.1271 29.4831 36.1024C24.2836 36.0812 22.8424 36.1116 22.402 36.2514Z" fill="currentColor"/>
                        </svg>                            
                    </div>                    
                    <h5 class="mb-3 fw600">
                        Responsivo
                    </h5>
                    <p class="mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor.
                    </p>
                </li>
            </ul>
        </article>
    </section>

    <section class="bg-white py-5">
        <article class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0" data-anime="left">
                    <div id="img_s1" class="h-100 rounded shadow background_img_1">
                        <!-- IMG VIA CSS -->
                    </div>
                </div>
                <div class="col-lg-6" data-anime="right">
                    <h3 class="uppercase text-secondary fw700 mb-3">
                        Lorem ipsum risus nam
                    </h3>
                    <p class="mb-4">
                        Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus.
                    </p>
                    <ul class="p-0">
                        <li class="mb-4 d-flex flex-row align-items-center">
                            <i class="fa-solid fa-circle-check fa-fw fa-lg text-primary mr-1"></i>
                            Lorem ipsum risus nam duis imperdiet
                        </li>
                        <li class="mb-4 d-flex flex-row align-items-center">
                            <i class="fa-solid fa-circle-check fa-fw fa-lg text-primary mr-1"></i>
                            Lorem ipsum risus nam duis imperdiet
                        </li>
                        <li class="mb-4 d-flex flex-row align-items-center">
                            <i class="fa-solid fa-circle-check fa-fw fa-lg text-primary mr-1"></i>
                            Lorem ipsum risus nam duis imperdiet
                        </li>
                        <li class="mb-4 d-flex flex-row align-items-center">
                            <i class="fa-solid fa-circle-check fa-fw fa-lg text-primary mr-1"></i>
                            Lorem ipsum risus nam duis imperdiet
                        </li>
                        <li class="mb-4 d-flex flex-row align-items-center">
                            <i class="fa-solid fa-circle-check fa-fw fa-lg text-primary mr-1"></i>
                            Lorem ipsum risus nam duis imperdiet
                        </li>
                    </ul>
                    <button data-cta class="btn btn-primary btn-lg w100">
                        solicitar orçamento
                    </button>
                </div>  
            </div>
        </article>
    </section>

    <section id="img_s2" class="bg-white py-5 position-relative background_img_1" data-anime>
        <article class="container">
            <div class="row">
                <div class="col-lg-6 text-white" data-anime="left">
                    <h3 class="uppercase text-secondary fw700 mb-3">
                        Lorem ipsum pulvinar
                    </h3>
                    <p class="mb-4">
                        Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus. Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus. lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus. Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus.
                    </p>
                    <button data-cta class="btn btn-outline-secondary btn-lg w100">
                        solicitar orçamento
                    </button>
                </div>
            </div>
        </article>
    </section>

    <?php 
        if(count($depoimentos) > 0) {
    ?>
        <section class="bg-white py-5">
            <article class="container">
                <h3 class="uppercase text-primary text-center fw700 mb-4" data-anime>
                    depoimentos 
                </h3>
                <div class="row p-0" data-anime="button">
                    <ul id="depoimentos" class="p-0">
                        <?php
                            foreach($depoimentos as $key=>$depoimento){
                        ?>
                            <li class="bg-secondary rounded shadow p-3 m-3 text-center position-relative pb-5 card_depoimento">
                                <div class="d-flex flex-row align-items-center justify-content-center py-3 mb-3">
                                    <i class="fa-solid fa-star fa-lg text-secondary mr-2"></i>
                                    <i class="fa-solid fa-star fa-lg text-secondary mr-2"></i>
                                    <i class="fa-solid fa-star fa-lg text-secondary mr-2"></i>
                                    <i class="fa-solid fa-star fa-lg text-secondary mr-2"></i>
                                    <i class="fa-solid fa-star fa-lg text-secondary "></i>
                                </div>
                                <p>
                                    <i class="fa-solid fa-quote-left fa-1x text-primary"></i>
                                    <?=$depoimento["depoimento"]?>
                                    <i class="fa-solid fa-quote-right fa-1x text-primary"></i>
                                </p>
                                <div class="d-flex flex-column align-items-center container_perfil">
                                    <div class="mb-2">
                                        <img class="rounded img_perfil_dep" src="./assets/imagens/depoimentos/d<?=$key?>.png">
                                    </div>
                                    <div>
                                        <h5 class="uppercase fw600 mb-2">
                                            <?=$depoimento["nome"]?>
                                        </h5>
                                        <p class="fw500 mb-0">
                                            <?=$depoimento["profissao"]?>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    <div id="dots_container_depoimentos" class="mt-4"></div>
                </div>
            </article>
        </section>
    <?php }; ?>

    <?php 
        if(count($perguntas_frequrntes) > 0) {
    ?>
        <section class="bg-white py-5">
            <article class="container">
                <h3 class="uppercase text-primary text-center fw700 mb-5" data-anime>
                    Perguntas Frequentes 
                </h3>
                <ul class="p-0">
                    <?php
                        foreach($perguntas_frequrntes as $key=>$pergunta_frequrnte){
                    ?>
                        <li class="w-100 bg-secondary rounded shadow mb-4" data-anime="button">
                            <a class="w-100 fw600 p-3 d-flex align-items-center collapsed abre_fqa" type="button" data-toggle="collapse" data-target="#fqa_<?=$key + 1?>" aria-expanded="false">
                                <?=$key + 1?>. <?=$pergunta_frequrnte["pergunta"]?>
                                <i class="fa-solid fa-angle-down fa-fw fa-xl text-secondary ml-auto"></i>
                            </a>
                            <div id="fqa_<?=$key + 1?>" class="border_top collapse">
                                <p class="p-3">
                                    <?=$pergunta_frequrnte["resposta"]?>
                                </p>
                            </div>
                        </li>
                    <?php }; ?>
                </ul>
            </article>
        </section>
    <?php }; ?>

    <!--====== SECTION FINAL - FOOTER =======-->
    <section class="bg-dark pt-5 pb-1">
        <footer class="container text-white">
            <div class="px-3">
                <div class="row align-items-center justify-content-center justify-content-md-between mb-4">
                    <a class="mb-4 mb-md-0" href="<?=$config->url_site?>" target="_blank">
                        <img class="h-100 logo-bar" src="./assets/imagens/logos/logo.svg" alt="logo" style="max-height: 5rem;">
                    </a>
                    <ul class="row p-0 m-0">
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
                </div>
            </div>

            <!------ Final ------->
            <div class="px-3">
                <div class="row border-top d-flex align-items-center justify-content-center p-0">
                    <a href="javascript:void(0);" class="text-white py-3 px-3 mx-auto fw500 underline lgpd-bma-bt-saibamais">
                        Politica de privacidade
                    </a>
                    <p class="m-0 text-center py-3 px-3 mx-auto">
                        2022 - BMA LAB - Todos os direitos reservados
                    </p>
                    <a class="text-white text-center py-3 px-3 mx-auto fw500 underline" href="https://bmasolucoesdigitais.com.br/" target="_black">
                        Desenvolvido por: 
                        <img class="ml-2" src="<?=$config->urlsite("assets/imagens/logos/logo_bma.svg")?>" alt="BMA Soluções Digitais" style="max-width: 7rem;">
                    </a>
                </div>
            </div>
        </footer>
    </section>

    <?php 
        if($config->whatsapp != ""){
    ?>
        <!--====== BOTÃO FLUTUANTE WHATSAPP =======-->
        <a id="whatsApp" href="obrigado-whatsapp" target="_black">
            <i class="fa-brands fa-whatsapp fa-shake"></i>
        </a>
    <?php } ?>

<?php
    include("./includes/footer.php")
?>