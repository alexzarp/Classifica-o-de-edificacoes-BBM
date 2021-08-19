<?php
function verificaGetRadio($name, $value)
{
    if(isset($_GET[$name]) && $_GET[$name] == $value)
        return "checked";
    return "";
}
?>

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
    <link rel="stylesheet" href="assets/CSS/form.css">
    <script src="assets/JS/funcoes_bloco.js" defer></script>
    <script src="assets/JS/funcoes_complementares.js" defer></script>
</head>
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
<?php var_dump($_GET["classificacao"]) ?>
        <h1 class="vermelho">Escolha a classificação de ocupação:</h1> <br>

        <form method="get" action="index.php">
            <div id="classificacoes" class="grade">
                <input class="clean" type="radio" id="A" name="classificacao" value="A" <?=verificaGetRadio("classificacao", "A")?>>
                <label for="A" class="bloco" onclick="coloreClassificacao('A')">
                    <h4 id="A_h4" class="titulo_bloco">A - Residencial</h4>
                    <img id="A_img" src="assets/img/nvl1/preto/casa.svg" alt="Casa" class="icones_centrais">
                </label>
        
                <input class="clean" type="radio" id="B" name="classificacao" value="B" <?=verificaGetRadio("classificacao", "B")?>>
                <label for="B" id="B" class="bloco">
                    <h4 id="B_h4" class="titulo_bloco">B - Serviço de Hospedagem</h4>
                    <img id="B_img" src="assets/img/nvl1/preto/hotel.svg" alt="Hotel" class="icones_centrais">
                </label>
        
                <input class="clean" type="radio" id="C" name="classificacao" value="C" <?=verificaGetRadio("classificacao", "C")?>>
                <label for="C" id="C" class="bloco">
                    <h4 id="C_h4" class="titulo_bloco">C - Comercial</h4>
                    <img id="C_img" src="assets/img/nvl1/preto/comercio.svg" alt="Comercio" class="icones_centrais">
                </label>
        
                <input class="clean" type="radio" id="D" name="classificacao" value="D" <?=verificaGetRadio("classificacao", "D")?>>
                <label for="D" id="D" class="bloco">
                    <h4 id="D_h4" class="titulo_bloco">D - Serviço profissional</h4>
                    <img id="D_img" src="assets/img/nvl1/preto/profissional.svg" alt="Profissional" class="icones_centrais">
                </label>
        
                <input class="clean" type="radio" id="EE" name="classificacao" value="EE" <?=verificaGetRadio("classificacao", "EE")?>>
                <label for="EE" id="E" class="bloco">
                    <h4 id="E_h4" class="titulo_bloco">E - Educacional e<br>Cultura física</h4>
                    <img id="E_img" src="assets/img/nvl1/preto/educacao.svg" alt="Educacão" class="icones_centrais">
                </label>
        
                <input class="clean" type="radio" id="F" name="classificacao" value="F" <?=verificaGetRadio("classificacao", "F")?>>
                <label for="F" id="F" class="bloco">
                    <h4 id="F_h4" class="titulo_bloco">F - Local de Reunião de Público</h4>
                    <img id="F_img" src="assets/img/nvl1/preto/reuniao.svg" alt="Reunião" class="icones_centrais">
                </label>
        
                <input class="clean" type="radio" id="G" name="classificacao" value="G" <?=verificaGetRadio("classificacao", "G")?>>
                <label for="G" id="G" class="bloco">
                    <h4 id="G_h4" class="titulo_bloco">G - Serviço automotivo e<br>assemelhados</h4>
                    <img id="G_img" src="assets/img/nvl1/preto/carro.svg" alt="Carro" class="icones_centrais">
                </label>
        
                <input class="clean" type="radio" id="H" name="classificacao" value="H" <?=verificaGetRadio("classificacao", "H")?>>
                <label for="H" id="H" class="bloco">
                    <h4 id="H_h4" class="titulo_bloco">H - Serviço de saúde e<br>institucional</h4>
                    <img id="H_img" src="assets/img/nvl1/preto/hospital.svg" alt="Hospital" class="icones_centrais">
                </label>
        
                <input class="clean" type="radio" id="I" name="classificacao" value="I" <?=verificaGetRadio("classificacao", "I")?>>
                <label for="I" id="I" class="bloco">
                    <h4 id="I_h4" class="titulo_bloco">I - Indústria</h4>
                    <img id="I_img" src="assets/img/nvl1/preto/industria.svg" alt="Indústria" class="icones_centrais">
                </label>
        
                <input class="clean" type="radio" id="J" name="classificacao" value="J" <?=verificaGetRadio("classificacao", "J")?>>
                <label for="J" id="J" class="bloco">
                    <h4 id="J_h4" class="titulo_bloco">J - Depósito</h4>
                    <img id="J_img" src="assets/img/nvl1/preto/deposito.svg" alt="Depósito" class="icones_centrais">
                </label>
        
                <input class="clean" type="radio" id="K" name="classificacao" value="K" <?=verificaGetRadio("classificacao", "K")?>>
                <label for="K" id="K" class="bloco">
                    <h4 id="K_h4" class="titulo_bloco">K - Energia</h4>
                    <img id="K_img" src="assets/img/nvl1/preto/energia.svg" alt="Energia" class="icones_centrais">
                </label>
        
                <input class="clean" type="radio" id="L" name="classificacao" value="L" <?=verificaGetRadio("classificacao", "L")?>>
                <label for="L" id="L" class="bloco">
                    <h4 id="L_h4" class="titulo_bloco">L - Explosivo</h4>
                    <img id="L_img" src="assets/img/nvl1/preto/explosivo.svg" alt="Explosivo" class="icones_centrais">
                </label>
        
                <input class="clean" type="radio" id="M" name="classificacao" value="M" <?=verificaGetRadio("classificacao", "M")?>>
                <label for="M" id="M" class="bloco">
                    <h4 id="M_h4" class="titulo_bloco">M - Especial</h4>
                    <img id="M_img" src="assets/img/nvl1/preto/especial.svg" alt="Especial" class="icones_centrais">
                </label>
            </div>
        <!-- <?php
            // if(isset($_GET["classificacao"])) include("views/" . $_GET["classificacao"] .".php");
        ?> -->

        <?php
        include("views/AA.php");
        ?>
            <input type="submit" value="submit">
        </form>
    </main>

    <footer></footer>
</body>
</html>