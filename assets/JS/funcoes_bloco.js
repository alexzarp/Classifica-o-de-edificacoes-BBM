// var classificacoes = document.querySelectorAll("#classificacoes input");
// function coloreClassificacao(id) {
//     classificacoes.forEach(c => {
//         blocoAA1();
//         if(c.id == id)
//         {
//             let label = document.querySelector("label[for=" + id + "]");
//             label.style.display = 'inherit';
//             label.style.backgroundColor = '#307BFF';
//             label.style.color = '#FFFFFF';
//             label.querySelector("img").src = "assets/img/nvl1/branco/" + id + ".svg";
//         }
//         else
//             document.getElementById("F").setAttribute("disabled", "disabled");
//     });
// }
azul = "#307BFF";
laranja = "#EB8C13";
roxo = "#A438E6";

function resetaBlocos() {
    var lista = document.getElementsByClassName("bloco").length;
    for (i = 0; i < lista; i++){
        document.getElementsByClassName("bloco")[i].style.backgroundColor = "#DFDFDF";
        document.getElementsByClassName("bloco")[i].querySelector("svg").style.fill = "inherit";
        document.getElementsByClassName("bloco")[i].querySelector("h4").style.color = "inherit";
    }
}

function blocoA() {
    document.getElementById("B").setAttribute("disabled", "disabled");
    document.getElementById("C").setAttribute("disabled", "disabled");
    document.getElementById("D").setAttribute("disabled", "disabled");
    document.getElementById("E").setAttribute("disabled", "disabled");
    document.getElementById("F").setAttribute("disabled", "disabled");

    document.getElementById("G").style.display = 'none';
    document.getElementById("H").style.display = 'none';
    document.getElementById("I").style.display = 'none';
    document.getElementById("J").style.display = 'none';
    document.getElementById("K").style.display = 'none';
    document.getElementById("L").style.display = 'none';
    document.getElementById("M").style.display = 'none';

    document.getElementById("A_").style.display = 'inherit';

    document.getElementById("A").style.backgroundColor = azul;
    document.getElementById("A").querySelector("svg").style.fill = "#FFFFFF";
    document.getElementById("A").querySelector("h4").style.color = "#FFFFFF";
}

function blocoA1() {
    document.getElementById("A2").style.opacity = "opacity: 0.4;";
    document.getElementById("A3").style.opacity = "opacity: 0.4;";

    document.getElementById("A1").style.display = 'inherit';

    document.getElementById("A1").style.backgroundColor = laranja;
    document.getElementById("A1").querySelector("svg").style.fill = "#FFFFFF";
    document.getElementById("A1").querySelector("h4").style.color = "#FFFFFF";
}

function unifamiliar_mista() {
    document.getElementById("Geminadas").setAttribute("disabled", "disabled");
    document.getElementById("Isoladas").setAttribute("disabled", "disabled");

    // document.getElementById("").style.display = 'inherit';

    document.getElementById("UnifamiliarMista").style.backgroundColor = roxo;
    document.getElementById("UnifamiliarMista").style.color = '#FFFFFF';
    document.getElementById("UnifamiliarMista_img").src = '../assets/img/nvl2_A/nvl3_A1/branco/familia_sorrindo.svg';
}