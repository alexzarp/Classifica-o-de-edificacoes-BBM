// var menu;
// function porCima() {
//     if (!menu) {
//         document.getElementById("menu").style.display = 'flex';
//     } else {
//         document.getElementById("menu").style.display = 'none';
//     }

//     if (menu) {
//         menu = false
//     } else {
//         menu = true
//     }
// }
 
document.addEventListener("click", function(evt) {
    var flyoutElement = document.getElementById('botao_menu'),
        targetElement = evt.target;
    do {
        if (targetElement == flyoutElement) {
            document.getElementById("menu").style.display = 'flex';
            return;
        }
        targetElement = targetElement.parentNode;
    } while (targetElement);

    document.getElementById("menu").style.display = 'none';
});
