/*Exerício 06*/
let jogar;

do {
    let numeroSorteado = Math.floor(Math.random() * 10) + 1;
    let palpite = 0;

    while (palpite != numeroSorteado){
        palpite = Number(prompt("Adivinhe um número de 1 a 10:"));

        if (palpite == numeroSorteado) {
            alert("Parabéns! Você acertou!");
        } else {
            alert("Errou! Tente novamente.");
        }
    }

    do {
        jogar = Number(prompt("Deseja jogar novamente?\n1 - Sim\n2 - Não"));

        if (jogar != 1 && jogar != 2) {
            alert("Opção inválida.");
        }
    } while (jogar != 1 && jogar != 2);
    
} while (jogar == 1);

alert("Obrigado por jogar!");