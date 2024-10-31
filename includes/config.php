<?php
    /*/////////////////////////////
        CONFIGURAÇÃO DO PROJETO
    ////////////////////////////*/
    class Configs
    {
        // BASE
        public $projeto_modo        = "dev"; // dev = DESENVOLVIMENTO, hom = HOMOLOGAÇÃO, pro = PRODUÇÃO
        public $projeto_nome        = ""; // NOME DA PASTA DO PROJETO
        public $diretorio_adicional = "canabis"; // NOME DA PASTA PAI ( deixe vazio casso seja na raiz )
        public $url_site            = "http://localhost/canabis";

        // LGPD
        public $lgpd_site_nome      = "Cannabis para tratamento";
        public $lgpd_conector_nome  = "a"; // [o] No BMA, [a] Na BMA
        public $lgpd_site_url       = "http://localhost/canabis/";
        public $lgpd_site_email     = "contatoX@.com.br";

        // OPCIONAL
        public $whatsapp            = "";
        public $instagram           = "";
        public $facebook            = "";
        public $linkedin            = "";
        public $twitter             = "";
        public $youtube             = "";
        public $tiktok              = "";
        public $vimeo               = "";
        public $twitch              = "";

        /*/////////////////////////////
                NÃO MECHA APARTIR DAQUI
        ////////////////////////////*/

        // FUNCTIONS
        public function rede_sociais() {
            return array(
                array(
                    "fa-solid fa-globe",
                    $this->url_site
                ),
                array(
                    "fa-brands fa-instagram",
                    $this->instagram
                ),
                array(
                    "fa-brands fa-facebook-f",
                    $this->facebook
                ),
                array(
                    "fa-brands fa-linkedin-in",
                    $this->linkedin
                ),
                array(
                    "fa-brands fa-twitter",
                    $this->twitter
                ),
                array(
                    "fa-brands fa-youtube",
                    $this->youtube
                ),
                array(
                    "fa-brands fa-tiktok",
                    $this->tiktok
                )
                ,
                array(
                    "fa-brands fa-vimeo-v",
                    $this->vimeo
                )
                ,
                array(
                    "fa-brands fa-twitch",
                    $this->twitch
                )
            );
        }
        
        public function urlsite($link="") {
            if($this->modoProjeto() == "pro") {
                return $this->url_site."/".$this->diretorio_adicional.$this->projeto_nome."/".$link;
            }
            else if($this->modoProjeto() == "hom") {
                return "http://localhost/".$this->diretorio_adicional.$this->projeto_nome."/".$link;
            }
            else {
                return "http://localhost/".$this->diretorio_adicional.$this->projeto_nome."/".$link;
            }
        }

        public function rootsite($caminho="") {
            if($this->modoProjeto() == "pro") {
                return $_SERVER['DOCUMENT_ROOT']."/".$this->diretorio_adicional.$this->projeto_nome.$caminho;
            }
            else if($this->modoProjeto() == "hom") {
                return $_SERVER['DOCUMENT_ROOT']."/clientes/".$this->diretorio_adicional.$this->projeto_nome.$caminho;
            }
            else {
                return $_SERVER['DOCUMENT_ROOT']."/".$this->diretorio_adicional.$this->projeto_nome.$caminho;
            }
        }

        public function modoProjeto() {
            if($this->projeto_modo == "pro" && $_SERVER['REMOTE_ADDR'] != "127.0.0.1" && $_SERVER['REMOTE_ADDR'] != "::1") {
                return "pro"; // PRODUÇAO
            }
            else if ($this->projeto_modo == "hom"){
                return "hom"; // HOMOLOGAÇÃO
            }
            else {
                return "dev"; // DESENVOLVIMENTO
            }
        }
    }
    $config = new Configs;