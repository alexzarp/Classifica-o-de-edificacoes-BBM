<?php
include_once("assets/img/imagens.php");
$vetor_nvl1 = [
    [
        "id" => "A",
        "onClick" => "ocultaSubblocos('A_', 'A2_'); resetaBlocos('A', 'Isoladas'); blocos('A_', 'A');",
        "titulo" => "A - Residencial",
        "imagem" => $A,
        "alt" => "Casa"
    ],
    [
        "id" => "B",
        "onClick" => "blocos('B_', 'B')",
        "titulo" => "B - Serviço de Hospedagem",
        "imagem" => $B,
        "alt" => "Hotel"
    ],
    [
        "id" => "C",
        "onClick" => "blocos('C_', 'C')",
        "titulo" => "C - Comercial",
        "imagem" => $C,
        "alt" => "Comercio"
    ],
    [
        "id" => "D",
        "onClick" => "blocos('D_', 'D')",
        "titulo" => "D - Serviço profissional",
        "imagem" => $D,
        "alt" => "Profissional"
    ],
    [
        "id" => "E",
        "onClick" => "blocos('E_', 'E')",
        "titulo" => "E - Educacional e<br>Cultura física",
        "imagem" => $E,
        "alt" => "Educacão"
    ],
    [
        "id" => "F",
        "onClick" => "blocos('F_', 'F')",
        "titulo" => "F - Local de Reunião de Público",
        "imagem" => $F,
        "alt" => "Reunião"
    ],
    [
        "id" => "G",
        "onClick" => "blocos('G_', 'G')",
        "titulo" => "G - Serviço automotivo e<br>assemelhados",
        "imagem" => $G,
        "alt" => "Carro"
    ],
    [
        "id" => "H",
        "onClick" => "blocos('H_', 'H')",
        "titulo" => "H - Serviço de saúde e<br>institucional",
        "imagem" => $H,
        "alt" => "Hospital"
    ],
    [
        "id" => "I",
        "onClick" => "blocos('I_', 'I')",
        "titulo" => "I - Indústria",
        "imagem" => $I,
        "alt" => "Indústria"
    ],
    [
        "id" => "J",
        "onClick" => "blocos('J_', 'J')",
        "titulo" => "J - Depósito",
        "imagem" => $J,
        "alt" => "Indústria"
    ],
    [
        "id" => "K",
        "onClick" => "blocos('K_', 'K')",
        "titulo" => "K - Energia",
        "imagem" => $K,
        "alt" => "Energia"
    ],
    [
        "id" => "L",
        "onClick" => "blocos('L_', 'L')",
        "titulo" => "L - Explosivo",
        "imagem" => $L,
        "alt" => "Explosivo"
    ],
    [
        "id" => "M",
        "onClick" => "blocos('M_', 'M')",
        "titulo" => "M - Especial",
        "imagem" => $M,
        "alt" => "Especial"
    ]
];

$vetor_nvl2_A = [
    [
        "id" => "A1",
        "onClick" => "blocos('A1_', 'A1')",
        "titulo" => "A1 - Multifamiliar horizontal e unifamiliar",
        // "imagem" => $A1,
    ],
    [
        "id" => "A2",
        "onClick" => "blocos('A2_', 'A2')",
        "titulo" => "A2 - Multifamiliar vertical",
        // "imagem" => $A2,
    ],
    [
        "id" => "A3",
        "onClick" => "blocos('A2_', 'A3')", // caso espacial que eu uso o mesmo form A2
        "titulo" => "A3 - Coletiva",
        // "imagem" => $A3,
    ]
];

$vetor_nvl3_A1 = [
    [
        "id" => "UnifamiliarMista",
        "onClick" => "blocos('UnifamiliarMista_', 'UnifamiliarMista')",
        "titulo" => "Unifamiliar mista",
        // "imagem" => $UnifamiliarMista,
    ],
    [
        "id" => "Geminadas",
        "onClick" => "blocos('Geminadas_', 'Geminadas')",
        "titulo" => "Geminadas",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "Isoladas",
        "onClick" => "blocos('Geminadas_', 'Isoladas')",
        "titulo" => "Isoladas",
        // "imagem" => $Geminadas,
    ]
];

?>
