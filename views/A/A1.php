<div id="A1_">
    <?php include("views/linhas_divisorias/lin_nvl3.php") ?>
    <div class="sublocos_centrais">
    <?php
        foreach ($vetor_nvl3_A1 as $nvl3A1) {
        ?>
            <div id="<?=$nvl3A1["id"]?>" class="bloco" onclick="<?=$nvl3A1["onClick"]?>">
                <h4 class="titulo_bloco"><?=$nvl3A1["titulo"]?></h4>
                <?= $nvl3A1["imagem"]?>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/A/A1/UM.php");
?>