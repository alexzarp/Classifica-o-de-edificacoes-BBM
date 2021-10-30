<div id="J_" class="sub_bloco">
    <?php include("linhas_divisorias/lin_nvl2.php");?>
    <div class="sublocos_centrais">
        <?php
        foreach ($vetor_nvl2_J as $nvl2J) {
        ?>
            <div id="<?=$nvl2J["id"]?>" class="bloco bloco_anula" onclick="runScript(2, '<?=$nvl2J["id"]?>', 'J1')">
                <h4 class="titulo_bloco"><?=$nvl2J["titulo"]?></h4>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/J/J1.php");
    include("views/J/J2.php");
    include("views/J/J3.php");
    include("views/J/J4.php");
?>