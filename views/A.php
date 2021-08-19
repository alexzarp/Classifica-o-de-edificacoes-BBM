<div id="A_">
    <?php include("linhas_divisorias/lin_nvl2.php");?>
    <div class="sublocos_centrais">
        <?php
        foreach ($vetor_nvl2_A as $nvl2A) {
        ?>
            <div id="<?=$nvl2A["id"]?>" class="bloco" onclick="<?=$nvl2A["onClick"]?>">
                <h4 class="titulo_bloco"><?=$nvl2A["titulo"]?></h4>
                <?= $nvl2A["imagem"]?>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/A/A1.php");
?>