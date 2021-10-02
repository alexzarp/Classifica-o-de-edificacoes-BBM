<div id="F_" class="sub_bloco">
    <?php include("linhas_divisorias/lin_nvl2.php");?>
    <div class="sublocos_centrais">
        <?php
        foreach ($vetor_nvl2_F as $nvl2F) {
        ?>
            <div id="<?=$nvl2F["id"]?>" class="bloco bloco_anula" onclick="<?=$nvl2F["onClick"]?>">
                <h4 class="titulo_bloco"><?=$nvl2F["titulo"]?></h4>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
    include("views/F/F1.php");
    include("views/F/F2.php");
    include("views/F/F3.php");
    include("views/F/F4.php");
    include("views/F/F5.php");
    include("views/F/F6.php");
    include("views/F/F7.php");
    include("views/F/F8.php");
    include("views/F/F9.php");
    include("views/F/F10.php");
    include("views/F/F11.php");
?>