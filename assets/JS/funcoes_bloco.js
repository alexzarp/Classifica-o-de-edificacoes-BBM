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

    document.getElementById("AA").style.display = 'inherit';

    document.getElementById("A").style.backgroundColor = '#307BFF';
    document.getElementById("A_h4").style.color = '#FFFFFF';
    document.getElementById("A_img").src = 'assets/img/nvl1/branco/casa.svg'; 
}

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
    document.getElementById("UnifamiliarMista_img").src = '../assets/img/nvl2_A/nvl3_A1/branco/familia_sorrindo.svg';
}