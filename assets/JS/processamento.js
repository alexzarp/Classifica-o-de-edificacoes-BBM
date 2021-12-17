// medida | IN | complemento
var medidas = [];

function B(valor) {
    let area = document.getElementById(valor).querySelector('#area').value;
    let altura = document.getElementById(valor).querySelector('#altura').value;
    let pavimentos = document.getElementById(valor).querySelector('#pavimentos').value;

    if (valida(valor)) {
        if (area < 750 && altura < 12) {
            if (area < 200 && pavimentos < 4 && altura < 12) {
                // window.location("entrou");
                medidas = [
                    ['Detecção automática de incêndio', null, 'Exigido detectores autônomos nos quartos'],
                    ['Extintores - Medida Vital', null, null],
                    ['Gás combustível', null, null],
                    ['Iluminação de emergencia', null, null],
                    ['Saídas de emergencia', null, null],
                    ['Sinalização para abandono de local - Medida Vital', null, null]
                ];
            }
    
            else if ((area > 200) && (pavimentos < 4) && (altura < 12)) {
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
    
            else if ((area < 200) && (pavimentos >= 4) && (altura < 12)) {
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
    
            else if ((area > 200) && (pavimentos >= 4) && (altura < 12)) {
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
    
        if ((area > 750) || (altura > 12)) {
            if (pavimentos == 1) { //térrea
                medidas = [
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
                ]
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
    
            else if ((6 < altura) && (altura <= 12)) {
                medidas = [
                    ['Acesso de viatura na edificação', '35', null],
                    ['Alarme de incêndio', '12', null],
                    ['Brigada de incêndio', '28', 'Conforme população fixa, observar IN 28'],
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
    
            else if ((12 < altura) && (altura <= 30)) {
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
    
            else if ((30 < altura) && (altura < 60)) {
                medidas = [
                    ['Acesso de viatura na edificação', '35', null],
                    ['Alarme de incêndio', '12', null],
                    ['Brigada de incêndio', '28', 'Conforme população fixa, observar IN 28'],
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
    
            else if ((60 < altura) && (altura <= 90)) {
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

function esqueleto(valor) {
    let area = document.getElementById(valor).querySelector('#area').value;
    let altura = document.getElementById(valor).querySelector('#altura').value;
    let pavimentos = document.getElementById(valor).querySelector('#pavimentos').value;

    if (valida(valor)) {
        

        dataInject(medidas);
    }
}

function D(valor) {
    let area = document.getElementById(valor).querySelector('#area').value;
    let altura = document.getElementById(valor).querySelector('#altura').value;
    let pavimentos = document.getElementById(valor).querySelector('#pavimentos').value;

    if (valida(valor)) {
        if (area < 750 && altura < 12) {
            if (area < 200 && pavimentos < 4 && altura < 12) {
                medidas = [
                    ['Extintores - Medida Vital', null, null],
                    ['Gás combustivel', null, null],
                    ['Saídas de emergência', null, null]
                ]
            }

            else if (area < 200 && pavimentos >= 4 && altura < 12) {
                medidas = [
                    ['Extintores - Medida Vital', null, null],
                    ['Gás combustivel', null, null],
                    ['Hidráulico preventivo', null, null],
                    ['Saídas de emergência', null, null]
                ]
            }

            else if (area > 200 && pavimentos < 4 && altura < 12) {
                medidas = [
                    ['Extintores - Medida Vital', null, null],
                    ['Gás combustivel', null, null],
                    ['Saídas de emergência', null, null],
                    ['Instalações elétricas de baixa voltagem', null, null],
                    ['Sinalização para abandono de local - Medida vital', null, null],
                    ['Iluminação de emêrgencia - Medida vital', null, null]
                ]
            }

            else if (area > 200 && pavimentos >= 4 && altura < 12) {
                medidas = [
                    ['Extintores - Medida Vital', null, null],
                    ['Gás combustivel', null, null],
                    ['Hidráulico preventivo', null, null],
                    ['Saídas de emergência', null, null],
                    ['Instalações elétricas de baixa voltagem', null, null],
                    ['Sinalização para abandono de local - Medida vital', null, null],
                    ['Iluminação de emêrgencia - Medida vital', null, null]
                ]
            }

            else {
                medidas = [
                    [null, null, null]
                ]
            }
        }

        else if (area > 750 || altura >= 12) {
            if (pavimentos == 1 || altura <= 12) { //térrea
                medidas = [
                    ['Acesso de viatura na edificação', '35', null],
                    ['Alarme de incêndio', '12', null],
                    ['Brigada de incêndio', '28', 'Conforme população fixa, observar IN 28'],
                    ['Controle de materiais de acabamento', '18', null],
                    ['Compartimentação horizontal ou de áreas', '14', 'Pode ser substituído por chuveiros automáticos'],
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

            else if (12 < altura && altura <= 23) {// se você colocar || antes que me pergunte, uma altura maior que 23 será aceita
                medidas = [
                    ['Acesso de viatura na edificação', '35', null],
                    ['Alarme de incêndio', '12', null],
                    ['Brigada de incêndio', '28', 'Conforme população fixa, observar IN 28'],
                    ['Controle de materiais de acabamento', '18', null],
                    ['Compartimentação vertical', '14', 'Pode ser substituída por detecção automática'],
                    ['Compartimentação horizontal ou de áreas', '14', 'Pode ser substituído por detecção automática e chuveiros automáticos'],
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

            else if (23 < altura && altura <= 30) {
                medidas = [
                    ['Acesso de viatura na edificação', '35', null],
                    ['Alarme de incêndio', '12', null],
                    ['Brigada de incêndio', '28', 'Conforme população fixa, observar IN 28'],
                    ['Controle de materiais de acabamento', '18 ']
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