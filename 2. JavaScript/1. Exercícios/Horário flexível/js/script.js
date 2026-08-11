let entradaUsuario = prompt("Digite a hora atual (0 a 23):");

let hora = parseInt(entradaUsuario);

let corpo = document.getElementById("corpo");
let titulo = document.getElementById("titulo");
let textoHora = document.getElementById("texto-hora");
let imagem = document.getElementById("imagem");

let periodo = "";
let saudacao = "";
let caminhoImagem = "";

if (isNaN(hora) || hora < 0 || hora > 23) {

    titulo.innerText = "Horário inválido! ";
    textoHora.innerText = "Por favor, recarregue a página e digite um número entre 0 e 23.";
    imagem.style.display = "none";

} else {

    if (hora >= 6 && hora < 12) {

        periodo = "dia";
        saudacao = "Bom dia!";
        caminhoImagem = "imagens/imagem-bomdia.png";

    } else if (hora >= 12 && hora < 18) {

        periodo = "tarde";
        saudacao = "Boa tarde!";
        caminhoImagem = "imagens/imagem-boatarde.png";

    } else {

        periodo = "noite";
        saudacao = "Boa noite!";
        caminhoImagem = "imagens/imagem-boanoite.png";
        
    }

    corpo.className = periodo;
    titulo.innerText = saudacao;
    imagem.src = caminhoImagem;
    textoHora.innerText = `Agora são ${hora}:00 horas.`;

}