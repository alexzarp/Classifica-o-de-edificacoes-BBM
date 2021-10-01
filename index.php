<!DOCTYPE html>
<html lang="pt-br" >
<head>
    <title>Classificação de Edificações</title>
    <meta charset="utf-8">
    <meta name="author" content="Alex Sandro Zarpelon, Bruna Gabriela Disner, Rafael Gama Fernandes">
    <meta name="description" content="Este sistema tem como objetivo agilizar a classificação e liberação de edificações.">
    <meta name="keywords" content="Bombeiros SC, Edificações, Alavará, Fogo, Segurança">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="shorcut icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <script src="assets/JS/funcoes_bloco.js" defer></script>
    <script src="assets/JS/funcoes_complementares.js" defer></script>
    <?php include_once("dados.php")?>
</head>
<noscript>
    <h1 id="nos">Seu navegador não possui suporte ao JavaScript, por favor o habilite ou mude de navegador.</h1>
    <style>
        #nos {
            background-color: yellow;
        }
    </style>
</noscript>
<body>
    <header>
        <div>
            <img src="assets/img/logo.png" alt="Logo Bombeiros" id="logo" class="anima">
            <h1 class="titulo_header">Sistema de Classificação de Edificações</h1>
            <img src="assets/img/menu.svg" alt="Botão Menu" id="botao_menu" class="anima">
        </div>
        <nav id="menu">
            <a href="#" class="anima">Sobre nós</a>
            <a href="#" class="anima">Bombeiros</a>
            <a href="#" class="anima">Desenvolvedores</a>
        </nav>
    </header>

    <main>
        <h1 class="vermelho">Escolha a classificação de ocupação:</h1> <br>

        <div class="grade">
        <?php
        foreach ($vetor_nvl1 as $nvl1) {
        ?>
            <div id="<?=$nvl1["id"]?>" class="bloco" onclick="<?=$nvl1["onClick"]?>">
                <h4 class="titulo_bloco"><?=$nvl1["titulo"]?></h4>
                <?= $nvl1["imagem"]?>
            </div>
        <?php
        }
        ?>
        </div>
        
        <?php
            include("views/A.php");
            include("views/B.php");
            include("views/C.php");
            include("views/D.php");
            // include("views/E.php");
            // include("views/F.php");
            // include("views/G.php");
            // include("views/H.php");
            // include("views/I.php");
            // include("views/J.php");
            // include("views/K.php");
            // include("views/L.php");
            // include("views/M.php");
        ?>
    </main>

    <footer></footer>
</body>
</html>