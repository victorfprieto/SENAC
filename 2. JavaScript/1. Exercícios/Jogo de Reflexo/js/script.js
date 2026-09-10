const gameBox = document.getElementById('game-box');
const btnStart = document.getElementById('btn-start');
const resultado = document.getElementById('resultado');
const listaTop5 = document.getElementById('lista-top5');
const btnNormal = document.getElementById('btn-normal');
const btnDificil = document.getElementById('btn-dificil');
const btnHardcore = document.getElementById('btn-hardcore');
const historicoContainer = document.getElementById('historico-container');
const listaHistorico = document.getElementById('lista-historico');
const modalInstrucoes = document.getElementById('modal-instrucoes');

let timeoutId = null;
let startTime = 0;
let gameState = 'parado';
let dificuldadeAtual = 'normal'; 

let top5Scores = JSON.parse(localStorage.getItem('reflexo_top5')) || [];

let tentativasHardcoreRestantes = 0;
let somaTemposHardcore = 0;
let historicoTentativas = [];

atualizarDisplayTop5();

btnStart.addEventListener('click', iniciarFluxoJogo);
gameBox.addEventListener('click', lidarComCliqueNaCaixa);

function fecharModal() {
    modalInstrucoes.style.display = 'none';
}

function mudarDificuldade(nivel) {
    if (gameState === 'contagem' || gameState === 'verde' || gameState === 'falso') return; 
    
    dificuldadeAtual = nivel;
    
    btnNormal.className = 'btn-diff';
    btnDificil.className = 'btn-diff';
    btnHardcore.className = 'btn-diff';

    if (nivel === 'normal') {
        btnNormal.className = 'btn-diff ativo-normal';
        historicoContainer.style.display = 'none';
    } else if (nivel === 'dificil') {
        btnDificil.className = 'btn-diff ativo-dificil';
        historicoContainer.style.display = 'none';
    } else if (nivel === 'hardcore') {
        btnHardcore.className = 'btn-diff ativo-hardcore';
        historicoContainer.style.display = 'block';
    }
    
    resultado.innerHTML = `Modo <strong>${nivel.toUpperCase()}</strong> selecionado.`;
}

function atualizarDisplayTop5() {
    listaTop5.innerHTML = '';

    if (top5Scores.length === 0) {
        listaTop5.innerHTML = '<li style="font-weight: normal; color: #7c7c8a; text-align: center;">Nenhum registro ainda</li>';
        return;
    }

    top5Scores.forEach((item) => {
        const li = document.createElement('li');
        const nomeDificuldade = item.modo.charAt(0).toUpperCase() + item.modo.slice(1);
        li.innerText = `${item.tempo}ms (${nomeDificuldade})`;
        listaTop5.appendChild(li);
    });
}

function registrarPontuacao(tempo, modo) {
    top5Scores.push({ tempo: tempo, modo: modo });
    top5Scores.sort((a, b) => a.tempo - b.tempo);

    if (top5Scores.length > 5) {
        top5Scores = top5Scores.slice(0, 5);
    }

    localStorage.setItem('reflexo_top5', JSON.stringify(top5Scores));
    atualizarDisplayTop5();
}

function obterClassificacao(ms) {
    if (ms < 200) return "🚀 Piloto de F1 / Gamer Pro";
    if (ms < 250) return "⚡ Excelente";
    if (ms < 350) return "👍 Bom / Normal";
    return "☕ Precisa de mais café!";
}

function atualizarHistoricoUI() {
    if (dificuldadeAtual !== 'hardcore') return;
    
    listaHistorico.innerHTML = '';
    historicoTentativas.forEach(tempo => {
        const li = document.createElement('li');
        li.innerText = `${tempo} ms`;
        listaHistorico.appendChild(li);
    });
}

function iniciarFluxoJogo() {
    if (dificuldadeAtual === 'hardcore' && tentativasHardcoreRestantes === 0) {
        tentativasHardcoreRestantes = 5;
        somaTemposHardcore = 0;
        historicoTentativas = [];
        atualizarHistoricoUI();
    }
    iniciarRodada();
}

function iniciarRodada() {
    if (timeoutId) clearTimeout(timeoutId);
    resultado.innerHTML = '';
    
    gameState = 'contagem';
    gameBox.className = 'amarelo';
    
    if (dificuldadeAtual === 'hardcore') {
        gameBox.innerText = `Hardcore (${6 - tentativasHardcoreRestantes}/5)\nEspere o verde...`;
    } else {
        gameBox.innerText = 'Espere o verde...';
    }
    
    btnStart.disabled = true;

    const delayAleatorio = Math.floor(Math.random() * 3000) + 2000;

    timeoutId = setTimeout(() => {
        if (gameState !== 'contagem') return;
        
        if ((dificuldadeAtual === 'dificil' || dificuldadeAtual === 'hardcore') && Math.random() < 0.5) {
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

        if (dificuldadeAtual === 'hardcore') {
            tentativasHardcoreRestantes = 0;
        }
        btnStart.disabled = false;
        btnStart.innerText = 'Start';
    } 
    else if (gameState === 'verde') {
        const endTime = performance.now();
        const tempoReacao = Math.round(endTime - startTime);
        const classificacao = obterClassificacao(tempoReacao);
        
        gameState = 'parado';
        gameBox.className = '';
        
        if (dificuldadeAtual === 'hardcore') {
            somaTemposHardcore += tempoReacao;
            historicoTentativas.push(tempoReacao);
            atualizarHistoricoUI();
            tentativasHardcoreRestantes--;

            if (tentativasHardcoreRestantes > 0) {
                gameBox.innerText = `Acerto: ${tempoReacao} ms\nPróxima em instantes...`;
                resultado.innerHTML = `Boa! Faltam ${tentativasHardcoreRestantes} tentativas.`;
                btnStart.disabled = false;
                btnStart.innerText = 'Continuar Sequência';
                return;
            } else {
                const mediaFinal = Math.round(somaTemposHardcore / 5);
                gameBox.innerText = `Média: ${mediaFinal} ms`;
                const classificacaoMedia = obterClassificacao(mediaFinal);
                
                registrarPontuacao(mediaFinal, 'hardcore');

                resultado.innerHTML = `<strong>Média Final (5x):</strong> ${mediaFinal} ms<br><strong style="color: #fba94c;">Registrado no Top 5! 🎉</strong><br><span class="ranking-tag">${classificacaoMedia}</span>`;
                btnStart.innerText = 'Start';
                btnStart.disabled = false;
                return;
            }
        }

        gameBox.innerText = `${tempoReacao} ms`;
        registrarPontuacao(tempoReacao, dificuldadeAtual);

        resultado.innerHTML = `<strong>Seu tempo:</strong> ${tempoReacao} ms<br><strong style="color: #fba94c;">Registrado no Top 5! 🎉</strong><br><span class="ranking-tag">${classificacao}</span>`;
        btnStart.disabled = false;
        btnStart.innerText = 'Start';
    }
}