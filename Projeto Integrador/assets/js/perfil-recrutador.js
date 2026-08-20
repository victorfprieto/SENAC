document.addEventListener('DOMContentLoaded', () => {
    const seta = document.querySelector('.seta-retratil');
    const blocoVagas = document.querySelector('.bloco-vagas-andamento');
    
    if (seta && blocoVagas) {
        seta.addEventListener('click', () => {
            const linhas = blocoVagas.querySelectorAll('.vaga-linha, .vagas-acao');
            
            linhas.forEach(elemento => {
                elemento.classList.toggle('escondido');
            });
            
            if (seta.textContent === '▲') {
                seta.textContent = '▼';
            } else {
                seta.textContent = '▲';
            }
        });
    }
});
