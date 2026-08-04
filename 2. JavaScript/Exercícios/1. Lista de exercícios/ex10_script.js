/*Exercíco 10*/
let degraus = Number(prompt("Digite o número de degraus (1 a 10): "));

while (degraus < 1 || degraus > 10) {

    degraus = Number(prompt("Valor inválido!\nDigite um número entre 1 e 10: "));

}

let escada = "";

for (let i = 1; i <= degraus; i++) {
    for (let j = 1; j <= i; j++) {
        escada += "*";
    }

    escada += "\n";
}

alert(escada);