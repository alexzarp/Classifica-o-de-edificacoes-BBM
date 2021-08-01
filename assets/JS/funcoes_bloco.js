function blocoA() {
    // document.querySelectorAll("#B, #C, #D, #E, #F").disabled = true;
    document.getElementById("B").setAttribute("disabled", "disabled");
    document.getElementById("C").setAttribute("disabled", "disabled");
    document.getElementById("D").setAttribute("disabled", "disabled");
    document.getElementById("E").setAttribute("disabled", "disabled");
    document.getElementById("F").setAttribute("disabled", "disabled");
    // document.querySelectorAll("#G, #H, #I, #J, #K, #L, #M").style.display = 'none';
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