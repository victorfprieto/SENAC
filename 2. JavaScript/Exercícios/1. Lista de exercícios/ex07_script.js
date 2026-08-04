/*Exercício 07*/
let numero = Number(prompt("Digite um número inteiro maior ou igual a 0:"));

while (numero < 0) {
    numero = Number(prompt("Número inválido! Digite um número maior ou igual a 0:"));
}

let fatorial = 1;

for (let i = 1; i <= numero; i++) {
    fatorial = fatorial * i;
}

alert("O fatorial de " + numero + " é " + fatorial);