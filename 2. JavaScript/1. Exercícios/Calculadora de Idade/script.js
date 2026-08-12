function analisarPerfil() {
    let inputAno = window.document.getElementById('campo-ano');
    let listaSexo = window.document.getElementsByName('opcao-sexo');
    let saidaTexto = window.document.getElementById('mensagem-resultado');
    let elementoImg = window.document.getElementById('foto-perfil');
    
    let anoNascimento = Number(inputAno.value);
    let idadeCalculada = 2026 - anoNascimento;
    let tipoSexo = '';
    
    if (listaSexo[0].checked) {
        tipoSexo = 'M';
    } else {
        tipoSexo = 'F';
    }

    switch (tipoSexo) {
        case 'M':
            if (idadeCalculada > 124 || idadeCalculada < 1) {
                saidaTexto.innerText = 'Opção inválida: Digite uma data válida (De 1900 à 2024)';
                elementoImg.style.display = 'none';
            } else if (idadeCalculada <= 2) {
                saidaTexto.innerText = `Você é um bebê de ${idadeCalculada} anos!`;
                elementoImg.style.display = 'block';
                elementoImg.src = './imagens/bebemenino.png';
            } else if (idadeCalculada < 14) {
                saidaTexto.innerText = `Você é uma criança de ${idadeCalculada} anos!`;
                elementoImg.style.display = 'block';
                elementoImg.src = './imagens/criancamenino.png'; 
            } else if (idadeCalculada < 18) {
                saidaTexto.innerText = `Você é um adolescente de ${idadeCalculada} anos!`;
                elementoImg.style.display = 'block';
                elementoImg.src = './imagens/adolescentemasc.png'; 
            } else if (idadeCalculada < 40) {
                saidaTexto.innerText = `Você é um jovem adulto de ${idadeCalculada} anos!`;
                elementoImg.style.display = 'block';
                elementoImg.src = './imagens/jovem-adulto.png';
            } else if (idadeCalculada < 55) {
                saidaTexto.innerText = `Você é um homem de ${idadeCalculada} anos!`;
                elementoImg.style.display = 'block';
                elementoImg.src = './imagens/homem.png';
            } else {
                saidaTexto.innerText = `Você é um senhor de ${idadeCalculada} anos!`;
                elementoImg.style.display = 'block';
                elementoImg.src = './imagens/idoso.png';
            }
        break;

        case 'F':
            if (idadeCalculada > 124 || idadeCalculada < 1) {
                saidaTexto.innerText = 'Opção inválida: Digite uma data válida (De 1900 à 2024)';
                elementoImg.style.display = 'none';
            } else if (idadeCalculada <= 2) {
                saidaTexto.innerText = `Você é uma bebê de ${idadeCalculada} anos!`;
                elementoImg.style.display = 'block';
                elementoImg.src = './imagens/bebemenina.png'; 
            } else if (idadeCalculada < 14) {
                saidaTexto.innerText = `Você é uma criança de ${idadeCalculada} anos!`;
                elementoImg.style.display = 'block';
                elementoImg.src = './imagens/criancamenina.png'; 
            } else if (idadeCalculada < 18) {
                saidaTexto.innerText = `Você é uma adolescente de ${idadeCalculada} anos!`;
                elementoImg.style.display = 'block';
                elementoImg.src = './imagens/adolescentefem.png';
            } else if (idadeCalculada < 40) {
                saidaTexto.innerText = `Você é um jovem adulto de ${idadeCalculada} anos!`;
                elementoImg.style.display = 'block';
                elementoImg.src = './imagens/jovem-adulta.png'; 
            } else if (idadeCalculada < 55) {
                saidaTexto.innerText = `Você é uma mulher de ${idadeCalculada} anos!`;
                elementoImg.style.display = 'block';
                elementoImg.src = './imagens/mulher.png'; 
            } else {
                saidaTexto.innerText = `Você é uma senhora de ${idadeCalculada} anos!`;
                elementoImg.style.display = 'block';
                elementoImg.src = './imagens/idosa.png';
            }
        break;
    }
}