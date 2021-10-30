<div id="D_" class="sub_bloco">
    <?php include("linhas_divisorias/lin_nvl2.php");?>
    <div class="sublocos_centrais">
        <?php
        foreach ($vetor_nvl2_D as $nvl2D) {
        ?>
            <div id="<?=$nvl2D["id"]?>" class="bloco bloco_anula" onclick="runScript(2, '<?=$nvl2D["id"]?>', 'D1')">
                <h4 class="titulo_bloco"><?=$nvl2D["titulo"]?></h4>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/D/D1.php");
    include("views/D/D2.php");
    include("views/D/D3.php");
    include("views/D/D4.php");
?>