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
            <a href="/"><img src="assets/img/logo.png" alt="Logo Bombeiros" id="logo" class="anima"></a>
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
            include("views/E.php");
            include("views/F.php");
            include("views/G.php");
            include("views/H.php");
            include("views/I.php");
            include("views/J.php");
            include("views/K.php");
            include("views/L.php");
            include("views/M.php");
        ?>
    </main>

    <footer>
        <div class="footer-primeira-div">
            <div class="bloco_anula">
                <a href="https://www.cbm.sc.gov.br/"><img src="assets/img/logo.png" alt="Logo bombeiros" id="logo2"></a>
                <div>
                    <span class="bold tamanho1">Emergência</span><br>
                    <span class="bold tamanho2 bloco_anula">193</span>
                </div>
            </div>

            <span class="bloco_anula bold">CORPO DE BOMBEIROS MILITAR DE SANTA CATARINA</span>

            <a href="https://www.uffs.edu.br/"><img src="assets/img/uffs.png" alt="UFFS logo" id="uffs" class="bloco_anula"></a>
        </div>

        <div class="footer-segunda-div">            
            <span class="white">Desenvolvido em parceria: <a class="limpa_formatacao bold" href="https://github.com/alexzarp">Alex Sandro Zarpelon <img class="github" src="assets/img/github.svg"></a>&nbsp; &nbsp;<a class="limpa_formatacao bold" href="https://github.com/Brunadisner">Bruna Gabriela Disner <img class="github" src="assets/img/github.svg"></a>&nbsp; &nbsp;<a class="limpa_formatacao bold" href="https://github.com/rflgf">Rafael Gama Fernandes <img class="github" src="assets/img/github.svg"></a></span>
    
            <span class="white">Mantido por: T.I do 6° BBM</span>   
        </div>
    </footer>

    <script>
        function oculta_() {
            var lista = document.getElementsByClassName("sub_bloco").length;
            for (i = 0; i < lista; i++){
                document.getElementsByClassName("sub_bloco")[i].style.display = 'none';                   
            }
        }
        oculta_();
    </script>
</body>
</html>