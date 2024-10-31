<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="language" content="pt-BR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--======= SEO ==========-->
    <title><?=$title_pagina?></title>
    <meta name="description" content="<?=$descricao_pagina?>">
    <meta name="robots" content="all">
    <meta name="author" content="BMA Soluções Digitais">
    <meta name="keywords" content="<?=$palavra_chave_pagina?>">

    <meta property="og:type" content="page">
    <meta property="og:url" content="<?=$url_pagina?>">
    <meta property="og:title" content="<?=$title_pagina?>">
    <meta property="og:image" content="<?=$config->urlsite("assets/imagens/logos/android-chrome-192x192.png")?>">
    <meta property="og:description" content="<?=$descricao_pagina?>">
    <meta property="article:author" content="BMA Soluções Digitais">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="<?=$config->urlsite()?>">
    <meta name="twitter:title" content="<?=$title_pagina?>">
    <meta name="twitter:creator" content="BMA Soluções Digitais">
    <meta name="twitter:description" content="<?=$descricao_pagina?>">
    <link rel="canonical" href="<?=$config->urlsite()?>">
    <!--======= FIM SEO ===========-->

    <!--======= ICON LOGO ==========-->
    <link rel="icon" href="<?=$config->urlsite("assets/imagens/logos/favicon.ico")?>">
    <link rel="icon" type="image/png" sizes="512x512" href="<?=$config->urlsite("assets/imagens/logos/android-chrome-512x512.png")?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=$config->urlsite("assets/imagens/logos/android-chrome-192x192.png")?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$config->urlsite("assets/imagens/logos/favicon-32x32.png")?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$config->urlsite("assets/imagens/logos/favicon-16x16.png")?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$config->urlsite("assets/imagens/logos/apple-touch-icon.png")?>">
 
    <!--======= FOLHAS DE ESTILOS ==========-->
    <link rel="stylesheet" href="<?=$config->urlsite("assets/fontawesome/css/all.min.css")?>">
    <link rel="stylesheet" href="<?=$config->urlsite("assets/bootstrap/bootstrap.min.css")?>">
    <link rel="stylesheet" href="<?=$config->urlsite("assets/glider/glider.min.css")?>">
    <link rel="stylesheet" href="<?=$config->urlsite("assets/style.css")?>">
</head>
<body>