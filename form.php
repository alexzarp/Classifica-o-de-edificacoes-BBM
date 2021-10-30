<?php
	$medidas = array();
	$medidasJSON = json_decode(file_get_contents(("medidas.json")));

	$nivel1		= $_GET["1"];
	$nivel2		= $_GET["2"];
	$nivel3		= isset($_GET["3"])								? $_GET["3"] 					: null;

	$altura		= isset($_GET["altura"])						? intval($_GET["altura"])		: null;
	$area		= isset($_GET["area"])							? intval($_GET["area"])			: null;
	$volume		= isset($_GET["volume"])						? intval($_GET["volume"]) 		: null;
	$pavimentos	= isset($_GET["pavimentos"])					? intval($_GET["pavimentos"])	: null;
	$tipo		= isset($_GET["tipo"])							? $_GET["tipo"] 				: null;
	$glp		= isset($_GET["glp"]) && $_GET["glp"] == "sim"	? true							: false;

	// provavelmente seria melhor quebrar isso em várias funções.
	// resolver qual seria o melhor lugar para definir estas funções.
	switch($nivel1) {
		case "A":
			switch($nivel2) {
				case "A1":
					switch($nivel3) {
						case "UnifamiliarMista":
							if($altura > 6)
								$medidas[] = 0;
								$medidas[] = 1;
								$medidas[] = 3;
							break;
					}
					break;
			}
			break;

	}

	foreach($medidas as $medida) {
		echo "<div>" . $medidasJSON[$medida]->nome . "</div>";
	}
?>