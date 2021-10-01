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
