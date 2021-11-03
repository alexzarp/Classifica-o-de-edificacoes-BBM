<?php
	include("functions/A/A1/UM.php");

	$medidas = array();
	$medidasJSON = json_decode(file_get_contents(("medidas.json")));

	$nivel1	= $_GET["1"];
	$nivel2	= $_GET["2"];
	$nivel3	= isset($_GET["3"])	? $_GET["3"] : null;

	// provavelmente seria melhor quebrar isso em várias funções.
	// resolver qual seria o melhor lugar para definir estas funções.
	switch($nivel1) {
		case "A":
			switch($nivel2) {
				case "A1":
					switch($nivel3) {
						case "UnifamiliarMista":
							$medidas = UM($medidas);
							break;
					}
					break;
			}
			break;

	}

	if(count($medidas))
		echo "Nenhuma medida necessária.";

	else foreach($medidas as $medida) {
		echo "<div>" . $medidasJSON[$medida]->nome . "</div>";
	}
?>