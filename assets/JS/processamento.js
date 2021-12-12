// medida | IN | complemento
var medidas = [];

function B(num) {
    let area = document.getElementById(num).querySelector('#area').value;
    let altura = document.getElementById(num).querySelector('#altura').value;
    let pavimentos = document.getElementById(num).querySelector('#pavimentos').value;

    if (valida(num)) {
        if (area < 750 && altura < 12) {
            if (area < 200 && pavimentos < 4 && altura < 12) {
                medidas = [
                    ['Detecção automática de incêndio', null, 'Exigido detectores autônomos nos quartos'],
                    ['Extintores - Medida Vital', null, null],
                    ['Gás combustível', null, null],
                    ['Iluminação de emergencia', null, null],
                    ['Saídas de emergencia', null, null],
                    ['Sinalização para abandono de local - Medida Vital', null, null]
                ];
            }
    
            else if (area > 200 && pavimentos < 4 && altura < 12) {
                medidas = [
                    ['Detecção automática de incêndio', null, 'Exigido detectores autônomos nos quartos'],
                    ['Extintores - Medida Vital', null, null],
                    ['Gás combustível', null, null],
                    ['Iluminação de emergência', null, null],
                    ['Instalações elétricas de baixa voltagem - Medida Vital', null, null],
                    ['Saídas de emergência', null, null],
                    ['Sinalização para abandono de local - Medida Vital', null, null],
                    ['Controle de matériais de Acabamento', null, null]
                ]
            }
    
            else if (area < 200 && pavimentos >= 4 && altura < 12) {
                medidas = [
                    ['Detecção automática de incêndio', null, 'Exigido detectores autônomos nos quartos'],
                    ['Extintores - Medida Vital', null, null],
                    ['Gás combustível', null, null],
                    ['Iluminação de emergência - Medida Vital', null, null],
                    ['Saídas de emergência', null, null],
                    ['Sinalização para abandono de local - Medida Vital', null, null],
                    ['Hidráulico Preventivo', null, null]
                ]
            }
    
            else if (area > 200 && pavimentos >= 4 && altura < 12) {
                medidas = [
                    ['Controle de matériais de Acabamento', null, null],
                    ['Detecção automática de incêndio', null, 'Exigido detectores autônomos nos quartos'],
                    ['Extintores - Medida Vital', null, null],
                    ['Gás combustível', null, null],
                    ['Hidráulico Preventivo', null, null],
                    ['Iluminação de emergência - Medida Vital', null, null],
                    ['Instalações elétricas de baixa voltagem - Medida Vital', null, null],
                    ['Saídas de emergência', null, null],
                    ['Sinalização para abandono de local - Medida Vital', null, null]
                ]
            }
    
            else {
                medidas = [
                    [null, null, null]
                ]
            }
        }
    
        else if (area > 750 || altura > 12) {
            if (pavimentos == 1) { //térrea
                ['Acesso de viatura na edificação', '35', null],
                ['Alarme de incêndio', '12', null],
                ['Brigada de incêndio', '28', 'Conforme população fixa, observar IN 28'],
                ['Controle de materiais de acabamento', '18', null],
                ['Detecção automática de incêndio', '12', 'Detecção automática na cozinha, nos quartos e salas (próximos a entrada dos ambientes)'],
                ['Extintores - Medida Vital', '6', null],
                ['Gás combustível', '8', null],
                ['Hidráulico preventivo', '7', null],
                ['Iluminação de emergência - Medida Vital', '11', null],
                ['Instalação elétrica de baixa tensão - Medida Vital', '19', null],
                ['Saídas de emergência', '9', null],
                ['Sinalização para abandono de local - Medida Vital', '13', null],
                ['Proteção estrutural (TRRF)', '14', null]
            }
    
            else if (altura <= 6) {
                medidas = [
                    ['Acesso de viatura na edificação', '35', null],
                    ['Alarme de incêndio', '12', null],
                    ['Brigada de incêndio', '28', 'Conforme população fixa, observar IN 28'],
                    ['Compartimentação horizontal ou de áreas', '14', 'Somente compartimentação entre as unidades autônomas'],
                    ['Controle de materiais de acabamento', '18', null],
                    ['Detecção automática de incêndio', '12', 'Detecção automática na cozinha, nos quartos e salas (próximos a entrada dos ambientes)'],
                    ['Extintores - Medida Vital', '6', null],
                    ['Gás combustível', '8', null],
                    ['Hidráulico preventivo', '7', null],
                    ['Iluminação de emergência - Medida Vital', '11', null],
                    ['Instalação elétrica de baixa tensão - Medida Vital', '19', null],
                    ['Saídas de emergência', '9', null],
                    ['Sinalização para abandono de local - Medida Vital', '13', null],
                    ['Proteção estrutural (TRRF)', '14', null]
                ]
            }
    
            else if (6 < altura && altura <= 12) {
                medidas = [
                    ['Acesso de viatura na edificação', '35', null],
                    ['Alarme de incêndio', '12', null],
                    ['Brigada de incêndio', '28', 'Conforme população fixa, observar IN 28.'],
                    ['Compartimentação horizontal ou de áreas', '14', 'Pode ser substituída por chuveiros automáticos'],
                    ['Controle de materiais de acabamento', '18', null],
                    ['Detecção automática de incêndio', '12', 'Detecção automática na cozinha, nos quartos e salas (próximos a entrada dos ambientes)'],
                    ['Extintores - Medida Vital', '6', null],
                    ['Gás combustível', '8', null],
                    ['Hidráulico preventivo', '7', null],
                    ['Iluminação de emergência - Medida Vital', '11', null],
                    ['Instalação elétrica de baixa tensão - Medida Vital', '19', null],
                    ['Saídas de emergência', '9', null],
                    ['Sinalização para abandono de local - Medida Vital', '13', null],
                    ['Proteção estrutural (TRRF)', '14', null]
                ]
            }
    
            else if (12 < altura && altura <= 30) {
                medidas = [
                    ['Acesso de viatura na edificação', '35', null],
                    ['Alarme de incêndio', '12', null],
                    ['Brigada de incêndio', '28', 'Conforme população fixa, observar IN 28'],
                    ['Compartimentação vertical', '14', 'Pode ser substituído por controle de fumaça e chuveiro automático, exceto para compartimentação de fachada, shafts e dutos em edificações com até 90 m de altura'],
                    ['Compartimentação horizontal ou de áreas', '14', 'Pode ser substituída por chuveiros automáticos'],
                    ['Controle de materiais de acabamento', '18', null],
                    ['Detecção automática de incêndio', '12', 'Detecção automática na cozinha, nos quartos e salas (próximos a entrada dos ambientes)'],
                    ['Extintores - Medida Vital', '6', null],
                    ['Gás combustível', '8', null],
                    ['Hidráulico preventivo', '7', null],
                    ['Iluminação de emergência - Medida Vital', '11', null],
                    ['Instalação elétrica de baixa tensão - Medida Vital', '19', null],
                    ['Plano de emergência', '31', null],
                    ['Saídas de emergência', '9', null],
                    ['Sinalização para abandono de local - Medida Vital', '13', null],
                    ['Proteção estrutural (TRRF)', '14', null]
                ]
            }
    
            else if (30 < altura && altura < 60) {
                medidas = [
                    ['Acesso de viatura na edificação', '35', null],
                    ['Alarme de incêndio', '12', null],
                    ['Brigada de incêndio', '28', 'Conforme população fixa, observar IN 28.'],
                    ['Chuveiros automáticos', '15', null],
                    ['Compartimentação vertical', '14', 'Pode ser substituído por controle de fumaça e chuveiro automático, exceto para compartimentação de fachada, shafts e dutos'],
                    ['Compartimentação horizontal ou de áreas', '14', null],
                    ['Controle de materiais de acabamento', '18', null],
                    ['Detecção automática de incêndio', '12', null],
                    ['Extintores - Medida Vital', '6', null],
                    ['Gás combustível', '8', null],
                    ['Hidráulico preventivo', '7', null],
                    ['Iluminação de emergência - Medida Vital', '11', null],
                    ['Instalação elétrica de baixa tensão - Medida Vital', '19', null],
                    ['Plano de emergência', '31', null],
                    ['Saídas de emergência', '9', null],
                    ['Sinalização para abandono de local - Medida Vital', '13', null],
                    ['Proteção estrutural (TRRF)', '14', null]
                ]
            }
    
            else if (60 < altura && altura <= 90) {
                medidas = [
                    ['Acesso de viatura na edificação', '35', null],
                    ['Alarme de incêndio', '12', null],
                    ['Brigada de incêndio', '28', 'Conforme população fixa, observar IN 28'],
                    ['Chuveiros automáticos', '15', null],
                    ['Compartimentação vertical', '14', 'Pode ser substituído por controle de fumaça e chuveiro automático, exceto para compartimentação de fachada, shafts e dutos'],
                    ['Compartimentação horizontal ou de áreas', '14', null],
                    ['Controle de materiais de acabamento', '18', null],
                    ['Detecção automática de incêndio', '12', null],
                    ['Elevador de emergência', '9', null],
                    ['Extintores - Medida Vital', '6', null],
                    ['Gás combustível', '8', null],
                    ['Hidráulico preventivo', '7', null],
                    ['Iluminação de emergência - Medida Vital', '11', null],
                    ['Instalação elétrica de baixa tensão - Medida Vital', '19', null],
                    ['Plano de emergência', '31', null],
                    ['Saídas de emergência', '9', null],
                    ['Sinalização para abandono de local - Medida Vital', '13', null],
                    ['Proteção estrutural (TRRF)', '14', null]
                ]
            }
    
            else if (altura > 90) {
                medidas = [
                    ['Acesso de viatura na edificação', '35', null],
                    ['Alarme de incêndio', '12', null],
                    ['Brigada de incêndio', '28', 'Conforme população fixa, observar IN 28'],
                    ['Chuveiros automáticos', '15', null],
                    ['Compartimentação vertical', '14', null],
                    ['Compartimentação horizontal ou de áreas', '14', null],
                    ['Controle de fumaça', null, null],
                    ['Controle de materiais de acabamento', '18', null],
                    ['Detecção automática de incêndio', '12', null],
                    ['Elevador de emergência', '9', null],
                    ['Extintores - Medida Vital', '6', null],
                    ['Gás combustível', '8', null],
                    ['Hidráulico preventivo', '7', null],
                    ['Iluminação de emergência - Medida Vital', '11', null],
                    ['Instalação elétrica de baixa tensão - Medida Vital', '19', null],
                    ['Plano de emergência', '31', null],
                    ['Saídas de emergência', '9', null],
                    ['Sinalização para abandono de local - Medida Vital', '13', null],
                    ['Proteção estrutural (TRRF)', '14', null]
                ]
            }
    
            else {
                medidas = [
                    [null, null, null]
                ]
            }
        }
    
        else {
            medidas = [
                [null, null, null]
            ]
        }
    
        dataInject(medidas);
    }
}