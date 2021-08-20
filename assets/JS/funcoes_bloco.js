azul = "#307BFF";
laranja = "#EB8C13";
roxo = "#A438E6";
branco = "#FFFFFF";
preto = "#000000";

function resetaBlocos() {
    var lista = document.getElementsByClassName("bloco").length;
    for (i = 0; i < lista; i++){
        document.getElementsByClassName("bloco")[i].style.backgroundColor = "#DFDFDF";
        document.getElementsByClassName("bloco")[i].querySelector("svg").style.color = "inherit";
        document.getElementsByClassName("bloco")[i].querySelector("h4").style.color = "inherit";
    }
}

function ocultaMostraBlocos(vet = [], bin) {
    if (bin == 0) {
        vet.forEach(element => {
            document.getElementById(element).style.display = 'none';
        });
    } else {
        vet.forEach(element => {
            document.getElementById(element).style.display = 'inherit';
        });
    }
    
}

function blocos(value_, value) {
    document.getElementById(value_).style.display = 'inherit';

    document.getElementById(value).style.backgroundColor = azul;
    document.getElementById(value).querySelector("h4").style.color = branco;
    document.getElementById(value).querySelector("svg").style.color = branco; // pelo fato que não conter um svg nos sublocos, isso causa um erro no consele, buscar uma solução simples para isso
}

// function blocoA() {
//     ocultaMostraBlocos(["G", "H", "I", "J", "K", "L", "M"], 0);

//     document.getElementById("A_").style.display = 'inherit';

//     document.getElementById("A").style.backgroundColor = azul;
//     document.getElementById("A").querySelector("svg").style.fill = "#FFFFFF";
//     document.getElementById("A").querySelector("h4").style.color = "#FFFFFF";
// }

// function blocoA1() {
//     document.getElementById("A1_").style.display = 'inherit';

//     document.getElementById("A1").style.backgroundColor = laranja;
//     document.getElementById("A1").querySelector("svg").style.fill = "#FFFFFF";
//     document.getElementById("A1").querySelector("h4").style.color = "#FFFFFF";
// }

// function blocoA2() {
//     document.getElementById("A2_").style.display = 'inherit';

//     document.getElementById("A2").style.backgroundColor = laranja;
//     document.getElementById("A2").querySelector("svg").style.fill = "#FFFFFF";
//     document.getElementById("A2").querySelector("h4").style.color = "#FFFFFF";
// }

// function blocoUM() {
//     document.getElementById("UnifamiliarMista_").style.display = 'inherit';

//     document.getElementById("UnifamiliarMista").style.backgroundColor = roxo;
//     document.getElementById("UnifamiliarMista").querySelector("svg").style.fill = "#FFFFFF";
//     document.getElementById("UnifamiliarMista").querySelector("h4").style.color = "#FFFFFF";
// }