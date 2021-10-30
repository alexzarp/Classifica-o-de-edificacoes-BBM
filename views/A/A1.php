<div id="A1_" class="sub_bloco">
    <?php include("views/linhas_divisorias/lin_nvl3.php") ?>
    <div class="sublocos_centrais">
    <?php
        foreach ($vetor_nvl3_A1 as $nvl3A1) {
        ?>
            <div id="<?=$nvl3A1["id"]?>" class="bloco bloco_anula" onclick="runScript(3, '<?=$nvl3A1["id"]?>', 'UnifamiliarMista')">
                <h4 class="titulo_bloco"><?=$nvl3A1["titulo"]?></h4>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/A/A1/UM.php");
    include("views/A/A1/Gem.php");
    include("views/A/A1/Iso.php");
?>