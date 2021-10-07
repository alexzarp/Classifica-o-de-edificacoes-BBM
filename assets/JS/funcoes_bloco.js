azul = "#307BFF";
laranja = "#EB8C13";
roxo = "#A438E6";
branco = "#FFFFFF";
preto = "#000000";

function resetaBlocos(comeco) {
    var lista = document.getElementsByClassName("bloco").length;
    for (i = 0; i < lista; i++){
        if (document.getElementsByClassName("bloco")[i].id == comeco) {
            for (j = i; j < lista; j++) {
                document.getElementsByClassName("bloco")[j].style.backgroundColor = "#DFDFDF";
                document.getElementsByClassName("bloco")[j].querySelector("h4").style.color = "inherit";
                if (document.getElementsByClassName("bloco")[j].querySelector("svg") != null) {
                    document.getElementsByClassName("bloco")[j].querySelector("svg").style.color = preto;
                }
            }
            break;
        }
    }
}

function ocultaSubblocos(comeco) {
    var lista = document.getElementsByClassName("sub_bloco").length;
    for (i = 0; i < lista; i++){
        if (document.getElementsByClassName("sub_bloco")[i].id == comeco) {
            for (j = i; j < lista; j++) {
                document.getElementsByClassName("sub_bloco")[j].style.display = 'none';
            }
            break;
        }
    }
}

// function blocos(value_, value) {
//     document.getElementById(value_).style.display = 'inherit';

//     document.getElementById(value).style.backgroundColor = azul;
//     document.getElementById(value).querySelector("h4").style.color = branco;
//     if (document.getElementById(value).querySelector("svg") != null) {
//         document.getElementById(value).querySelector("svg").style.color = branco;
//     }
// }

function blocos(value_, value) {
    document.getElementById(value_).style.display = 'inherit';

    document.getElementById(value).style.backgroundColor = azul;
    document.getElementById(value).querySelector("h4").style.color = branco;
    if (document.getElementById(value).querySelector("svg") != null) {
        document.getElementById(value).querySelector("svg").style.color = branco;
    }
}

function runScript(value, reset) {
    var reset_ = reset + '_';
    ocultaSubblocos(reset_);
    resetaBlocos(reset);
    var value_ = value + '_';
    blocos(value_, value);
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
        {opacity: '0'},
        {height: altura+'px', opacity: '1'}
      ], {
        // timing options
        duration: 500,
      });
}