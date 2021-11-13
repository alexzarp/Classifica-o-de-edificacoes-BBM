azul = "#307BFF";
laranja = "#EB8C13";
roxo = "#A438E6";
branco = "#FFFFFF";
preto = "#000000";

let niveis = Array();

function resetaBlocos(comeco) {
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
    // if (nivel != 0) {
    //     animaDiv(value_);
    // }
    animaDiv(value_);
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