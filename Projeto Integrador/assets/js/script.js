/* DevHook - Script Principal

    No momento, as principais funções do site são:
    - Menu Hamburger;

*/

// MENU HAMBURGER
const botaoMenu = document.getElementById("botao-menu");
const navegacao = document.getElementById("navegacao-principal");

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
const filtroTipo = document.getElementById("filtro-tipo");
const filtroTecnologia = document.getElementById("filtro-tecnologia");
const filtroLocalidade = document.getElementById("filtro-localidade");

const botaoLimparFiltros = document.getElementById("botao-limpar-filtros");

const vagas = document.querySelectorAll(".cartao-vaga");

const contadorVagas = document.getElementById("contador-vagas");
const mensagemSemVagas = document.getElementById("mensagem-sem-vagas");


/* FUNÇÃO PARA FILTRAR AS VAGAS */
function filtrarVagas() {

    const tipoSelecionado = filtroTipo.value;
    const tecnologiaSelecionada = filtroTecnologia.value;
    const localidadeSelecionada = filtroLocalidade.value;

    let quantidadeVagas = 0;

    vagas.forEach(function (vaga) {

        const tipoVaga = vaga.dataset.tipo;
        const tecnologiasVaga = vaga.dataset.tecnologias;
        const localidadeVaga = vaga.dataset.localidade;

        /* Verifica o tipo da vaga */
        const tipoCorreto =
            tipoSelecionado === "todos" ||
            tipoVaga === tipoSelecionado;

        /* Verifica a tecnologia */
        const tecnologiaCorreta =
            tecnologiaSelecionada === "todas" ||
            tecnologiasVaga.includes(tecnologiaSelecionada);

        /* Verifica a localidade */
        const localidadeCorreta =
            localidadeSelecionada === "todas" ||
            localidadeVaga === localidadeSelecionada;

        if (tipoCorreto && tecnologiaCorreta && localidadeCorreta) {

            vaga.classList.remove("vaga-oculta");
            quantidadeVagas++;

        } else {

            vaga.classList.add("vaga-oculta");
 
        }
    });

    /* Atualiza o contador */
    if (contadorVagas) {

        if (quantidadeVagas === 1) {
            contadorVagas.textContent = "1 vaga encontrada";
        } else {
            contadorVagas.textContent =
                quantidadeVagas + " vagas encontradas";
        }

    }

    /* Mensagem feedback */
    if (mensagemSemVagas) {

        if (quantidadeVagas === 0) {
            mensagemSemVagas.hidden = false;
        } else {
            mensagemSemVagas.hidden = true;
        }

    }

}

/* ATUALIZA OS FILTROS AUTOMATICAMENTE */
if (filtroTipo) {
    filtroTipo.addEventListener("change", filtrarVagas);
}

if (filtroTecnologia) {
    filtroTecnologia.addEventListener("change", filtrarVagas);
}

if (filtroLocalidade) {
    filtroLocalidade.addEventListener("change", filtrarVagas);
}

/* LIMPAR FILTROS */
if (botaoLimparFiltros) {

    botaoLimparFiltros.addEventListener("click", function () {

        filtroTipo.value = "todos";
        filtroTecnologia.value = "todas";
        filtroLocalidade.value = "todas";

        filtrarVagas();

    });

}

/* BOTÕES DE CANDIDATURA */
const botoesCandidatar = document.querySelectorAll(".botao-candidatar");

botoesCandidatar.forEach(function (botao) {

    botao.addEventListener("click", function () {

        alert("A candidatura será disponibilizada em breve!");

    });

});