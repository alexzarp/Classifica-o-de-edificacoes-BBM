azul = "#307BFF";
laranja = "#EB8C13";
roxo = "#A438E6";
branco = "#FFFFFF";
preto = "#000000";

function resetaBlocos(comeco, fim) {
    var lista = document.getElementsByClassName("bloco").length;
    for (i = 0; i < lista; i++){
        if (document.getElementsByClassName("bloco")[i].id == comeco) {
            for (j = i; j < lista; j++) {
                document.getElementsByClassName("bloco")[j].style.backgroundColor = "#DFDFDF";
                document.getElementsByClassName("bloco")[j].querySelector("h4").style.color = "inherit";
                if (document.getElementsByClassName("bloco")[j].querySelector("svg") != null) {
                    document.getElementsByClassName("bloco")[j].querySelector("svg").style.color = preto;
                }

                if (document.getElementsByClassName("bloco")[j].id == fim) {
                    break;
                }
            }
            break;
        }
    }
}

function ocultaSubblocos(comeco, fim) {
    var lista = document.getElementsByClassName("sub_bloco").length;
    for (i = 0; i < lista; i++){
        if (document.getElementsByClassName("sub_bloco")[i].id == comeco) {
            for (j = i; j < lista; j++) {
                document.getElementsByClassName("sub_bloco")[j].style.display = 'none';
                
                if (document.getElementsByClassName("sub_bloco")[j].id == fim) {
                    break;
                }
            }
            break;
        }
    }
}

// function ocultaMostraBlocos(vet = [], bin) {
    //     if (bin == 0) {
    //         vet.forEach(element => {
    //             document.getElementById(element).style.display = 'none';
    //         });
    //     } else {
    //         vet.forEach(element => {
    //             document.getElementById(element).style.display = 'inherit';
    //         });
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
