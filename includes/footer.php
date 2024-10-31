    <!--====== CARREGAMENTO DE SCRIPTS =======-->

    <!-- script jquery -->
    <script src="<?=$config->urlsite("assets/bootstrap/jquery-3.2.1.slim.min.js")?>" crossorigin="anonymous"></script>

    <!-- script popper -->
    <script src="<?=$config->urlsite("assets/bootstrap/popper.min.js")?>"></script>

    <!-- script bootstrap -->
    <script src="<?=$config->urlsite("assets/bootstrap/bootstrap.min.js")?>"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?=$config->urlsite("assets/bootstrap/holder.min.js")?>"></script>

    <!-- script lottiefiles (ANIMACOES) -->
    <script src="<?=$config->urlsite("assets/lottiefiles/lottie-player.js")?>"></script>

    <!-- script Glider -->
    <script src="<?=$config->urlsite("assets/glider/glider.min.js")?>"></script>

    <!-- script principal -->
    <script src="<?=$config->urlsite("assets/index.js")?>"></script>
    
    <!-- LGPD -->
    <?php include($config->rootsite("/includes/politica_de_privacidade.php")); ?>

    <!--=============================================
        SITE DESELVOLVIDO POR BMA SOLUÇÕES DIGITAIS 
        https://bmasolucoesdigitais.com.br/
    =================================================-->
</body>
</html>