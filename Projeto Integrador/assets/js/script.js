/* DevHook 

    - Menu Hamburger;

*/

// MENU HAMBURGER
var botaoMenu = document.getElementById("botao-menu");
var navegacao = document.getElementById("navegacao-principal");

if (botaoMenu && navegacao) {

    botaoMenu.addEventListener("click", function () {

        navegacao.classList.toggle("menu-aberto");
        botaoMenu.classList.toggle("menu-aberto");

        const menuAberto = navegacao.classList.contains("menu-aberto");

        botaoMenu.setAttribute("aria-expanded", menuAberto);

        if (menuAberto) {
            botaoMenu.setAttribute("aria-label", "Fechar menu");
        } else {
            botaoMenu.setAttribute("aria-label", "Abrir menu");
        }

    });

}

