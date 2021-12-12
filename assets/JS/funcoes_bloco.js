azul = "#307BFF";
laranja = "#EB8C13";
roxo = "#A438E6";
branco = "#FFFFFF";
preto = "#000000";

let niveis = Array();

function resetaBlocos(comeco) {
    document.getElementById('Medidas').style.display = 'none';
    let blocos = document.getElementsByClassName("bloco");
    for (i = 0; i < blocos.length; i++){
        if (blocos[i].id == comeco) {
            for (j = i; j < blocos.length; j++) {
                blocos[j].style.backgroundColor = "#DFDFDF";
                blocos[j].querySelector("h4").style.color = "inherit";
                if (blocos[j].querySelector("svg") != null) {
                    blocos[j].querySelector("svg").style.color = preto;
                }
            }
            break;
        }
    }
}

function ocultaSubblocos(comeco) {
    let sub_blocos = document.getElementsByClassName("sub_bloco");
    for (i = 0; i < sub_blocos.length; i++){
        if (sub_blocos[i].id == comeco) {
            for (j = i; j < sub_blocos.length; j++) {
                sub_blocos[j].style.display = 'none';
            }
            break;
        }
    }
}

// expande um "nível" do questionário.
function blocos(value_, value) {
    document.getElementById(value_).style.display = 'inherit';

    document.getElementById(value).style.backgroundColor = azul;
    document.getElementById(value).querySelector("h4").style.color = branco;
    if (document.getElementById(value).querySelector("svg") != null) {
        document.getElementById(value).querySelector("svg").style.color = branco;
    }
}

function runScript(nivel, value, reset) {
    if (nivel != 0) {
        niveis[nivel] = value;
    }
    var reset_ = reset + '_';
    ocultaSubblocos(reset_);
    resetaBlocos(reset);
    var value_ = value + '_';
    blocos(value_, value);
    if (nivel != 0) {
        animaDiv(value_);
    }
}

function animaDiv(value) {
    document.getElementById(value).scrollIntoView({
            behavior: 'smooth',
            block: 'center',
            inline: 'center'
        }
    );
    var altura = document.getElementById(value).clientHeight;
    altura = altura.toString();
    document.getElementById(value).animate([
        // keyframes
        {height: '0px', opacity: '0'},
        {opacity: '0', transform: 'scale(0.9)'},
        {height: altura+'px', opacity: '1', transform: 'scale(1.0)'}
      ], {
        // timing options
        duration: 500,
      });
}

// adiciona informações sobre os níveis no formulário antes de fazer a requisição.
var completaForm = (botao) => {
    let formElement = botao.parentElement;
    let inputs = formElement.children;

    // remove níveis caso já existam.
    for (let i = 0; i < inputs.length; i++)
        if(inputs[i].classList.contains('hidden_input'))
            inputs[i].remove();

    for(nivel in niveis) {
        let novoInput = document.createElement("input");
        novoInput.type = "text";
        novoInput.name = nivel;
        novoInput.value = niveis[nivel];
        novoInput.classList.add('hidden_input');
        novoInput.hidden = true;
        formElement.appendChild(novoInput);
    }

    formElement.submit();
}

function dataInject(medidas) {
    let string = '<tr><th>Medida</th><th>IN</th><th>Complemento</th></tr>';
    medidas.forEach(i => {
        if (i[0] != null) {
            string = string + '<tr>';
            string = string + '<td>' + i[0] + '</td>';

            if (i[1] != null) {
                string = string + '<td>' + i[1] + '</td>';
            } else {
                string = string + '<td>' + '-' + '</td>';
            }

            if (i[2] != null) {
                string = string + '<td>' + i[2] + '</td>';
            } else {
                string = string + '<td>' + '-' + '</td>';
            }
            string = string + '</tr>';
        } else {
            string = string + '<tr>';
            for (let k = 0; k < 3; k++) {
                string = string + '<td>' + '-' + '</td>';
            }
            string = string + '</tr>';
        }
    });
    document.getElementById('tabela').innerHTML = string;
    document.getElementById('Medidas').style.display = 'inherit';
    animaDiv('Medidas');
}

function valida(elemento) {
    let retorno = true;
    if (document.getElementById(elemento).querySelector('#area') != null) {
        let area = document.getElementById(elemento).querySelector('#area').value;
        if (area === "") {
            document.getElementById(elemento).querySelector('#area_erro').style.display = 'inherit';
            document.getElementById(elemento).querySelector('#br_area').innerHTML = '<br>';
            retorno = false;
        } else {
            document.getElementById(elemento).querySelector('#area_erro').style.display = 'none';
            document.getElementById(elemento).querySelector('#br_area').style.display = 'none';
            console.log(area);
        }
    }
    if (document.getElementById(elemento).querySelector('#altura') != null) {
        let altura = document.getElementById(elemento).querySelector('#altura').value;
        if (altura === "") {
            document.getElementById(elemento).querySelector('#altura_erro').style.display = 'inherit';
            document.getElementById(elemento).querySelector('#br_altura').innerHTML = '<br>';
            retorno = false;
        } else {
            document.getElementById(elemento).querySelector('#altura_erro').style.display = 'none';
            document.getElementById(elemento).querySelector('#br_altura').style.display = 'none';
            console.log(altura);
        }
    }
    if (document.getElementById(elemento).querySelector('#pavimentos') != null) {
        let pavimentos = document.getElementById(elemento).querySelector('#pavimentos').value;
        if (pavimentos === "") {
            document.getElementById(elemento).querySelector('#pavimentos_erro').style.display = 'inherit';
            document.getElementById(elemento).querySelector('#br_pavimentos').innerHTML = '<br>';
            retorno = false;
        } else {
            document.getElementById(elemento).querySelector('#pavimentos_erro').style.display = 'none';
            document.getElementById(elemento).querySelector('#br_pavimentos').style.display = 'none';
            console.log(pavimentos);
        }
    }
    if (document.getElementById(elemento).querySelector('#glp') != null) {
        let glp = document.getElementById(elemento).querySelector('#glp').value;
        if (glp === "") {
            document.getElementById(elemento).querySelector('#glp_erro').style.display = 'inherit';
            document.getElementById(elemento).querySelector('#br_glp').innerHTML = '<br>';
            retorno = false;
        } else {
            document.getElementById(elemento).querySelector('#glp_erro').style.display = 'none';
            document.getElementById(elemento).querySelector('#br_glp').style.display = 'none';
            console.log(glp);
        }
    }
    return retorno;
}
    