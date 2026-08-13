let inputNumero = document.getElementById('input-numero')
let seletorDados = document.getElementById('seletor-dados')
let painelResultado = document.querySelector('div#painel-resultado')
let botaoInserir = document.getElementById('botao-inserir')
let colecaoValores = []

function inserirNumero() {
    let valorNumerico = Number(inputNumero.value)

    if (inputNumero.value.length === 0) {
        window.alert('Por favor, digite um número!')
        return
    }

    if (checarIntervalo(valorNumerico) && verificarDuplicidade(valorNumerico, colecaoValores)) {
        colecaoValores.push(valorNumerico)
        let elementoOpcao = document.createElement('option')
        elementoOpcao.text = `Valor ${valorNumerico} adicionado`
        seletorDados.appendChild(elementoOpcao)
        
        painelResultado.innerHTML = ''
    } else {
        window.alert('O valor está fora do intervalo (0-100) ou já foi adicionado!')
    }

    inputNumero.value = ''
    inputNumero.focus()
}

function checarIntervalo(n) {
    return n >= 0 && n <= 100
}

function verificarDuplicidade(n, l) {
    return l.indexOf(n) == -1
}

function processarResultados() {
    let quantidadeTotal = colecaoValores.length
    let acumuladorSoma = 0
    let valorMedia = 0

    if (quantidadeTotal === 0) {
        window.alert('Insira valores na lista antes de calcular!')
        return
    }

    for (let pos in colecaoValores) {
        acumuladorSoma += colecaoValores[pos]
    }

    valorMedia = acumuladorSoma / quantidadeTotal
    Math.round(valorMedia, 2)

    colecaoValores.sort((a, b) => a - b)

    painelResultado.innerHTML = `
        <p>Ao todo, temos <strong>${quantidadeTotal}</strong> números cadastrados!</p> 
        <p>O menor valor da lista é <strong>${colecaoValores[0]}</strong></p>
        <p>O maior valor da lista é <strong>${colecaoValores[quantidadeTotal - 1]}</strong></p>
        <p>Soma dos valores do Vetor: <strong>${acumuladorSoma}</strong></p>
        <p>A média dos valores da lista é: <strong>${valorMedia}</strong></p>
    `
    inputNumero.focus()
}

function limparConsulta() {
    colecaoValores = []
    seletorDados.innerHTML = ''
    painelResultado.innerHTML = ''
    inputNumero.value = ''
    inputNumero.focus()
}