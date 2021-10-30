<div id="C_" class="sub_bloco">
    <?php include("linhas_divisorias/lin_nvl2.php");?>
    <div class="sublocos_centrais">
        <?php
        foreach ($vetor_nvl2_C as $nvl2C) {
        ?>
            <div id="<?=$nvl2C["id"]?>" class="bloco bloco_anula" onclick="runScript(2, '<?=$nvl2C["id"]?>', 'C1')">
                <h4 class="titulo_bloco"><?=$nvl2C["titulo"]?></h4>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/C/C1.php");
    include("views/C/C2.php");
    include("views/C/C3.php");
?>