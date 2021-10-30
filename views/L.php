<div id="L_" class="sub_bloco">
    <?php include("linhas_divisorias/lin_nvl2.php");?>
    <div class="sublocos_centrais">
        <?php
        foreach ($vetor_nvl2_L as $nvl2L) {
        ?>
            <div id="<?=$nvl2L["id"]?>" class="bloco bloco_anula" onclick="runScript(2, '<?=$nvl2L["id"]?>', 'L1')">
                <h4 class="titulo_bloco"><?=$nvl2L["titulo"]?></h4>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/L/L1.php");
    include("views/L/L2.php");
    include("views/L/L3.php");
?>