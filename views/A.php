<div id="A_" class="sub_bloco">
    <?php include("linhas_divisorias/lin_nvl2.php");?>
    <div class="sublocos_centrais">
        <?php
        foreach ($vetor_nvl2_A as $nvl2A) {
        ?>
            <div id="<?=$nvl2A["id"]?>" class="bloco bloco_anula" onclick="runScript(2, '<?= $nvl2A["id"] ?>', 'A1')">
                <h4 class="titulo_bloco"><?=$nvl2A["titulo"]?></h4>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/A/A1.php");
    include("views/A/A2.php");
    include("views/A/A3.php");
?>