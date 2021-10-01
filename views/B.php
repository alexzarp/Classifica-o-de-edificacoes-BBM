<div id="B_" class="sub_bloco">
    <?php include("linhas_divisorias/lin_nvl2.php");?>
    <div class="sublocos_centrais">
        <?php
        foreach ($vetor_nvl2_B as $nvl2B) {
        ?>
            <div id="<?=$nvl2B["id"]?>" class="bloco bloco_anula" onclick="<?=$nvl2B["onClick"]?>">
                <h4 class="titulo_bloco"><?=$nvl2B["titulo"]?></h4>
                <?= $nvl2B["imagem"]?>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/B/B1.php");
    include("views/B/B2.php");
?>