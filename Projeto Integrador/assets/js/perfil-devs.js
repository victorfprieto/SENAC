document.addEventListener('DOMContentLoaded', () => {
    const setaPainel = document.querySelector('.seta-retratil, .bloco-vagas-andamento span, .vagas-cabecalho span');
    const blocoPainel = document.querySelector('.bloco-vagas-andamento');
    
    if (setaPainel && blocoPainel) {
        setaPainel.addEventListener('click', () => {
            const elementos = blocoPainel.querySelectorAll('.vaga-linha, .vagas-acao');
            elementos.forEach(el => el.classList.toggle('escondido'));
            setaPainel.textContent = setaPainel.textContent.trim() === '▲' ? '▼' : '▲';
        });
    }
});


