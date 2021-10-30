<div id="I_" class="sub_bloco">
    <?php include("linhas_divisorias/lin_nvl2.php");?>
    <div class="sublocos_centrais">
        <?php
        foreach ($vetor_nvl2_I as $nvl2I) {
        ?>
            <div id="<?=$nvl2I["id"]?>" class="bloco bloco_anula" onclick="runScript(2, '<?=$nvl2I["id"]?>', 'I1')">
                <h4 class="titulo_bloco"><?=$nvl2I["titulo"]?></h4>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/I/I1.php");
    include("views/I/I2.php");
    include("views/I/I3.php");
?>