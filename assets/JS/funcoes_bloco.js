var classificacoes = document.querySelectorAll("#classificacoes input");
function coloreClassificacao(id) {
    classificacoes.forEach(c => {
        blocoAA1();
        if(c.id == id)
        {
            let label = document.querySelector("label[for=" + id + "]");
            label.style.display = 'inherit';
            label.style.backgroundColor = '#307BFF';
            label.style.color = '#FFFFFF';
            label.querySelector("img").src = "assets/img/nvl1/branco/" + id + ".svg";
            // document.getElementById("A_img").src = 'assets/img/nvl1/branco/casa.svg';
        }
        else
            document.getElementById("F").setAttribute("disabled", "disabled");
    });
}

// document.querySelectorAll(".bloco").forEach(element => {
//     element.addEventListener("click", function (e) {
//         document.querySelector("form").submit();
//     }
// )});

function blocoAA1() {

    document.getElementById("A2").setAttribute("disabled", "disabled");
    document.getElementById("A3").setAttribute("disabled", "disabled");

    document.getElementById("AA1").style.display = 'inherit';

    document.getElementById("A1").style.backgroundColor = '#EB8C13';
    document.getElementById("A1_h4").style.color = '#FFFFFF';
    document.getElementById("A1_img").src = 'assets/img/nvl2_A/branco/familia.svg'; 
}

function unifamiliar_mista() {
    document.getElementById("Geminadas").setAttribute("disabled", "disabled");
    document.getElementById("Isoladas").setAttribute("disabled", "disabled");

    // document.getElementById("").style.display = 'inherit';

    document.getElementById("UnifamiliarMista").style.backgroundColor = '#A438E6';
    document.getElementById("UnifamiliarMista").style.color = '#FFFFFF';
    document.getElementById("UnifamiliarMista_img").src = './assets/img/nvl2_A/nvl3_A1/branco/familia_sorrindo.svg';
}