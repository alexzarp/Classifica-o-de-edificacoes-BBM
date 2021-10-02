<div id="K_" class="sub_bloco">
    <?php include("linhas_divisorias/lin_nvl2.php");?>
    <div class="sublocos_centrais">
        <?php
        foreach ($vetor_nvl2_K as $nvl2K) {
        ?>
            <div id="<?=$nvl2K["id"]?>" class="bloco bloco_anula" onclick="<?=$nvl2K["onClick"]?>">
                <h4 class="titulo_bloco"><?=$nvl2K["titulo"]?></h4>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/K/K1.php");
    include("views/K/K2.php");
?>