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
    <!-- <script src="assets/JS/funcoes_bloco.js" defer></script> -->
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

        <div id="nvl1" class="grade">
        <?php
        foreach ($vetor_nvl1 as $nvl1) {
        ?>
            <div id="<?=$nvl1["id"]?>" class="bloco" onclick="runScript(1, '<?=$nvl1["id"]?>', 'A')">
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
            include("views/E.php");
            include("views/F.php");
            include("views/G.php");
            include("views/H.php");
            include("views/I.php");
            include("views/J.php");
            include("views/K.php");
            include("views/L.php");
            include("views/M.php");
        
        if(isset($_GET["1"])) {
            include("form.php");
        }
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
            
            <h3 class="bloco_anula bold">CORPO DE BOMBEIROS MILITAR DE SANTA CATARINA</h3>

            <a href="https://www.uffs.edu.br/"><img src="assets/img/uffs.png" alt="UFFS logo" id="uffs" class="bloco_anula"></a>
        </div>

        <div class="footer-segunda-div">            
            <span class="white">Desenvolvido em parceria: <a class="limpa_formatacao bold" href="https://github.com/alexzarp">Alex Sandro Zarpelon <img class="github" src="assets/img/github.svg"></a>&nbsp; <a class="limpa_formatacao bold" href="https://github.com/Brunadisner">Bruna Gabriela Disner <img class="github" src="assets/img/github.svg"></a>&nbsp; <a class="limpa_formatacao bold" href="https://github.com/rflgf">Rafael Gama Fernandes <img class="github" src="assets/img/github.svg"></a></span>
    
            <span class="white">Mantido por: T.I do 6° BBM</span>   
        </div>
    </footer>

    <script src="assets/JS/funcoes_bloco.js"></script>
    <script>
        const urlParams = new URLSearchParams(window.location.search);        
        var num = 1;
        while (true) {
            var myParam = urlParams.get(num.toString());
            if (myParam == null) {
                myParam = urlParams.get((num-1).toString());
                break
            }
            // console.log(myParam);
            runScript(0, myParam, myParam);
            num++
        }
        // para cada possível form, uma variável
        let altura = urlParams.get('altura');
        let area = urlParams.get('area');
        let pavimentos = urlParams.get('pavimentos');
        let glp = urlParams.get('glp');

        if (altura) {
            document.getElementById(myParam+'_').querySelector('#altura').value = altura;
        }
        if (area) {
            document.getElementById(myParam+'_').querySelector('#area').value = area;
        }
        if (pavimentos) {
            document.getElementById(myParam+'_').querySelector('#pavimentos').value = pavimentos;
        }
        if (glp) {
            document.getElementById(myParam+'_').querySelector('#glp').value = glp;
        }
    </script>
</body>
</html>