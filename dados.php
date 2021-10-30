<?php
include_once("assets/img/imagens.php");
$vetor_nvl1 = [
    [
        "id" => "A",
        "titulo" => "A - Residencial",
        "imagem" => $A,
        "alt" => "Casa"
    ],
    [
        "id" => "B",
        "titulo" => "B - Serviço de Hospedagem",
        "imagem" => $B,
        "alt" => "Hotel"
    ],
    [
        "id" => "C",
        "titulo" => "C - Comercial",
        "imagem" => $C,
        "alt" => "Comercio"
    ],
    [
        "id" => "D",
        "titulo" => "D - Serviço profissional",
        "imagem" => $D,
        "alt" => "Profissional"
    ],
    [
        "id" => "E",
        "titulo" => "E - Educacional e<br>Cultura física",
        "imagem" => $E,
        "alt" => "Educacão"
    ],
    [
        "id" => "F",
        "titulo" => "F - Local de Reunião de Público",
        "imagem" => $F,
        "alt" => "Reunião"
    ],
    [
        "id" => "G",
        "titulo" => "G - Serviço automotivo e<br>assemelhados",
        "imagem" => $G,
        "alt" => "Carro"
    ],
    [
        "id" => "H",
        "titulo" => "H - Serviço de saúde e<br>institucional",
        "imagem" => $H,
        "alt" => "Hospital"
    ],
    [
        "id" => "I",
        "titulo" => "I - Indústria",
        "imagem" => $I,
        "alt" => "Indústria"
    ],
    [
        "id" => "J",
        "titulo" => "J - Depósito",
        "imagem" => $J,
        "alt" => "Indústria"
    ],
    [
        "id" => "K",
        "titulo" => "K - Energia",
        "imagem" => $K,
        "alt" => "Energia"
    ],
    [
        "id" => "L",
        "titulo" => "L - Explosivo",
        "imagem" => $L,
        "alt" => "Explosivo"
    ],
    [
        "id" => "M",
        "titulo" => "M - Especial",
        "imagem" => $M,
        "alt" => "Especial"
    ]
];

$vetor_nvl2_A = [
    [
        "id" => "A1",
        "titulo" => "A1 - Multifamiliar horizontal e unifamiliar",
        // "imagem" => $A1,
    ],
    [
        "id" => "A2",
        "titulo" => "A2 - Multifamiliar vertical",
        // "imagem" => $A2,
    ],
    [
        "id" => "A3",
        "titulo" => "A3 - Coletiva",
        // "imagem" => $A3,
    ]
];

$vetor_nvl3_A1 = [
    [
        "id" => "UnifamiliarMista",
        "titulo" => "Unifamiliar mista",
        // "imagem" => $UnifamiliarMista,
    ],
    [
        "id" => "Geminadas",
        "titulo" => "Geminadas",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "Isoladas",
        "titulo" => "Isoladas",
        // "imagem" => $Geminadas,
    ]
];

$vetor_nvl2_B = [
    [
        "id" => "B1",
        "titulo" => "B1 - Hotel e assemelhado",
        // "imagem" => $UnifamiliarMista,
    ],
    [
        "id" => "B2",
        "titulo" => "B2 - Hotel e residencial",
        // "imagem" => $Geminadas,
    ]
];

$vetor_nvl2_C = [
    [
        "id" => "C1",
        "titulo" => "C1 - Comércio com baixa carga de incêndio",
        // "imagem" => $UnifamiliarMista,
    ],
    [
        "id" => "C2",
        "titulo" => "C2 - Comércio com média e alta carga de incêndio",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "C3",
        "titulo" => "C3 - Shopping centers",
        // "imagem" => $Geminadas,
    ]
];

$vetor_nvl2_D = [
    [
        "id" => "D1",
        "titulo" => "D1 - Local para prestação de serviço profissional ou condução de negócios",
        // "imagem" => $UnifamiliarMista,
    ],
    [
        "id" => "D2",
        "titulo" => "D2 - Agência bancária",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "D3",
        "titulo" => "D3 - Serviço de reparação",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "D4",
        "titulo" => "D4 - Laboratório",
        // "imagem" => $Geminadas,
    ]
];

$vetor_nvl2_E = [
    [
        "id" => "E1",
        "titulo" => "E1 - Escola em geral",
        // "imagem" => $UnifamiliarMista,
    ],
    [
        "id" => "E2",
        "titulo" => "E2 - Escola especial",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "E3",
        "titulo" => "E3 - Espaço para cultura física",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "E4",
        "titulo" => "E4 - Centro de treinamento profissional",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "E5",
        "titulo" => "E5 - Pré-escola",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "E6",
        "titulo" => "E6 - Escola para portadores de deficiência",
        // "imagem" => $Geminadas,
    ]
];

