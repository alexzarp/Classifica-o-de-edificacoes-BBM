<div id="G_" class="sub_bloco">
    <?php include("linhas_divisorias/lin_nvl2.php");?>
    <div class="sublocos_centrais">
        <?php
        foreach ($vetor_nvl2_G as $nvl2G) {
        ?>
            <div id="<?=$nvl2G["id"]?>" class="bloco bloco_anula" onclick="runScript(2, '<?=$nvl2G["id"]?>', 'G1')">
                <h4 class="titulo_bloco"><?=$nvl2G["titulo"]?></h4>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/G/G1.php");
    include("views/G/G2.php");
    include("views/G/G3.php");
    include("views/G/G4.php");
    include("views/G/G5.php");
?>