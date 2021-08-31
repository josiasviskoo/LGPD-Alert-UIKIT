<!-- VERIFIQUE SE O JQUERY JÁ NÃO ESTÁ DECLARADO -->

<?php if (isset($_COOKIE['lgpdaceito'])){
} else {
    ?>
    <style>
    .fixado-bottom {
        z-index: 999999 !important;
        position: fixed;
        bottom: 0px;
        width: 100%;
    }
    
    .ocultar {
        animation-duration: 1s;
        animation-name: ocultando;
    }
    
    @keyframes ocultando {
      0% { opacity: 100; }
      99% { opacity: 0; }
      100% { display: none; visible: hidden; bottom: -200px; }
    }
</style>
<div id="alertalgpd" class="fixado-bottom uk-padding-small uk-animation-slide-bottom" style="background-color: white;">
    <div id="cookaceite"></div>
    <div class="uk-text-center" uk-grid>
        <div class="uk-width-2-3 uk-text-right">
            Usamos cookies em nosso site para fornecer a experiência mais relevante, lembrando suas preferências e visitas repetidas. Ao clicar em “Aceitar todos”, você concorda com o uso de TODOS os cookies. No entanto, você pode visitar "Configurações de cookies" para fornecer um consentimento controlado.
        </div>
        <div class="uk-width-1-3 uk-text-left">
            <a href="TERMOS_PARA_LER.PHP" class="uk-button uk-button-default">Detalhes</a>
            <a onclick="checkCookie()" class="uk-button uk-button-primary" style="background-color: black;">Aceitar</a>
        </div>
    </div>
</div>
    <?php
}; ?>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


<script>
    function checkCookie() {
        $('.fixado-bottom').addClass('ocultar');
        carregarpagina(cookaceite,'vk-alert-lgpd-aceite.php');
    }
    
    function carregarpagina(alvo,pagina) {
    	$(alvo).fadeIn(700);
        $(alvo).load(pagina);
        }
</script>

    