$vetor_nvl2_F = [
    [
        "id" => "F1",
        "titulo" => "F1 - Local onde há objeto de valor inestimável",
        // "imagem" => $UnifamiliarMista,
    ],
    [
        "id" => "F2",
        "titulo" => "F2 - Local religioso e velório",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "F3",
        "titulo" => "F3 - Centro esportivo e de exibição",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "F4",
        "titulo" => "F4 - Estação e terminal de passageiros",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "F5",
        "titulo" => "F5 - Arte cênica e auditório",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "F6",
        "titulo" => "F6 - Clubes sociais e diversão",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "F7",
        "titulo" => "F7 - Construção provisória",
        // "imagem" => $UnifamiliarMista,
    ],
    [
        "id" => "F8",
        "titulo" => "F8 - Local para refeição",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "F9",
        "titulo" => "F9 - Recreação pública",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "F10",
        "titulo" => "F10 - Exposição de objetos ou animais",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "F11",
        "titulo" => "F11 - Boate",
        // "imagem" => $Geminadas,
    ]
];

$vetor_nvl2_G = [
    [
        "id" => "G1",
        "titulo" => "G1 - Garagem sem acesso de público e sem abastecimento",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "G2",
        "titulo" => "G2 - Garagem com acesso de público e sem abastecimento",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "G3",
        "titulo" => "G3 - Local dotado de abastecimento de combustível",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "G4",
        "titulo" => "G4 - Serviço de conservação, manutenção e reparos",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "G5",
        "titulo" => "G5 - Hangares",
        // "imagem" => $Geminadas,
    ]
];

$vetor_nvl2_H = [
    [
        "id" => "H1",
        "titulo" => "H1 - Hospital veterinário e assemelhados",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "H2",
        "titulo" => "H2 - Local onde pessoas requerem cuidados especiais por limitações físicas ou mentais",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "H3",
        "titulo" => "H3 - Hospitalar",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "H4",
        "titulo" => "H4 - Edificações Públicas",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "H5",
        "titulo" => "H5 - Local onde a liberdade das pessoas sofre restrições",
        // "imagem" => $Geminadas,
    ],
    [
        "id" => "H6",
        "titulo" => "H6 - Clínica e consultório médico e odontológico",
        // "imagem" => $Geminadas,
    ]
];

$vetor_nvl2_I = [
    [
        "id" => "I1",
        "titulo" => "I1 - Locais onde a carga de incêndio não chega a 300 MJ/m2",
    ],
    [
        "id" => "I2",
        "titulo" => "I2 - Locais com carga de incêndio entre 300 a 1.200 MJ/m2",
    ],
    [
        "id" => "I3",
        "titulo" => "I3 - Locais com carga de incêndio superior a 1.200 MJ/m2",
    ]
];

$vetor_nvl2_J = [
    [
        "id" => "J1",
        "titulo" => "J1 - Depósitos de material incombustível",
    ],
    [
        "id" => "J2",
        "titulo" => "J2 - Depósito com baixa carga de incêndio",
    ],
    [
        "id" => "J3",
        "titulo" => "J3 - Depósito com média carga de incêndio",
    ],
    [
        "id" => "J4",
        "titulo" => "J4 - Depósito com alta carga de incêndio",
    ]
];

$vetor_nvl2_K = [
    [
        "id" => "K1",
        "titulo" => "K1 - Central de transmissão e distribuição de energia",
    ],
    [
        "id" => "K2",
        "titulo" => "K2 - Usinas",
    ]
];

$vetor_nvl2_L = [
    [
        "id" => "L1",
        "titulo" => "L1 - Comércio",
    ],
    [
        "id" => "L2",
        "titulo" => "L2 - Indústria",
    ],
    [
        "id" => "L3",
        "titulo" => "L3 - Depósito",
    ]
];

$vetor_nvl2_M = [
    [
        "id" => "M1",
        "titulo" => "M1 - Túnel",
    ],
    [
        "id" => "M2",
        "titulo" => "M2 - Líquido ou gás inflamáveis ou combustíveis",
    ],
    [
        "id" => "M3",
        "titulo" => "M3 - Central telefônica, TV, rádio, computação",
    ],
    [
        "id" => "M4",
        "titulo" => "M4 - Canteiro de Obras",
    ],
    [
        "id" => "M5",
        "titulo" => "M5 - Silos",
    ],
    [
        "id" => "M6",
        "titulo" => "M6 - Floresta nativa ou de cultivo",
    ],
    [
        "id" => "M7",
        "titulo" => "M7 - Pátio de contêineres",
    ],
    [
        "id" => "M8",
        "titulo" => "M8 - Posto de revenda de GLP risco I",
    ],
    [
        "id" => "M9",
        "titulo" => "M9 - Posto de revenda de GLP risco II",
    ],
    [
        "id" => "M10",
        "titulo" => "M10 - Minas subterrâneas",
    ],
    [
        "id" => "M11",
        "titulo" => "M11 - Atividades agropastoris e Olarias",
    ]
];
?>