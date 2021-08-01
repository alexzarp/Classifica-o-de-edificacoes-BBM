<!DOCTYPE html>
<html lang="pt-br" >
<head>
    <title>Classificação de Edificações</title>
    <meta charset="utf-8">
    <meta name="author" content="Alex Sandro Zarpelon, Bruna Gabriela Disner, Rafael Gama Fernandes"> <!--Rafael por favor conferir o nome-->
    <meta name="description" content="Este sistema tem como objetivo agilizar a classificação e liberação de edificações.">
    <meta name="keywords" content="Bombeiros SC, Edificações, Alavará, Fogo, Segurança">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="shorcut icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>
<body>
    <header>
        <img src="assets/img/logo.png" alt="Logo Bombeiros" id="logo">
        <h1 class="titulo_header">Sistema de Classificação de Edificações</h1>
        <img src="assets/img/menu.svg" alt="Botão Menu" id="botao_menu">
    </header>

    <main>
        <h1 class="vermelho">Escolha a classificação de ocupação:</h1> <br>

        <div class="grade">
            <div id="A" class="bloco" onclick="blocoA()">
                <h4 class="titulo_bloco">A - Resiencial</h4>
                <img src="assets/img/nvl1/preto/casa.svg" alt="Casa" class="icones_centrais">
            </div>
    
            <div id="B" class="bloco">
                <h4 class="titulo_bloco">B - Serviço de Hospedagem</h4>
                <img src="assets/img/nvl1/preto/hotel.svg" alt="Hotel" class="icones_centrais">
            </div>
    
            <div id="C" class="bloco">
                <h4 class="titulo_bloco">C - Comercial</h4>
                <img src="assets/img/nvl1/preto/comercio.svg" alt="Comercio" class="icones_centrais">
            </div>
    
            <div id="D" class="bloco">
                <h4 class="titulo_bloco">D - Serviço profissional</h4>
                <img src="assets/img/nvl1/preto/profissional.svg" alt="Profissional" class="icones_centrais">
            </div>
    
            <div id="E" class="bloco">
                <h4 class="titulo_bloco">E - Educacional e<br>Cultura física</h4>
                <img src="assets/img/nvl1/preto/educacao.svg" alt="Educacão" class="icones_centrais">
            </div>
    
            <div id="F" class="bloco">
                <h4 class="titulo_bloco">F - Local de Reunião de Público</h4>
                <img src="assets/img/nvl1/preto/reuniao.svg" alt="Reunião" class="icones_centrais">
            </div>
    
            <div id="G" class="bloco">
                <h4 class="titulo_bloco">G - Serviço automotivo e<br>assemelhados</h4>
                <img src="assets/img/nvl1/preto/carro.svg" alt="Carro" class="icones_centrais">
            </div>
    
            <div id="H" class="bloco">
                <h4 class="titulo_bloco">H - Serviço de saúde e<br>institucional</h4>
                <img src="assets/img/nvl1/preto/hospital.svg" alt="Hospital" class="icones_centrais">
            </div>
    
            <div id="I" class="bloco">
                <h4 class="titulo_bloco">I - Indústria</h4>
                <img src="assets/img/nvl1/preto/industria.svg" alt="Indústria" class="icones_centrais">
            </div>
    
            <div id="J" class="bloco">
                <h4 class="titulo_bloco">J - Depósito</h4>
                <img src="assets/img/nvl1/preto/deposito.svg" alt="Depósito" class="icones_centrais">
            </div>
    
            <div id="K" class="bloco">
                <h4 class="titulo_bloco">K - Energia</h4>
                <img src="assets/img/nvl1/preto/energia.svg" alt="Energia" class="icones_centrais">
            </div>
    
            <div id="L" class="bloco">
                <h4 class="titulo_bloco">L - Explosivo</h4>
                <img src="assets/img/nvl1/preto/explosivo.svg" alt="Explosivo" class="icones_centrais">
            </div>
    
            <div id="M" class="bloco">
                <h4 class="titulo_bloco">M - Especial</h4>
                <img src="assets/img/nvl1/preto/especial.svg" alt="Especial" class="icones_centrais">
            </div>
        </div>

        <?php
            include("views/AA.php");
        ?>
    </main>

    <footer></footer>
    <script></script>
</body>
</html>