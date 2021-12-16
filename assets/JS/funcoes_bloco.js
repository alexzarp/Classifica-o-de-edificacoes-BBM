azul = "#307BFF";
laranja = "#EB8C13";
roxo = "#A438E6";
branco = "#FFFFFF";
preto = "#000000";



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


function dataInject(medidas) {
    let string = '<tr><th>Medida</th><th>IN</th><th>Complemento</th></tr>';
    medidas.forEach(i => {
        if (i[0] != null) {
            string += '<tr>';
            string += '<td>' + i[0] + '</td>';

            if (i[1] != null) {
                string += '<td>' + i[1] + '</td>';
            } else {
                string += '<td>' + '-' + '</td>';
            }

            if (i[2] != null) {
                string += '<td>' + i[2] + '</td>';
            } else {
                string += '<td>' + '-' + '</td>';
            }
            string += '</tr>';
        } else {
            string += '<tr>';
            for (let k = 0; k < 3; k++) {
                string += '<td>' + '-' + '</td>';
            }
            string += '</tr>';
        }
    });
    document.getElementById('tabela').innerHTML = string;
    document.getElementById('Medidas').style.display = 'inherit';
    animaDiv('Medidas');
}

function valida(elemento) {
    let retorno = true;
    if (document.getElementById(elemento).querySelector('#area') != null) {
        var area = document.getElementById(elemento).querySelector('#area').value;
        if (area === "") {
            document.getElementById(elemento).querySelector('#area').style.borderColor = 'red';
            retorno = false;
        } else {
            document.getElementById(elemento).querySelector('#area').style.borderColor = '#DFDFDF';
        }
    }
    if (document.getElementById(elemento).querySelector('#altura') != null) {
        var altura = document.getElementById(elemento).querySelector('#altura').value;
        if (altura === "") {
            document.getElementById(elemento).querySelector('#altura').style.borderColor = 'red';
            retorno = false;
        } else {
            document.getElementById(elemento).querySelector('#altura').style.borderColor = '#DFDFDF';
        }
    }
    if (document.getElementById(elemento).querySelector('#pavimentos') != null) {
        var pavimentos = document.getElementById(elemento).querySelector('#pavimentos').value;
        if (pavimentos === "") {
            document.getElementById(elemento).querySelector('#pavimentos').style.borderColor = 'red';
            retorno = false;
        } else {
            document.getElementById(elemento).querySelector('#pavimentos').style.borderColor = '#DFDFDF';
        }
    }
    if (document.getElementById(elemento).querySelector('#glp') != null) {
        var glp = document.getElementById(elemento).querySelector('#glp').value;
        if (glp === "") {
            document.getElementById(elemento).querySelector('#glp').style.borderColor = 'red';
            retorno = false;
        } else {
            document.getElementById(elemento).querySelector('#glp').style.borderColor = '#DFDFDF';
        }
    }
    // if (document.getElementById(elemento).querySelector('#terrea') != null) {
    //     var terrea = document.getElementById(elemento).querySelector('#terrea').value;
    //     document.getElementById(elemento).querySelector('#terrea').style.display = 'none';
    //     if (area > 750 || altura > 12) {
    //         if (control) {
    //             document.getElementById(elemento).querySelector('#terrea').style.display = 'inherit';
    //             retorno = false;
    //             control = false;
    //         } else {
    //             if (terrea === "") {
    //                 document.getElementById(elemento).querySelector('#terrea').style.borderColor = 'red';
    //                 retorno = false;
    //             } else {
    //                 document.getElementById(elemento).querySelector('#terrea').style.borderColor = '#DFDFDF';
    //                 retorno = true;
    //                 control = true;
    //             }
    //         }
    //     }
    // }
    return retorno;
}
// var control = true;
    