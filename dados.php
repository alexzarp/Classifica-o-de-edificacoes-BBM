<?php
include_once("assets/img/imagens.php");
$vetor_nvl1 = [
    [
        "id" => "A",
        "onClick" => "runScript('A', 'A');",
        "titulo" => "A - Residencial",
        "imagem" => $A,
        "alt" => "Casa"
    ],
    [
        "id" => "B",
        "onClick" => "runScript('B', 'A');",
        "titulo" => "B - Serviço de Hospedagem",
        "imagem" => $B,
        "alt" => "Hotel"
    ],
    [
        "id" => "C",
        "onClick" => "runScript('C', 'A');",
        "titulo" => "C - Comercial",
        "imagem" => $C,
        "alt" => "Comercio"
    ],
    [
        "id" => "D",
        "onClick" => "runScript('D', 'A');",
        "titulo" => "D - Serviço profissional",
        "imagem" => $D,
        "alt" => "Profissional"
    ],
    [
        "id" => "E",
        "onClick" => "runScript('E', 'A');",
        "titulo" => "E - Educacional e<br>Cultura física",
        "imagem" => $E,
        "alt" => "Educacão"
    ],
    [
        "id" => "F",
        "onClick" => "runScript('F', 'A');",
        "titulo" => "F - Local de Reunião de Público",
        "imagem" => $F,
        "alt" => "Reunião"
    ],
    [
        "id" => "G",
        "onClick" => "runScript('G', 'A');",
        "titulo" => "G - Serviço automotivo e<br>assemelhados",
        "imagem" => $G,
        "alt" => "Carro"
    ],
    [
        "id" => "H",
        "onClick" => "runScript('H', 'A');",
        "titulo" => "H - Serviço de saúde e<br>institucional",
        "imagem" => $H,
        "alt" => "Hospital"
    ],
    [
        "id" => "I",
        "onClick" => "runScript('I', 'A');",
        "titulo" => "I - Indústria",
        "imagem" => $I,
        "alt" => "Indústria"
    ],
    [
        "id" => "J",
        "onClick" => "runScript('J', 'A');",
        "titulo" => "J - Depósito",
        "imagem" => $J,
        "alt" => "Indústria"
    ],
    [
        "id" => "K",
        "onClick" => "runScript('K', 'A');",
        "titulo" => "K - Energia",
        "imagem" => $K,
        "alt" => "Energia"
    ],
    [
        "id" => "L",
        "onClick" => "runScript('L', 'A');",
        "titulo" => "L - Explosivo",
        "imagem" => $L,
        "alt" => "Explosivo"
    ],
    [
        "id" => "M",
        "onClick" => "runScript('M', 'A');",
        "titulo" => "M - Especial",
        "imagem" => $M,
        "alt" => "Especial"
    ]
];

$vetor_nvl2_A = [
    [
        "id" => "A1",
        "onClick" => "runScript('A1', 'A1');",
        "titulo" => "A1 - Multifamiliar horizontal e unifamiliar",
        // "imagem" => $A1,
    ],
    [
        "id" => "A2",
        "onClick" => "runScript('A2', 'A1');",
        "titulo" => "A2 - Multifamiliar vertical",
        // "imagem" => $A2,
    ],
    [
        "id" => "A3",
        "onClick" => "runScript('A3', 'A1');", // caso espacial que eu uso o mesmo form A2
        "titulo" => "A3 - Coletiva",
        // "imagem" => $A3,
    ]
];

$vetor_nvl3_A1 = [
    [
        "id" => "UnifamiliarMista",
        "onClick" => "runScript('UnifamiliarMista', 'UnifamiliarMista');",
        "titulo" => "Unifamiliar mista",
        // "imagem" => $UnifamiliarMista,
    ],
    [
        "id" => "Geminadas",
        "onClick" => "runScript('Geminadas', 'UnifamiliarMista');",
        "titulo" => "Geminadas",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "Isoladas",
        "onClick" => "runScript('Isoladas', 'UnifamiliarMista');",
        "titulo" => "Isoladas",
        // "imagem" => $Geminadas,
    ]
];

$vetor_nvl2_B = [
    [
        "id" => "B1",
        "onClick" => "runScript('B1', 'B1');",
        "titulo" => "B1 - Hotel e assemelhado",
        // "imagem" => $UnifamiliarMista,
    ],
    [
        "id" => "B2",
        "onClick" => "runScript('B2', 'B1');",
        "titulo" => "B2 - Hotel e residencial",
        // "imagem" => $Geminadas,
    ]
];

$vetor_nvl2_C = [
    [
        "id" => "C1",
        "onClick" => "runScript('C1', 'C1');",
        "titulo" => "C1 - Comércio com baixa carga de incêndio",
        // "imagem" => $UnifamiliarMista,
    ],
    [
        "id" => "C2",
        "onClick" => "runScript('C2', 'C1');",
        "titulo" => "C2 - Comércio com média e alta carga de incêndio",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "C3",
        "onClick" => "runScript('C3', 'C1');",
        "titulo" => "C3 - Shopping centers",
        // "imagem" => $Geminadas,
    ]
];

$vetor_nvl2_D = [
    [
        "id" => "D1",
        "onClick" => "runScript('D1', 'D1');",
        "titulo" => "D1 - Local para prestação de serviço profissional ou condução de negócios",
        // "imagem" => $UnifamiliarMista,
    ],
    [
        "id" => "D2",
        "onClick" => "runScript('D2', 'D1');",
        "titulo" => "D2 - Agência bancária",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "D3",
        "onClick" => "runScript('D3', 'D1');",
        "titulo" => "D3 - Serviço de reparação",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "D4",
        "onClick" => "runScript('D4', 'D1');",
        "titulo" => "D4 - Laboratório",
        // "imagem" => $Geminadas,
    ]
];

$vetor_nvl2_E = [
    [
        "id" => "E1",
        "onClick" => "runScript('E1', 'E1');",
        "titulo" => "E1 - Escola em geral",
        // "imagem" => $UnifamiliarMista,
    ],
    [
        "id" => "E2",
        "onClick" => "runScript('E2', 'E1');",
        "titulo" => "E2 - Escola espacial",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "E3",
        "onClick" => "runScript('E3', 'E1');",
        "titulo" => "E3 - Espaço para cultura física",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "E4",
        "onClick" => "runScript('E4', 'E1');",
        "titulo" => "E4 - Centro de treinamento profissional",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "E5",
        "onClick" => "runScript('E5', 'E1');",
        "titulo" => "E5 - Pré-escola",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "E6",
        "onClick" => "runScript('E6', 'E1');",
        "titulo" => "E6 - Escola para portadores de deficiência",
        // "imagem" => $Geminadas,
    ]
];
?>
