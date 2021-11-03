<?php
    function UM($medidas) {
        if($_GET["altura"] > 6) {
            $novasMedidas = array();
            $mednovasMedidasidas[] = 0;
            $novasMedidas[] = 1;
            $novasMedidas[] = 3;
            return array_merge($medidas, $novasMedidas);
        }
        return A2($medidas);
    }
?>