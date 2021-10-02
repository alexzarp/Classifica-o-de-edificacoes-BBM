<div id="M_" class="sub_bloco">
    <?php include("linhas_divisorias/lin_nvl2.php");?>
    <div class="sublocos_centrais">
        <?php
        foreach ($vetor_nvl2_M as $nvl2M) {
        ?>
            <div id="<?=$nvl2M["id"]?>" class="bloco bloco_anula" onclick="<?=$nvl2M["onClick"]?>">
                <h4 class="titulo_bloco"><?=$nvl2M["titulo"]?></h4>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/M/M1.php");
    include("views/M/M2.php");
    include("views/M/M3.php");
    include("views/M/M4.php");
    include("views/M/M5.php");
    include("views/M/M6.php");
    include("views/M/M7.php");
    include("views/M/M8.php");
    include("views/M/M9.php");
    include("views/M/M10.php");
    include("views/M/M11.php");
?>