/* DevHook - Script Principal 

    No momento, as principais funções são:
    - Menu Hamburger;
    - Filtros de vagas;
    - Botão de limpar filtros;

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

/* FILTROS DE VAGAS */
var filtroTipo = document.getElementById("filtro-tipo");
var filtroTecnologia = document.getElementById("filtro-tecnologia");
var filtroLocalidade = document.getElementById("filtro-localidade");
var botaoLimparFiltros = document.getElementById("botao-limpar-filtros");

var vagas = document.querySelectorAll(".cartao-vaga");

var contadorVagas = document.getElementById("contador-vagas");
var mensagemSemVagas = document.getElementById("mensagem-sem-vagas");


/* FUNÇÃO PARA FILTRAR AS VAGAS */
function filtrarVagas() {

    var tipoSelecionado = filtroTipo.value;
    var tecnologiaSelecionada = filtroTecnologia.value;
    var localidadeSelecionada = filtroLocalidade.value;

    var quantidadeVagas = 0;

    for (var i = 0; i < vagas.length; i++) {

        var vaga = vagas[i];

        var tipoVaga = vaga.getAttribute("data-tipo");
        var tecnologiasVaga = vaga.getAttribute("data-tecnologias");
        var localidadeVaga = vaga.getAttribute("data-localidade");

        var tipoCorreto = false;
        if (tipoSelecionado == "todos" || tipoVaga == tipoSelecionado) {

            tipoCorreto = true;

        }

        var tecnologiaCorreta = false;
        if (tecnologiaSelecionada == "todas" || tecnologiasVaga.indexOf(tecnologiaSelecionada) != -1) {
            tecnologiaCorreta = true;

        }

        var localidadeCorreta = false;
        if (localidadeSelecionada == "todas" || localidadeVaga == localidadeSelecionada) {
            localidadeCorreta = true;

        }

        if (tipoCorreto == true && tecnologiaCorreta == true && localidadeCorreta == true) {

            vaga.className = "cartao-vaga";
            quantidadeVagas = quantidadeVagas + 1;

        } else {

            vaga.className = "cartao-vaga vaga-oculta";

        }
    }

    // CONTADOR DE VAGA
    if (contadorVagas != null) {
        if (quantidadeVagas == 1) {

            contadorVagas.innerText = "1 vaga encontrada";

        } else {

            contadorVagas.innerText = quantidadeVagas + " vagas encontradas";

        }
    }

    // MENSAGEM DE "SEM VAGAS"
    if (mensagemSemVagas != null) {

        if (quantidadeVagas == 0) {

            mensagemSemVagas.hidden = false;

        } else {

            mensagemSemVagas.hidden = true;

        }
    }
}


/* ATUALIZA OS FILTROS AUTOMATICAMENTE */
if (filtroTipo != null) {

    filtroTipo.onchange = filtrarVagas;

}

if (filtroTecnologia != null) {

    filtroTecnologia.onchange = filtrarVagas;

}

if (filtroLocalidade != null) {

    filtroLocalidade.onchange = filtrarVagas;

}


/* LIMPAR FILTROS */
if (botaoLimparFiltros != null) {

    botaoLimparFiltros.onclick = function() {

        filtroTipo.value = "todos";
        filtroTecnologia.value = "todas";
        filtroLocalidade.value = "todas";

        filtrarVagas();

    };
}


/* BOTÕES DE CANDIDATURA */
var botoesCandidatar = document.querySelectorAll(".botao-candidatar");

for (var j = 0; j < botoesCandidatar.length; j++) {

    botoesCandidatar[j].onclick = function() {

        var botaoClicado = this;

        botaoClicado.style.backgroundColor = "#28a745";
        botaoClicado.style.color = "#ffffff";

        setTimeout(function() {

            botaoClicado.style.backgroundColor = "";
            botaoClicado.style.color = "";

        }, 1500);
        
    };
}