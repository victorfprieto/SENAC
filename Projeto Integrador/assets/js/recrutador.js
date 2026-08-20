const inputNome = document.getElementById('buscaNome');
const selectCategoria = document.getElementById('buscaCategoria');
const cards = document.querySelectorAll('.devs-calendario');

const CORES_TAGS = {
    'front-end': { bg: '#e1f5fe', text: '#0288d1' },
    'back-end': { bg: '#e8f5e9', text: '#2e7d32' },
    'mobile': { bg: '#fff3e0', text: '#ef6c00' },
    'full-stack': { bg: '#f3e5f5', text: '#7b1fa2' },
    'desktop': { bg: '#efebe9', text: '#4e342e' },
    'embedded': { bg: '#e0f2f1', text: '#00695c' },
    'cybersecurity developer': { bg: '#ffebee', text: '#c62828' },
    'cientista de dados': { bg: '#eceff1', text: '#37474f' },
    'devops': { bg: '#f1f8e9', text: '#558b2f   ' }
};

function obterCategoriasDoCard(card) {
    const atributo = card.getAttribute('data-categoria');
    if (!atributo) return [];
    
    return atributo.toLowerCase()
        .split(',')
        .map(cat => cat.trim())
        .filter(cat => cat !== '');
}

function gerarTagsColoridas() {
    cards.forEach(card => {
        const container = card.querySelector('.container-tags');
        if (!container) return;

        const categorias = obterCategoriasDoCard(card);
        container.innerHTML = '';

        categorias.forEach(cat => {
            const span = document.createElement('span');
            span.classList.add('tag-vaga');
            span.textContent = cat;

            const cores = CORES_TAGS[cat] || { bg: '#eceff1', text: '#455a64' };
            span.style.backgroundColor = cores.bg;
            span.style.color = cores.text;

            container.appendChild(span);
        });
    });
}

function filtrarProdutos() {
    const termoBusca = inputNome ? inputNome.value.toLowerCase().trim() : "";
    const categoriaSelecionada = selectCategoria.value.toLowerCase().trim();

    cards.forEach(card => {
        const paragrafo = card.querySelector('p');
        const textoDescricao = paragrafo ? paragrafo.textContent.toLowerCase() : "";
        
        const categoriasDoCard = obterCategoriasDoCard(card);
        const stringCategorias = categoriasDoCard.join(' ');

        const bateuNome = textoDescricao.includes(termoBusca) || stringCategorias.includes(termoBusca);
        const bateuCategoria = categoriaSelecionada === 'todos' || categoriasDoCard.includes(categoriaSelecionada);

        if (bateuNome && bateuCategoria) {
            card.classList.remove('escondido');
        } else {
            card.classList.add('escondido');
        }
    });
}

document.addEventListener('DOMContentLoaded', gerarTagsColoridas);

if (inputNome) {
    inputNome.addEventListener('input', filtrarProdutos);
}
if (selectCategoria) {
    selectCategoria.addEventListener('change', filtrarProdutos);
}
