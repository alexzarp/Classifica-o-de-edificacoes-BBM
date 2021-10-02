<div id="H_" class="sub_bloco">
    <?php include("linhas_divisorias/lin_nvl2.php");?>
    <div class="sublocos_centrais">
        <?php
        foreach ($vetor_nvl2_H as $nvl2H) {
        ?>
            <div id="<?=$nvl2H["id"]?>" class="bloco bloco_anula" onclick="<?=$nvl2H["onClick"]?>">
                <h4 class="titulo_bloco"><?=$nvl2H["titulo"]?></h4>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/H/H1.php");
    include("views/H/H2.php");
    include("views/H/H3.php");
    include("views/H/H4.php");
    include("views/H/H5.php");
    include("views/H/H6.php");
?>