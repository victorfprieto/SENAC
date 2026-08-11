const gameBox = document.getElementById('game-box');
const btnStart = document.getElementById('btn-start');
const resultado = document.getElementById('resultado');
const recordeElemento = document.getElementById('recorde');
const btnNormal = document.getElementById('btn-normal');
const btnDificil = document.getElementById('btn-dificil');

let timeoutId = null;
let startTime = 0;
let gameState = 'parado';
let dificuldadeAtual = 'normal'; 
let melhorTempo = localStorage.getItem('reflexo_recorde') || null;

atualizarDisplayRecorde();

btnStart.addEventListener('click', iniciarJogo);
gameBox.addEventListener('click', lidarComCliqueNaCaixa);

function mudarDificuldade(nivel) {

    if (gameState === 'contagem' || gameState === 'verde') return; 
    
    dificuldadeAtual = nivel;
    if (nivel === 'normal') {

        btnNormal.className = 'btn-diff ativo-normal';
        btnDificil.className = 'btn-diff';

    } else {

        btnDificil.className = 'btn-diff ativo-dificil';
        btnNormal.className = 'btn-diff';

    }
    resultado.innerHTML = `Modo <strong>${nivel.toUpperCase()}</strong> selecionado.`;

}

function atualizarDisplayRecorde() {

    if (melhorTempo) {

        recordeElemento.innerText = `Melhor Tempo: ${melhorTempo} ms`;

    } else {

        recordeElemento.innerText = `Melhor Tempo: -- ms`;

    }

}

function obterClassificacao(ms) {

    if (ms < 200) return "🚀 Piloto de F1 / Gamer Pro";
    if (ms < 250) return "⚡ Excelente";
    if (ms < 350) return "👍 Bom / Normal";
    return "☕ Precisa de mais café!";

}

function iniciarJogo() {

    if (timeoutId) clearTimeout(timeoutId);
    resultado.innerHTML = '';
    
    gameState = 'contagem';
    gameBox.className = 'amarelo';
    gameBox.innerText = 'Espere o verde...';
    btnStart.disabled = true;

    const delayAleatorio = Math.floor(Math.random() * 3000) + 2000;

    timeoutId = setTimeout(() => {

        if (gameState !== 'contagem') return;
        
        // MODO DIFÍCIL
        if (dificuldadeAtual === 'dificil' && Math.random() < 0.5) {

            const coresFalsas = [
                { classe: 'azul', nome: 'AZUL - NÃO CLIQUE!' },
                { classe: 'roxo', nome: 'ROXO - NÃO CLIQUE!' }
            ];
            const corEscolhida = coresFalsas[Math.floor(Math.random() * coresFalsas.length)];
            
            gameState = 'falso';
            gameBox.className = corEscolhida.classe;
            gameBox.innerText = corEscolhida.nome;

            timeoutId = setTimeout(() => {

                if (gameState !== 'falso') return;
                mudarParaVerde();

            }, 800);

        } else {

            mudarParaVerde();

        }

    }, delayAleatorio);

}

function mudarParaVerde() {

    gameState = 'verde';
    gameBox.className = 'verde';
    gameBox.innerText = 'CLIQUE! AGORA!';
    startTime = performance.now();

}

function lidarComCliqueNaCaixa() {

    if (gameState === 'contagem' || gameState === 'falso') {

        clearTimeout(timeoutId);
        gameState = 'parado';
        gameBox.className = 'vermelho';
        
        if (gameState === 'falso' || gameBox.classList.contains('azul') || gameBox.classList.contains('roxo')) {

            gameBox.innerText = 'Caiu na armadilha!';
            resultado.innerHTML = 'Você clicou na cor de distração!';

        } else {

            gameBox.innerText = 'Queimou a largada!';
            resultado.innerHTML = 'Você clicou antes da luz verde aparecer.';

        }

        btnStart.disabled = false;

    } 

    else if (gameState === 'verde') {

        const endTime = performance.now();
        const tempoReacao = Math.round(endTime - startTime);
        const classificacao = obterClassificacao(tempoReacao);
        
        gameState = 'parado';
        gameBox.className = '';
        gameBox.innerText = `${tempoReacao} ms`;
        
        let mensagemRecorde = '';

        if (!melhorTempo || tempoReacao < melhorTempo) {
            melhorTempo = tempoReacao;
            localStorage.setItem('reflexo_recorde', melhorTempo);
            atualizarDisplayRecorde();
            mensagemRecorde = '<br><strong style="color: #fba94c;">Novo Recorde Pessoal! 🎉</strong>';
        }

        resultado.innerHTML = `<strong>Seu tempo:</strong> ${tempoReacao} ms${mensagemRecorde}<br><span class="ranking-tag">${classificacao}</span>`;

        btnStart.disabled = false;

    }

}