<div id="E_" class="sub_bloco">
    <?php include("linhas_divisorias/lin_nvl2.php");?>
    <div class="sublocos_centrais">
        <?php
        foreach ($vetor_nvl2_E as $nvl2E) {
        ?>
            <div id="<?=$nvl2E["id"]?>" class="bloco bloco_anula" onclick="<?=$nvl2E["onClick"]?>">
                <h4 class="titulo_bloco"><?=$nvl2E["titulo"]?></h4>
                <?= $nvl2E["imagem"]?>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/E/E1.php");
    include("views/E/E2.php");
    include("views/E/E3.php");
    include("views/E/E4.php");
    include("views/E/E5.php");
    include("views/E/E6.php");
?>